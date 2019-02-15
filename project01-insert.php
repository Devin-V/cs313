<?php

// get data from POST
    $timestamp = date('Y-m-d G:i:s');
    $purchaseType = $_POST['typeofpurchase'];
    $customerType = $_POST['typeofcustomer'];
    $onSale = $_POST['onsale'];
    $itemSold = $_POST['item'];
    $employeeSale = $_POST['employee'];

// Connect to DB
    require("dbConnect.php");
    $db = get_db();

// Add to Sales Table
    try
    {
        $query = 'INSERT INTO sales(timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES(:timestamp, :purchaseType, :customerType, :onSale, :itemSold, :employeeSale)';
        $statement = $db->prepare($query);

        $statement->bindValue(':timestamp', $timestamp);
        $statement->bindValue(':purchaseType', $purchaseType);
        $statement->bindValue(':customerType', $customerType);
        $statement->bindValue(':onSale', $onSale);
        $statement->bindValue(':itemSold', $itemSold);
        $statement->bindValue(':employeeSale', $employeeSale);

        $statment->execute();
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Detials: $ex";
        die();
    }

    header("Location: project01.php");
    die();

// Deduct from Item Table


// Add to Employee Table   
