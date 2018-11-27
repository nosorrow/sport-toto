<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// do not direct access
define('AJAX_REQUEST', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!AJAX_REQUEST) {die();}

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

    if ($statistics['five'] == 0 && $statistics['four']<15){
        $array['statistics'] = ($statistics);
        $array['kombinacia'] = ($kombinacia);

    } else {
        toto_generator($igra);
    }

    return $array;
}

echo ((json_encode(toto_generator($igra))));

