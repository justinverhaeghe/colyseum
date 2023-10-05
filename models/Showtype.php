<?php

require_once __DIR__ . '/../config/database.php';

function getShowType(): array
{
    $pdo = connect();
    $sql = "SELECT `type` FROM `showtypes`;";
    $sth = $pdo->query($sql);
    $showtypes = $sth->fetchAll(PDO::FETCH_OBJ);

    return $showtypes;
}
