<?php


function getShowList($conn)
{
    $showList = "SELECT * FROM shows";
    $displayShow = $conn->prepare($showList);
    $displayShow->execute();
    $datas = $displayShow->fetchAll();

    return $datas;
}