<?php

require_once __DIR__ . '/../models/Client.php';

try {
    $clients = getClientLimit20();
    $ex = 3;
    $title = 'Colyseum - Exercice 3';
} catch (\Throwable $th) {
    $error = $th->getMessage();
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/navbar.php';
    include __DIR__ . '/../views/pages/error.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/templates/navbar.php';
include __DIR__ . '/../views/pages/exo3.php';
include __DIR__ . '/../views/templates/footer.php';
