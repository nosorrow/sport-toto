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

    public $stats = [3 => 0, 4 => 0, 5 => 0, 6 => 0];
    /**
     * TotoChecker constructor.
     */
    public function __construct()
    {
        $draw =[];
        eval('$draw =' . file_get_contents( 'cache.php') . ";");
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

            if($i>=3){
                $this->stats[$i] = $this->stats[$i] + 1;

            }
        }

        return $this->stats;

    }
}

$ob = new TotoChecker();
echo '<pre>';
print_r($ob->statistics([10,16,17,35,39,46]));