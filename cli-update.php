<?php
set_time_limit(0);

include_once 'Class/UpdateDraws.php';
//echo '<pre>';
$start = microtime(true);
echo "Спорт Тото се обновява... Starting update... \n";

$o = new UpdateDraws(649);
$o->parse();
echo "update 649 done ....\n";

$o = new UpdateDraws(535);
$o->parse();
echo "update 535 done ....\n";

$o = new UpdateDraws(642);
$o->parse();
echo "update 642 done ....\n";

$end = microtime(true) - $start;
printf('Procesed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);
