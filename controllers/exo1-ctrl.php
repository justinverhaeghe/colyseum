<?php

require_once __DIR__ . '/../models/Client.php';

$clients = getCustomerList();
$ex = 1;
$title = 'Colyseum - Exercice 1';

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/templates/navbar.php';
include __DIR__ . '/../views/pages/exo1.php';
include __DIR__ . '/../views/templates/footer.php';
