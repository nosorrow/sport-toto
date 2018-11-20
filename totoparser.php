<?php

class TotoParser
{
    public $numbers = [];
    public $url;

    public $raw_data;

    public $array;

    public $domain = 'http://www.toto.bg';

    public $stats = [3 => 0, 4 => 0, 5 => 0, 6 => 0];

    /**
     * Parse constructor.
     */
    public function __construct()
    {
        // $this->url = $url;
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


    public function parse()
    {
        $_url = $this->getFileUrl();
        $x = count($_url[0]);

        for ($i = 0; $i < $x; $i++) {

            $url = $_url[0][$i];

            $raw_data = $this->curl($this->domain . $url);
            $raw_data = explode("\n", $raw_data);
            $raw_data = array_filter($raw_data);

            foreach ($raw_data as $str) {

                $_arr = explode(' ', $this->normalizeString($str));

                foreach ($_arr as $k => $v) {
                    $digits = explode(',', $v);

                    if (count($digits)==6) {
                        $this->array[] = $digits;

                    } else {
                        die("Some Error!");

                    }
                }

            }
        }
        array_push($this->array, [8, 12, 16, 23, 25, 41]);
        $this->statistics($this->numbers);

    }

    /**
     * @param $str
     * @return string
     */
    protected function normalizeString($str)
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
        $tir = $this->array;
        $x = count($this->array);

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

            if($i>=3){
                $this->stats[$i] = $this->stats[$i] + 1;

            }
        }

        return $this->stats;

    }
}

$o = new TotoParser();
$o->numbers = [8, 12, 16, 23, 25, 41];

($o->parse());

print_r($o->stats);

