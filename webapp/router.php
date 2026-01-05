<?php

$uri = $_SERVER['REQUEST_URI'];

if (preg_match('/^\/manifest\.json/', $uri)) {

    header('Content-Type: application/json');

    header('Access-Control-Allow-Origin: *');

    readfile('manifest.json');

    exit;

}

return false; // Let the server handle other requests