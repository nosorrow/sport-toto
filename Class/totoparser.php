<?php

class TotoParser
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

    /**
     * Parse constructor.
     */
    public function __construct($igra = 649)
    {
        $this->igra = (string)$igra;

        $this->ndigits = $this->igra[0];
    }

    public function parse()
    {
        $this->parseOldDraw();
        // $this->parseNewDraws();

        $this->parse_arraw = array_merge($this->draw_array, $this->new_draw_array);

        $file = 'OldDraws/cache' . $this->igra . '.php';
        $file = file_put_contents($file, var_export($this->parse_arraw, true));

        return $file;

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
        switch ($this->igra) {
            case '649':
                $pattern = '#(\/results\/6x49\/2018-\d+)#';

                $data = $this->curl("http://www.toto.bg/results/6x49");

                preg_match_all($pattern, $data, $match);
                break;

            case '535':
                $pattern = '#(\/results\/5x35\/2018-\d+)#';

                $data = $this->curl("http://www.toto.bg/results/5x35");

                preg_match_all($pattern, $data, $match);
                break;
            case '642':
                $pattern = '#(\/results\/6x42\/2018-\d+)#';

                $data = $this->curl("http://www.toto.bg/results/6x42");

                preg_match_all($pattern, $data, $match);
                break;
        }
        return $match;

    }

    /**
     * @return mixed
     */
    public function getFileUrl()
    {
        switch ($this->igra) {
            case 649:
                $pattern = '#(\/content\/files\/stats-tiraji\/649_(.+)\.txt)#';

                $data = $this->curl("http://www.toto.bg/statistika/6x49");

                preg_match_all($pattern, $data, $match);
                var_dump($match);
                array_push($match[0], '/content/files/2018/01/26/2a0952991d371ca5575a4d79e5c5e5d5.txt');
                break;

            case 535:
                $pattern = '#(\/content\/files\/stats-tiraji\/535_(.+)\.txt)#';

                $data = $this->curl("http://www.toto.bg/statistika/5x35");

                preg_match_all($pattern, $data, $match);

                array_push($match[0], '/content/files/2018/01/26/e0992503391e9303df5f015db7f62baf.txt');
                break;

            case 642:
                $pattern = '#(\/content\/files\/stats-tiraji\/642_(.+)\.txt)#';

                $data = $this->curl("http://www.toto.bg/statistika/6x42");

                preg_match_all($pattern, $data, $match);
                array_push($match[0], '/content/files/2018/01/26/fe9f0df91ce6c82978baf6a29ea003d8.txt');
                break;
        }

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
            var_dump($url);
            foreach ($raw_data as $str) {

                $_arr = explode(' ', $this->normalizeOldStatisticsString($str));
                $_arr = array_filter($_arr);

                foreach ($_arr as $k => $v) {
                    $digits = explode(',', $v);
                    $digits = array_filter($digits);

                    if (count($digits) == $this->ndigits) {
                        $this->draw_array[] = $digits;

                    } else {
                        echo $url . "\n";
                        var_dump($digits);
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
            if ($this->igra == '535') {
                $_arr = array_chunk($_arr, $this->ndigits);
                $this->new_draw_array[$i] = $_arr[0];
                $this->new_draw_array[$i . "-1"] = $_arr[1];
            } else {
                $this->new_draw_array[$i] = $_arr;
            }
            $html->clear();
            unset($html);
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
            // normalize - 417,18,20,24,27
            if ($this->igra = "535") {
                $arr = explode(" ", $str);
                $arr = array_filter($arr);

                if (substr_count($arr[0], ",") == 4) {
                    $arr[0] = substr($arr[0], 1);
                    $str = implode(" ", $arr);
                } else {
                    $str = substr($str, strpos($str, ',') + 1);
                }

            } else {
                $str = substr($str, strpos($str, ',') + 1);
            }
        }

        $_normalized_str = preg_replace('/\,\s+/', ',', $str);

        $normalized_str = preg_replace('/\s+/', ' ', $_normalized_str);

        return trim($normalized_str);
    }

}

/*
echo '<pre>';
$start = microtime(true);
$o = new TotoParser(642);
$o->parse();

$end = microtime(true) - $start;

printf('Procesed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);

//$a = include_once 'cache.php';

//var_dump($a);*/
/*
$start = microtime(true);
$o = new TotoParser(535);
$o->parse();*/
