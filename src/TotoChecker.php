<?php
/**
 * Created by PhpStorm.
 * User: Plamen
 * Date: 21.11.2018 г.
 * Time: 12:28 ч.
 */

interface Checker
{
    public function statistics(array $a);

}

class Check649 implements Checker
{
    /**
     * масив с тиражите
     * @var array
     */
    public array $draw = [];

    public array $stats = ['three' => 0, 'four' => 0, 'five' => 0, 'six' => 0];

    /**
     * TotoChecker constructor.
     * @param $igra
     */
    public function __construct($igra)
    {
        $draw = [];

        $file = __DIR__ . '/cache' . $igra . '.php';

        eval('$draw =' . file_get_contents($file) . ";");

        $this->draw = $draw;

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
                switch ($i) {
                    case 3:
                        ++$this->stats['three'];
                        break;

                    case 4:
                        ++$this->stats['four'];
                        break;

                    case 5:
                        ++$this->stats['five'];
                        break;

                    case 6:
                        ++$this->stats['six'];
                        break;

                }


            }
        }

        return $this->stats;

    }

    /**
     * @param $a
     * @return bool|array
     */
    public function check($a)
    {
        $tir = $this->draw;
        $x = count($tir);
        $result = [];

        for ($i = 0; $i < $x; $i++) {
            foreach ($a as $value) {
                if (in_array($value, $tir[$i])) {
                    $result[$i][] = $value;
                }
            }
        }

        if (!empty($result)) {
            return ($result);

        }

        return false;
    }

    public function __destruct()
    {
        unset($this->draw);
    }
}

class Check535 implements Checker

{
    /**
     * масив с тиражите
     * @var array
     */
    public array $draw = [];

    public array $stats = ['three' => 0, 'four' => 0, 'five' => 0];

    /**
     * TotoChecker constructor.
     */
    public function __construct()
    {
        $draw = [];
        $file = __DIR__ . '/cache535' . '.php';
        eval('$draw =' . file_get_contents($file) . ";");
        $this->draw = $draw;
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
                switch ($i) {
                    case 3:
                        ++$this->stats['three'];
                        break;

                    case 4:
                        ++$this->stats['four'];
                        break;

                    case 5:
                        ++$this->stats['five'];
                        break;
                }


            }
        }

        return $this->stats;

    }

    /**
     * @param $a
     * @return array|bool
     */
    public function check($a)
    {
        $tir = $this->draw;
        $result = [];
        $i = 0;
        foreach ($tir as $k => $tirvalue) {
            foreach ($a as $value) {
                if (in_array($value, $tirvalue)) {
                    $result[$i][] = $value;
                }
            }
            $i++;
        }

        if (!empty($result)) {
            return ($result);

        }
        return false;
    }

}

class TotoChecker
{
    private function __construct()
    {
    }

    public static function factory($igra)
    {
        if ($igra === 649 || $igra === 642) {
            return new Check649($igra);

        }

        if ($igra === 535) {
            return new Check535();

        }

        return false;
    }

}
