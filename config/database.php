<?php

require_once __DIR__ . '/../config/constants.php';


function connect()
{
    try {
        $pdo = new PDO(DSN, USER, PWD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    };
    return $pdo;
}
