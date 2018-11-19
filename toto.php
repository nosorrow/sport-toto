<?php

ini_set('memory_limit', '3024M');
ini_set('max_execution_time', 3000);

$start = microtime(true);

$x = 5000;

echo '<pre>';

$tir = array();

function chisla()
{
    global $x;
    for ($i = 0; $i < $x; $i++) {
        $tir[] = toto_generator();
    }
    return $tir;
}

foreach (chisla() as $v) {
    $tir[] = $v;
}

function check_tir(array $a = null)
{
    global $tir;
    global $x;

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


function statistics(array $a)
{
    $stats = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];

    $check = check_tir($a);

    foreach ($check as $value) {
        $i = count($value);
        $stats[$i] = $stats[$i] + 1;
    }
    return $stats;
}

function toto_generator()
{
    $chisla = range(1, 49);

    $k = array_rand($chisla, 6);
    foreach ($k as $v) {
        $kombinacia[] = $chisla[$v];
    }
    return $kombinacia;
}

function toto_generator1()
{
    $x = 6;

    for ($i = 0; $i < $x; $i++) {
        $kombinacia[$i] = mt_rand(1, 49);
    }
    return $kombinacia;
}

$a = toto_generator();
print_r($a);
//print_r(statistics($a));
echo '<pre><p>' . str_pad(' Stats ', 100, '*', STR_PAD_BOTH) . '</p>';

print_r(statistics([22,45,41,23,29,15]));

//print_r($tir);
/*
 *  [0] => 4
    [1] => 20
    [2] => 21
    [3] => 26
    [4] => 37
    [5] => 47

--------------
[0] => 13
    [1] => 14
    [2] => 16
    [3] => 35
    [4] => 41
    [5] => 42
 */

//print_r($tir);


printf('<p>Time: %f sec. | memory: %f MB</p>', microtime(true) - $start, memory_get_peak_usage() / 1024 / 1024);