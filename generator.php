<?php

include_once "Class/TotoChecker.php";

$igra  = (int) $_POST['igra'];

$checker = TotoChecker::factory($igra);

function toto_generator($igra)
{
    global $checker;
    $array = [];
    $game = strval($igra);
    $ndigit = (int) ($game[1].$game[2]);

    $chisla = range(1, $ndigit);

    $k = array_rand($chisla, $game[0]);

    foreach ($k as $v) {
        $kombinacia[] = $chisla[$v];
    }


    $statistics = $checker->statistics($k);

    if ($statistics['five'] == 0){
        $array['statistics'] = ($statistics);
        $array['kombinacia'] = ($kombinacia);

    } else {
        toto_generator($igra);
    }

    return $array;
}

echo ((json_encode(toto_generator($igra))));

