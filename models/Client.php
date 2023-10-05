<?php

require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../config/database.php';

function getCustomerList()
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll(PDO::FETCH_OBJ);

    return $datas;
}

function getclientLimit20()
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients` LIMIT 20;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll(PDO::FETCH_OBJ);

    return $datas;
}

function getClientWithFidelity()
{
    $pdo = connect();
    $sql = "SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`cardNumber`
            FROM `clients` 
            LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
            LEFT JOIN `cardtypes` ON `cards`.`cardTypesId` = `cardtypes`.`Id`
            WHERE `cardtypes`.`type` = 'Fidélité';";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll(PDO::FETCH_OBJ);

    return $datas;
}


function getClientWithM()
{
    $pdo = connect();
    $sql = "SELECT * FROM `clients` WHERE `lastName` LIKE 'm%' ORDER BY `lastName`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll(PDO::FETCH_OBJ);

    return $datas;
}


function getListWithCard()
{
    $pdo = connect();
    $sql = "SELECT *
    FROM `clients` 
    LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
    LEFT JOIN `cardtypes` ON `cards`.`cardTypesId` = `cardtypes`.`Id`
    ORDER BY `clients`.`lastname`;";
    $sth = $pdo->query($sql);
    $datas = $sth->fetchAll(PDO::FETCH_OBJ);

    return $datas;
}
