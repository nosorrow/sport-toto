<?php

class TotoParser
{
    public $url;

    public $raw_data;

    public $array;


    /**
     * Parce constructor.
     */
    public function __construct($url = '')
    {
        $this->url = $url;
    }

    public function getfile()
    {
        $ch = curl_init();
        $url = $this->url;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        if (!empty($post)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        $this->raw_data = curl_exec($ch);
        curl_close($ch);


        file_put_contents('01.txt', $this->raw_data);

    }

    public function normalizeColumn($str)
    {
        $_normalized_str = preg_replace('/\,\s?/', ',', $str);
        var_dump($_normalized_str);
        echo '<br>';

        $normalized_str = preg_replace('/\s+/', ' ', $_normalized_str);

        $_arr = explode(' ', $normalized_str);
        $col = count($_arr);

        $tir_1 = $_arr[0];
        $tir_2 = $_arr[1];
        $tir_3 = $_arr[2];

        return $_arr;

     //   var_dump($tir_1);

    }

    public function normalizeFile($f)
    {
        $raw_data = file($f);

        foreach ($raw_data as $k => $v) {

            $k = substr($v, 0, strpos($v, ',')); // номер на тиража
            $s = substr($v, strpos($v, ',') + 1);
            $this->array[$k] = explode(',', $s);
        }

        return $this;
    }

    public function normalizedFile($f)
    {
     //   var_dump($this->array);die;
        foreach ($this->array as $value) {
            $data = join(',', $value);
            file_put_contents($f, $data, FILE_APPEND);
        }

    }

    public function statistics(array $a)
    {
        $stats = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];

        $check = $this->check($a);

        foreach ($check as $value) {
            $i = count($value);
            $stats[$i] = $stats[$i] + 1;
        }
        return $stats;
    }

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
}

$ob = new TotoParser('http://www.toto.bg/content/files/stats-tiraji/649_83.txt');
$ob->getfile();
$ob->normalizeFile('01.txt')->normalizedFile('83.txt');

// http://www.toto.bg/content/files/stats-tiraji/649_58.txt


