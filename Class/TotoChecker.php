<?php
/**
 * Created by PhpStorm.
 * User: Plamen
 * Date: 21.11.2018 г.
 * Time: 12:28 ч.
 */

class TotoChecker
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
    public function __construct($igra = 649)
    {
        $draw = [];
        $file = 'cache'.$igra . '.php';
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
                switch ($i){
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

}
