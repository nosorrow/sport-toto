<?php

date_default_timezone_set('Europe/Sofia');

if(isset($_GET['reset']) && $_GET['reset'] == '1'){

    file_put_contents('stats.txt', '');
}

$counter = "stats.txt";


$today = getdate();

$month = $today['month'];

$mday = $today['mday'];

$year = $today['year'];

$hour = $today['hours'];

$min = $today['minutes'];

$current_date = $mday . $month . $year . ' ' .$hour . ':' . $min;


$contents = file($counter);


$total_hits = sizeof($contents);

$total_hosts = array();

for ($i = 0; $i < sizeof($contents); $i++)

{

    $entry = explode("|", $contents[$i]);


    array_push($total_hosts, $entry[0]);

}

$total_hosts_size = sizeof(array_unique($total_hosts));


$daily_hits = array();

for ($i = 0; $i < sizeof($contents); $i++)

{

    $entry = explode("|", $contents[$i]);

    if ($current_date == chop($entry[1]))

    {

        array_push($daily_hits, $entry[0]);

    }

}

$daily_hits_size = sizeof($daily_hits);



// Daily hosts;

$daily_hosts = array();

for ($i = 0; $i < sizeof($contents); $i++)

{

    $entry = explode("|", $contents[$i]);

    if ($current_date == chop($entry[1]))

    {

        array_push($daily_hosts, $entry[0]);

    }

}

$daily_hosts_size = sizeof(array_unique($daily_hosts));

echo ("<br>" . " Посещения:<b> " . $total_hits . "</b><br><br> Уникални: <b> " . $total_hosts_size .

    "</b><br><br> Посещения днес: <b> " . $daily_hits_size . "</b><br><br> Уникални днес: <b>" .

    $daily_hosts_size);


$viewcounter = file_get_contents($counter);



$time = date('d-m-Y H:i:s');

echo '<br><p>Today is : ' . $time . '</p>';


echo '<pre> ' . 'влизания от : <br>';

echo $viewcounter;