<?php

// get data from POST
    $timestamp = date('Y-m-d G:i:s');
    $purchaseType = $_POST['typeofpurchase'];
    $customerType = $_POST['typeofcustomer'];
    $onSale = $_POST['onsale'];
    $itemSold = $_POST['item'];
    $employeeSale = $_POST['employee'];

    echo "Variables Set <br>";
    echo "timestamp=$timestamp\n";
    echo "purchaseType=$purchaseType\n";
    echo "customerType=$customerType\n";
    echo "onSale=$onSale\n";
    echo "itemSold=$itemSold\n";
    echo "employeeSale=$employeeSale\n";

// Connect to DB
    require("dbConnect.php");
    $db = get_db();
    echo "Connected to Database\n";

// Add to Sales Table
    try
    {
        $query = 'INSERT INTO sales(timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES(:timestamp, :purchaseType, :customerType, :onSale, :itemSold, :employeeSale)';
        $statement = $db->prepare($query);
        echo "Query Setup\n";

        $statement->bindValue(':timestamp', $timestamp);
        $statement->bindValue(':purchaseType', $purchaseType);
        $statement->bindValue(':customerType', $customerType);
        $statement->bindValue(':onSale', $onSale);
        $statement->bindValue(':itemSold', $itemSold);
        $statement->bindValue(':employeeSale', $employeeSale);

        $statment->execute();
        echo "excecuted\n";
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: project01.php");
    die();

// Deduct from Item Table


// Add to Employee Table   

?>