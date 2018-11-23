<?php
set_time_limit(0);
include_once "Class/TotoChecker.php";

$checker = TotoChecker::factory(649);

function toto_generator($igra)
{
    global $checker;

    $game = strval($igra);

    $ndigit = (int) ($game[1].$game[2]);

    $chisla = range(1, $ndigit);

    $k = array_rand($chisla, $game[0]);

    foreach ($k as $v) {
        $kombinacia[] = $chisla[$v];
    }


    $statistics = $checker->statistics($k);

    if ($statistics['five'] == 0){
        print_r($statistics);
        print_r($kombinacia);
        exit;
    } else {
        toto_generator($igra);
    }

  //  return ($kombinacia);
}
echo '<pre>';

print_r(toto_generator(649));

