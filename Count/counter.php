<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() {

    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
        '/windows nt 10/i'      =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {

    global $user_agent;

    $browser        = "Unknown Browser";

    $browser_array = array(
        '/msie/i'      => 'Internet Explorer',
        '/firefox/i'   => 'Firefox',
        '/safari/i'    => 'Safari',
        '/chrome/i'    => 'Chrome',
        '/edge/i'      => 'Edge',
        '/opera/i'     => 'Opera',
        '/netscape/i'  => 'Netscape',
        '/maxthon/i'   => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i'    => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}

function counter($igra)
{
    global $user_agent;
    $user_os        = getOS();
    $user_browser   = getBrowser();

    date_default_timezone_set('Europe/Sofia');

    /*

     * Брочя на посещенията.

     */

    $ips = array(

        '192.168.0.23',

        '178.239.229.70'

    );

    if (!in_array($_SERVER['REMOTE_ADDR'], $ips)) {

        $counter = __DIR__ . "/stats.txt";

        $today = getdate();

        $month = $today['month'];

        $mday = $today['mday'];

        $year = $today['year'];

        $hour = $today['hours'];

        $min = $today['minutes'];

        $current_date = $mday . ' ' . $month . ' '  . $year . ' ' . $hour . ':' . $min;

        $fp = fopen($counter, "a");

        $line = $_SERVER['REMOTE_ADDR'] . ' | '  . $user_agent . ' | ' . $current_date . ' | ' . $igra . "\n";

        $size = strlen($line);

        fputs($fp, $line, $size);

        fclose($fp);

    }

}

