<?php


function getCustomerList($conn)
{
    $customerList = "SELECT * FROM clients";
    $displayClient = $conn->prepare($customerList);
    $displayClient->execute();
    $datas = $displayClient->fetchAll();

    return $datas;
}
