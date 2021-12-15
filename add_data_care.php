<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use Intervention\Image\ImageManager;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/care',[
    'json' => [
        'care' => $_POST['care'],
        'harga' => $_POST['harga'],
    ]
]);

$body = $response->getBody();
header('location:care.php')

?>