<?php

require_once __DIR__ . '/../config/database.php';

function getShowType(): array
{
    $pdo = connect();
    $sql = "SELECT * FROM `shows` ORDER BY `title`;";
    $sth = $pdo->query($sql);
    $shows = $sth->fetchAll(PDO::FETCH_OBJ);

    return $shows;
}
