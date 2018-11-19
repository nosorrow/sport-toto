<?php

$str = '12,21,29,45,49		1, 4, 5, 9,35,38	';
var_dump($str);
echo '<br>';


function normalizeColumn($str)
{
    $_normalized_str = preg_replace('/\,\s?/', ',', $str);
    var_dump($_normalized_str);
    echo '<br>';

    $normalized_str = preg_replace('/\s+/', ' ', $_normalized_str);

    $_arr = explode(' ', $normalized_str);
    $col = count($_arr);

    $tir_1 = $_arr[0];
    $tir_2 = $_arr[1];
    $tir_3 = $_arr[2];


    var_dump($_arr);

}

normalizeColumn($str);

$a = [
    58=>[

    ]
];