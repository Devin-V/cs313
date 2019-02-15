<?php

// get data from POST
    $timestamp = date('Y-m-d G:i:s');
    $purchaseType = $_POST['typeofpurchase'];
    $customerType = $_POST['typeofcustomer'];
    $onSale = $_POST['onsale'];
    $itemSold = $_POST['item'];
    $employeeSale = $_POST['employee'];

    /*echo "Variables Set <br>";
    echo "timestamp=$timestamp<br>";
    echo "purchaseType=$purchaseType<br>";
    echo "customerType=$customerType<br>";
    echo "onSale=$onSale<br>";
    echo "itemSold=$itemSold<br>";
    echo "employeeSale=$employeeSale<br>";
*/
// Connect to DB
    require("dbConnect.php");
    $db = get_db();
    echo "Connected to Database<br>";

// Add to Sales Table
    try
    {
        $query = 'INSERT INTO sales(timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES(:timestamp, :purchaseType, :customerType, :onSale, :itemSold, :employeeSale)';
        $statement = $db->prepare($query);
        echo "Query Setup<br>";

        $statement->bindValue(':timestamp', $timestamp);
        $statement->bindValue(':purchaseType', $purchaseType);
        $statement->bindValue(':customerType', $customerType);
        $statement->bindValue(':onSale', $onSale);
        $statement->bindValue(':itemSold', $itemSold);
        $statement->bindValue(':employeeSale', $employeeSale);

        $statement->execute();
        echo "excecuted<br>";
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: project01.php");
    die();

// Deduct from Item Table
    try{
        $query = 'UPDATE items SET stock = stock - 1 WHERE name=$itemSold';
        $statement = $db->prepare($query);
        echo "Deduct statement set<br>";

        $statement->execute();
        echo "Deduct Statement Executed<br>"
    }

// Add to Employee Table   

?>