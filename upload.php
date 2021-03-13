<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;

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
    ]
]);

echo $r->getBody();
