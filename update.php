<?php

if (!isset($_GET['update'])){
    die();
}

include_once 'Class/totoparser.php';

//echo '<pre>';
//$start = microtime(true);
$o = new TotoParser(649);
$o->parse();

//echo "update 649 done ...." . '<br>';

$o = new TotoParser(535);
$o->parse();
//echo "update 535 done ...." . '<br>';

$o = new TotoParser(642);
$o->parse();
//echo "update 642 done ...." . '<br>';

//$end = microtime(true) - $start;

//printf('Procesed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);