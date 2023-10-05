<?php

require_once __DIR__ . '/../models/Client.php';

try {
    $ex = 7;
    $title = 'Colyseum - Exercice 7';
    $datas = getListWithCard();
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
include __DIR__ . '/../views/pages/exo7.php';
include __DIR__ . '/../views/templates/footer.php';
