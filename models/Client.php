<?php

require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../config/database.php';

function getCustomerList(): array
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll();

    return $datas;
}

function getClientLimit20(): array
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients` LIMIT 20;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll();

    return $datas;
}

function getClientWithFidelity(): array
{
    $pdo = connect();
    $sql = "SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`cardNumber`
            FROM `clients` 
            INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
            WHERE `cards`.`cardTypesId` = 1;"; // 1 = Fidélité
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll();

    return $datas;
}


function getClientWithM(): array
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients` WHERE `lastName` LIKE 'm%' ORDER BY `lastName`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll();

    return $datas;
}


function getListWithCard(): array
{
    $pdo = connect();
    $sql = "SELECT *
    FROM `clients` 
    LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
    LEFT JOIN `cardtypes` ON `cards`.`cardTypesId` = `cardtypes`.`Id`
    ORDER BY `clients`.`lastname`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll();

    return $datas;
}