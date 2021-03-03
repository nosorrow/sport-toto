<?php
set_time_limit(0);

if (!isset($_GET['update'])){
    die();
}

include_once 'Class/UpdateDraws.php';

//echo '<pre>';
$start = microtime(true);

echo "Starting update <br>";
flush();
ob_flush();
$o = new UpdateDraws(649);
$o->parse();
echo "update 649 done ...." . '<br>';
flush();
ob_flush();
$o = new UpdateDraws(535);
$o->parse();
echo "update 535 done ...." . '<br>';
flush();
ob_flush();
$o = new UpdateDraws(642);
$o->parse();
echo "update 642 done ...." . '<br>';
flush();
ob_flush();

$end = microtime(true) - $start;
printf('Procesed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);
