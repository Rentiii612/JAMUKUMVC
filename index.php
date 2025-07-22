<?php

require_once "router.php";
require_once "model/bahan.php";
require_once "api-lib.php";

get('/', 'views/home');
get('/bahan', function () {
    $bahanBahan = Bahan::get();
    return include 'views/listing-bahan.php';
});
get('/bahan/$id', function ($id) {
    $bahan = Bahan::find($id);
    if($bahan) {
        return include 'views/show-bahan.php';
    }
    return include 'views/404.php';
});
get('/api/v1/bahan', function() {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(
        decorate(Bahan::get())
    );
});

get('/api/v1/bahan-juga', function() {
    api_response(Bahan::get());
});

