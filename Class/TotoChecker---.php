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
    public $draw = [];

    public $stats = ['three' => 0, 'four' => 0, 'five' => 0, 'six' => 0];

    /**
     * TotoChecker constructor.
     */
    public function __construct($igra)
    {
        $draw = [];

        $file = __DIR__ . '/cache' . strval($igra) . '.php';

        eval('$draw =' . file_get_contents($file) . ";");

        $this->draw = $draw;

    }

    /**
     * @param $a
     * @return bool
     */
    public function check($a)
    {
        $tir = $this->draw;
        $x = count($tir);

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
                switch ($i) {
                    case 3:
                        $this->stats['three'] = $this->stats['three'] + 1;
                        break;

                    case 4:
                        $this->stats['four'] = $this->stats['four'] + 1;
                        break;
                    case 5:
                        $this->stats['five'] = $this->stats['five'] + 1;
                        break;
                    case 6:
                        $this->stats['six'] = $this->stats['six'] + 1;
                        break;

                }


            }
        }

        return $this->stats;

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
    public $draw = [];

    public $stats = ['three' => 0, 'four' => 0, 'five' => 0];

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
     * @param $a
     * @return bool
     */
    public function check($a)
    {
        $tir = $this->draw;

        $i = 0;
        foreach ($tir as $k => $tirvalue) {
            foreach ($a as $value) {
                if (in_array($value, $tirvalue)) {
                    $result[$i][] = $value;
                }
            }
            $i++;
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
                switch ($i) {
                    case 3:
                        $this->stats['three'] = $this->stats['three'] + 1;
                        break;

                    case 4:
                        $this->stats['four'] = $this->stats['four'] + 1;
                        break;
                    case 5:
                        $this->stats['five'] = $this->stats['five'] + 1;
                        break;
                }


            }
        }

        return $this->stats;

    }

}

class TotoChecker
{
    private function __construct()
    {
    }

    public static function factory($igra)
    {
        if ($igra == 649 || $igra == 642) {
            return new Check649($igra);

        } elseif ($igra == 535) {
            return new Check535();

        } else {
            return false;
        }
    }

}
