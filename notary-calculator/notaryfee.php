<?php
header("Access-Control-Allow-Origin: *");

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

date_default_timezone_set('Europe/Sofia');
/*
 * Брочя на посещенията.
 */
$ips = array(
    '192.168.0.23',
    '178.239.229.70'
);
if (!in_array($_SERVER['REMOTE_ADDR'], $ips)) {
// Our log file;
    $counter = "posible_robbery.txt";
// Date logging;
    $today = getdate();
    $month = $today['month'];
    $mday = $today['mday'];
    $year = $today['year'];
    $hour = $today['hours'];
    $min = $today['minutes'];
    $current_date = $mday . $month . $year . ' ' . $hour . ':' . $min;
    $fp = fopen($counter, "a");
    $line = $_SERVER['REMOTE_ADDR'] . " | " . $current_date . " | " . " URL: " . $_POST['data1'] . "\n";
    $size = strlen($line);
    fputs($fp, $line, $size);
    fclose($fp);
}

// ---------------- End counter ----------------------------------------------
?>