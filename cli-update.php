<?php
set_time_limit(0);

include_once 'src/UpdateDraws.php';
include 'vendor/autoload.php';

use GuzzleHttp\Client;

$start = microtime(true);
echo "Спорт Тото се обновява... Starting update... \n";

$o = new UpdateDraws(649);
$o->parse();
echo "update 649 done ....\n";

$o = new UpdateDraws(535);
$o->parse();
echo "update 535 done ....\n";

$o = new UpdateDraws(642);
$o->parse();
echo "update 642 done ....\n";

$end = microtime(true) - $start;
printf('Processed time : %f | Memory: %f MB', $end, memory_get_peak_usage() / 1024 / 1024);

echo "\n Uploading files ...\n";

$client = new Client();
$url = 'http://my.manu/SportToto/Toto-6-49/handleupload.php';

$r = $client->post( $url, [
    'multipart' => [
        [
            'name'     => 'file[]',
            'contents' => fopen('src/cache649.php', 'r'),
        ],
        [
            'name'     => 'file[]',
            'contents' => fopen('src/cache642.php', 'r'),
        ],
        [
            'name'     => 'file[]',
            'contents' => fopen('src/cache535.php', 'r'),
        ]
    ],
    'headers' => array(
        'apikey' => 'apikey',
    )
]);

echo $r->getBody();
