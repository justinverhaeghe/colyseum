<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Show.php';

$datas = getShowList($conn);

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/templates/navbar.php';
include __DIR__ . '/../views/pages/exo2.php';
include __DIR__ . '/../views/templates/footer.php';
