<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/care',[
    'json' => [
        'id' => $id,
        'care' => $_POST['care'],
        'harga' => $_POST['harga'],
    ]
]);

$body = $response->getBody();
header('location:care.php')
// var_dump($body);

?>