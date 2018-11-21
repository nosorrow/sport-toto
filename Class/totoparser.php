<?php
set_time_limit(0);

class TotoParser
{
    public $numbers = [];

    public $url;

    public $raw_data;

    public $draw_array = [];

    public $new_draw_array = [];

    public $parse_arraw = [];

    public $domain = 'http://www.toto.bg';

    public $stats = [3 => 0, 4 => 0, 5 => 0, 6 => 0];

    public $cache;

    /**
     * Parse constructor.
     */
    public function __construct()
    {
        // $this->url = $url;
    }

    public function parse()
    {
        $this->parseOldDraw();
        $this->parseNewDraws();

        $this->parse_arraw = array_merge($this->draw_array, $this->new_draw_array);

        file_put_contents('cache.php', var_export($this->parse_arraw, true));
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
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        if (!empty($post)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        $raw_data = curl_exec($ch);
        curl_close($ch);

        return $raw_data;

    }


    public function getNewDrawUrl()
    {
        $pattern = '#(\/results\/6x49\/2018-\d+)#';

        $data = $this->curl("http://www.toto.bg/results/6x49");

        preg_match_all($pattern, $data, $match);

        return $match;
    }

    /**
     * @return mixed
     */
    public function getFileUrl()
    {
        $pattern = '#(\/content\/files\/stats-tiraji\/649_(.+)\.txt)#';

        $data = $this->curl("http://www.toto.bg/statistika/6x49");

        preg_match_all($pattern, $data, $match);

        array_push($match[0], '/content/files/2018/01/26/2a0952991d371ca5575a4d79e5c5e5d5.txt');

        return $match;
    }


    public function parseOldDraw()
    {
        $_url = $this->getFileUrl();
        $x = count($_url[0]);

        for ($i = 0; $i < $x; $i++) {

            $url = $_url[0][$i];

            $raw_data = $this->curl($this->domain . $url);
            $raw_data = explode("\n", $raw_data);
            $raw_data = array_filter($raw_data);

            foreach ($raw_data as $str) {

                $_arr = explode(' ', $this->normalizeOldStatisticsString($str));

                foreach ($_arr as $k => $v) {
                    $digits = explode(',', $v);

                    if (count($digits) == 6) {
                        $this->draw_array[] = $digits;

                    } else {
                        die("Some Error!");

                    }
                }

            }
        }

    }

    public function parseNewDraws()
    {
        include_once('simple_html_dom.php');

        $url = array_reverse($this->getNewDrawUrl()[0]);

        $count = count($url);

        for ($i = 0; $i < $count; $i++) {

            // create HTML DOM
            $html = file_get_html($this->domain . $url[$i]);

            foreach ($html->find('div.tir_result span.ball-white') as $e) {
                $_arr[] = $e->innertext;

            }

            $html->clear();
            unset($html);
            $this->new_draw_array[$i] = $_arr;
            unset($_arr);

        }

        return $this;
    }

    /**
     * @param $str
     * @return string
     */
    protected function normalizeOldStatisticsString($str)
    {
        $str = trim($str);
        $matches = preg_match("#^\d+\s+#", $str, $match);

        if (strpos($str, '-')) {
            $str = substr($str, strpos($str, '-') + 1);

        } elseif ($matches) {
            $str = trim(substr($str, strlen($match[0])));

        } else {
            $str = substr($str, strpos($str, ',') + 1);

        }
        $_normalized_str = preg_replace('/\,\s+/', ',', $str);

        $normalized_str = preg_replace('/\s+/', ' ', $_normalized_str);

        return trim($normalized_str);
    }

    /**
     * @param $a
     * @return bool
     */
    public function check($a)
    {
        $tir = [];
        eval('$tir =' . file_get_contents('cache.php') . ";");
        $x = count($tir);
        // $tir = $this->array;
        // $x = count($this->array);
        for ($i = 0; $i < $x; $i++) {
            foreach ($a as $value) {
                if (in_array($value, $tir[$i])) {
                    $result[$i][] = $value;
                }
            }
        }

        if (isset($result)) {
            return ($result);

        }

        return false;
    }

    /**
     * @param array $a
     * @return array
     */
    public function statistics(array $a)
    {

        $check = (array)$this->check($a);

        foreach ($check as $value) {
            $i = count($value);

            if ($i >= 3) {
                $this->stats[$i] = $this->stats[$i] + 1;

            }
        }

        return $this->stats;

    }

    public function fromCache()
    {
        $this->statistics($this->numbers);
    }
}

echo '<pre>';
$start = microtime(true);
$o = new TotoParser();
$o->parse();



$end = microtime(true) - $start;

printf('Procesed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);

//$a = include_once 'cache.php';

//var_dump($a);