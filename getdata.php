<?php

// do not direct access
define('AJAX_REQUEST', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!AJAX_REQUEST) {die();}

include_once "Class/TotoChecker.php";

if (isset($_POST)) {
    $igra = $_POST['igra'];

    $checker = TotoChecker::factory((int)$igra);

    unset($_POST['igra']);

    getData($_POST, $igra);

}

function getData(array $post, $igra)
{
    global $checker;
    $error = [];
    $ndigit = (int)($igra[1].$igra[2]);

    if (count($post) !== count(array_unique($post))) {
        $error['error'] = "Числата не са попълнени правилно. Трябва да бъдат по - големи от 0 , по - малки от {$ndigit} и да не се повтарят";
        echo json_encode($error);
        exit;

    }

    foreach ($post as $key => $val) {
        $val = (int)$val;
        if (!is_int($val) || $val < 0 || $val > $ndigit) {
            $error['error'] = "Числата не са попълнени правилно. Трябва да бъдат по - големи от 0 , по - малки от {$ndigit} и да не се повтарят";
            echo json_encode($error);

            exit;

        }
    }

    $draw = array_values($post);

    $result = $checker->statistics($draw);

    echo json_encode($result);

}
