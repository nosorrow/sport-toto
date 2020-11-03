<?php

class AddToOldParser
{
    private string $url;

    private string $game;

    private $file;

    /**
     * AddToOldParser constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $game
     */
    public function setGame($game): void
    {
        $this->game = $game;
    }

    protected function getOldDraws(): array
    {
        $draw = [];
        $this->file = __DIR__ . '/OldDraws/cache' . $this->game . '.php';
        eval('$draw =' . file_get_contents($this->file) . ";");

        return $draw;
    }

    protected function getNewFile()
    {
        $file = file($this->url);

        $file = array_map(function ($e) {
            if (trim($e) !== "") {
                return trim(mb_convert_encoding($e, "utf-8", "windows-1251"));
            }
            return null;
        }, $file);

        return array_filter(array_slice($file, 4));
    }

    public function parse64X()
    {
        $arr = $this->getNewFile();
        $draw = array_map(function ($e) {
            $e = strstr($e, ":");
            return substr($e, 2);
        }, $arr);
        foreach ($draw as $value) {
            $draws[] = explode(" ", $value);
        }
        return $draws;
    }

    public function add(array $array)
    {
        $old = $this->getOldDraws();

        $new = array_merge($old, $array);

        file_put_contents($this->file, var_export($new, true));

        print_r($new);
    }

}

/*
$draws = new AddToOldParser(
    'http://toto.bg/content/files/2020/01/04/149bdb98aa8426faf31b8b57fde4c5eb.txt'
);
$draws->setGame('649');
$draws->add($draws->parse64X());
*/

// 6x42 = 2018
/*$draws = new AddToOldParser(
    'http://toto.bg/content/files/2019/02/16/e0600ff435695d05411a367f7205cc93.txt'
);
$draws->setGame('642');
$draws->add($draws->parse64X());
// 2019
$draws = new AddToOldParser(
    'http://toto.bg/content/files/2020/01/04/f825c7c15a3a84911efed4776b45d10f.txt'
);
$draws->setGame('642');
$draws->add($draws->parse64X());*/

// 5X35 2019
/*$draws = new AddToOldParser(
    'http://toto.bg/content/files/2020/01/04/4b3156b9d0787eec501f523579c2794c.txt'
);
$draws->setGame('535');
$draws->add($draws->parse64X());*/
