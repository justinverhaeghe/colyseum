<?php

require_once __DIR__ . '/../models/Show.php';

try {
    $ex = 6;
    $title = 'Colyseum - Exercice 6';
    $shows = getShowType();
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
include __DIR__ . '/../views/pages/exo6.php';
include __DIR__ . '/../views/templates/footer.php';
