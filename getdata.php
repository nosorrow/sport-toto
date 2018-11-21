<?php
include_once "Class/TotoChecker.php";

if (isset($_POST)) {

    getData($_POST);

}

function getData(array $post)
{
    $error = [];
    if (count($post) !== count(array_unique($post))) {
        $error['error'] = "Числата не са попълнени правилно. Трябва да бъдат по - големи от 0 , по - малки от 49 и да не се повтарят";
        echo json_encode($error);
        exit;

    }

    foreach ($post as $key => $val) {
        $val = (int)$val;
        if (!is_int($val) || $val < 0 || $val > 49) {
            $error['error'] = "Числата не са попълнени правилно. Трябва да бъдат по - големи от 0 , по - малки от 49 и да не се повтарят";
            echo json_encode($error);

            exit;

        }
    }

    $draw = array_values($post);

    $checker = new TotoChecker();

    $result = $checker->statistics($draw);

    echo json_encode($result);

}

//$error['error'] = "Неправилно попълнени числа";
//echo json_encode($error);
// validate($_POST);