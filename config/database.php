<?php

$servername = 'localhost';
$dbname = 'colyseum';
$username = 'colyseum_admin';
$password = '79wiy]W-Ge*ei1q)';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
};
