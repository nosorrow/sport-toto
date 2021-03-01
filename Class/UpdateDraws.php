<?php
set_time_limit(0);

class UpdateDraws
{
    public $numbers = [];

    public $url;

    public $raw_data;

    public $draw_array = [];

    public $new_draw_array = [];

    public $parse_arraw = [];

    public $domain = 'http://www.toto.bg';

    public $cache;

    private $igra;
    // 5 or 6
    private $ndigits;

    private $year;

    /**
     * Parse constructor.
     */
    public function __construct($igra = 649)
    {
        $draw = [];
        $y = new DateTime();
        $this->year = $y->format('Y');
        $this->igra = (string) $igra;
        $this->ndigits = $this->igra[0];
        $file = __DIR__ . '/OldDraws/cache' . $this->igra . '.php';

        eval('$draw =' . file_get_contents($file) . ";");

        $this->draw_array = $draw;
    }

    /**
     * Make File with draws
     */
    public function parse()
    {
        $this->parseNewDraws();
        die();

        $this->parse_arraw = array_merge(
            $this->draw_array,
            $this->new_draw_array
        );

        $file = 'Class/cache' . $this->igra . '.php';

        file_put_contents($file, var_export($this->parse_arraw, true));
    }

    /**
     * @param $url
     * @return mixed
     *
     */
    public function curl($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $raw_data = curl_exec($ch);
        curl_close($ch);

        return $raw_data;
    }

    public function getNewDrawUrl($year)
    {
        switch ($this->igra) {
            case '649':
                $pattern = '#(\/results\/6x49\/' . $year . '-\d+)#';
                $data = $this->curl("http://www.toto.bg/results/6x49");
                preg_match_all($pattern, $data, $match);
                break;

            case '535':
                $pattern = '#(\/results\/5x35\/' . $year . '-\d+)#';
                $data = $this->curl("http://www.toto.bg/results/5x35");
                preg_match_all($pattern, $data, $match);
                break;

            case '642':
                $pattern = '#(\/results\/6x42\/' . $year . '-\d+)#';
                $data = $this->curl("http://www.toto.bg/results/6x42");
                preg_match_all($pattern, $data, $match);
                break;
        }

        return $match;
    }

    /**
     * @return $this
     */
    public function parseNewDraws()
    {
        include_once 'simple_html_dom.php';
        $_arr = [];
        $url = array_reverse($this->getNewDrawUrl($this->year)[0]);
        $count = count($url);

        for ($i = 0; $i < $count; $i++) {
            // create HTML DOM
            $html = file_get_html($this->domain . $url[$i], true);
            // Взима номера на тиража, който ще е ключ на масива new_draw_array
            $nomer_tiraz_obj = $html->find('.tir_title');
            $nt_str = trim($nomer_tiraz_obj[0]->innertext);
            $nt = $this->getDrawNumber($nt_str);

            // Temp Масив от числата на всеки тираж
            foreach ($html->find('div.tir_result span.ball-white') as $e) {
                $_arr[] = $e->innertext;
            }
            // 535 има два тиража - делим масива
            if ($this->igra == '535') {
                $_arr = array_chunk($_arr, $this->ndigits);
                $this->new_draw_array[$nt . '-' . $this->year] = $_arr[0];
                $this->new_draw_array[$nt . '-' . $this->year . "-1"] =
                    $_arr[1];
            } else {
                $this->new_draw_array[$i] = $_arr;
            }

            $html->clear();
            unset($html);
            unset($_arr);
        }


        $diff = $this->getDiff($this->new_draw_array);

        array_push($this->new_draw_array, ...$diff);

        print_r($this->new_draw_array);die;
        $this->writeNewDraws($this->new_draw_array);
        die();

        return $this;
    }

    private function getDiff($draw): array
    {
        $oldFile = require __DIR__ . DIRECTORY_SEPARATOR . $this->igra . '.php';

        return array_diff_key($draw, $oldFile);
    }

    /**
     * @param $draw
     */
    private function writeNewDraws($draw)
    {
        file_put_contents(
            __DIR__ . DIRECTORY_SEPARATOR . $this->igra . '.php',
            '<?php return ' . var_export($draw, true) . ';'
        );
    }

    /**
     * @param $str
     * @return int
     */
    private function getDrawNumber($str)
    {
        $re = '#(Тираж\s*)(\d+)#um';
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        return (int) $matches[0][2];
    }
}
