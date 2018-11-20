<?php
$str = '   13		 2,  7, 14, 27, 42, 49		11, 18, 21, 22, 30, 46';
//$str = '0		 2,  9, 19, 20, 23, 30		 5, 16, 39, 40, 44, 48';
//var_dump($str);
echo '<br>';


function normalizeColumn($str)
{
    $str = trim($str);
    $matches = preg_match("#^\d+\s+#", $str, $match);

    if (strpos($str, '-')) {
        $str = substr($str, strpos($str, '-') + 1);

    } elseif ($matches) {
        $str = trim(substr($str, strlen($match[0])));
        var_dump($str);die;

    } else {
        $str = substr($str, strpos($str, ',') + 1);

    }
//var_dump($str);die;
    $_normalized_str = preg_replace('/\,\s+/', ',', $str);

    $normalized_str = preg_replace('/\s+/', ' ', $_normalized_str);

    $_arr = explode(' ', $normalized_str);

  //  var_dump($normalized_str);
    echo '<br>';
    $tir_1 = $_arr[0];
    $tir_2 = $_arr[1];
    $tir_3 = $_arr[2];


    var_dump($_arr);

}

normalizeColumn($str);
