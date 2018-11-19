<?php

class TotoParser
{
    public $url;

    protected $raw_data;

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
        $result = curl_exec($ch);
        curl_close($ch);

        file_put_contents('01.txt', $result);

    }

    public function normalizeFile($f)
    {
        $row_data = file($f);

        foreach ($row_data as $k => $v) {
            $s = substr($v, strpos($v, ',') + 1);
            $this->array[] = explode(',', $s);
        }

        return $this;
    }

    public function normalizedFile($f)
    {
        foreach ($this->array as $value) {
            $data = join(',', $value);
            file_put_contents($f, $data, FILE_APPEND);
        }

    }

}

$ob = new TotoParser('http://www.toto.bg/content/files/stats-tiraji/649_83.txt');
$ob->getfile();
$ob->normalizeFile('01.txt')->normalizedFile('83.txt');

// http://www.toto.bg/content/files/stats-tiraji/649_58.txt


