<?php

class TotoParser
{
    public $numbers = [];
    public $url;

    public $raw_data;

    public $array;

    public $domain = 'http://www.toto.bg';

    public $stats = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];

    /**
     * Parce constructor.
     */
    public function __construct()
    {
        // $this->url = $url;
    }

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
        //  file_put_contents('01.txt', $this->raw_data);

    }

    public function getFileUrl()
    {
        $pattern = '#(\/content\/files\/stats-tiraji\/649_(.+)\.txt)#';

        $data = $this->curl("http://www.toto.bg/statistika/6x49");

        preg_match_all($pattern, $data, $match);
        array_push($match[0], '/content/files/2018/01/26/2a0952991d371ca5575a4d79e5c5e5d5.txt');

        return $match;
    }

    public function run()
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
    //    var_dump($this->array);
        $this->statistics($this->numbers);

    }

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


    public function normalizeFile()
    {
        $_url = $this->getFileUrl();
        $url = $_url[1][0];
        $year = $_url[2][0];

        $raw_data = $this->curl($this->domain . $url);
        $raw_data = explode("\n", $raw_data);

        foreach ($raw_data as $k => $v) {
            $s = substr($v, strpos($v, ',') + 1);
            $this->array[$year][] = explode(',', $s);
        }

        return $this;
    }

    /*public function normalizedFile($f)
    {
        foreach ($this->array as $value) {
            $data = join(',', $value);
            file_put_contents($f, $data . "\n", FILE_APPEND);
        }
    }*/

    public function check($a)
    {
        $tir = $this->array;//var_dump($tir);die;
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

    public function statistics(array $a)
    {
        //$stats = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];

        $check = $this->check($a);

        foreach ($check as $value) {
            $i = count($value);

            $this->stats[$i] = $this->stats[$i] + 1;
        }
        return $this->stats;
    }
}

// 2003 година - 1-н1,н2,н3,н4,н5,н6

/*$ob = new TotoParser('http://www.toto.bg/content/files/stats-tiraji/649_83.txt');
$ob->getfile();
$ob->normalizeFile('01.txt')->normalizedFile('83.txt');*/

// http://www.toto.bg/content/files/stats-tiraji/649_58.txt

$o = new TotoParser();
$o->numbers = [7,10,15,29,41,47];
($o->run());
print_r($o->stats);


//$o->normalizeFile();//->normalizedFile('58.txt');

//$o->getFileUrl();

//$pattern = '#(\/content\/files\/stats-tiraji\/649_(.+)\.txt)#';

//preg_match_all($pattern, $x, $mathc);

//var_dump($mathc);