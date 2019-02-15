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

// Deduct Stock from Item Table
    try{
        $query2 = "UPDATE items SET stock=stock - 1 WHERE name='$itemSold'";
        $statement2 = $db->prepare($query2);
        echo "Deduct statement2 set<br>";

        $statement2->execute();
        echo "Deduct Statement2 Executed<br>";
    }
    catch (Exception $ex)
    {
        echo "ERROR with DB. Details: $ex";
        die();
    }

// Add Sales to Employee Table 
    if ($customerType == 'standard'){
        try{
            $query3 ="UPDATE employee SET numsales=numsales + 1 WHERE name='$employeeSale'";
            $statement3 = $db->prepare($query3);
            echo "Add statement3 set<br>";

            $statement3->execute();
            echo "Add statement3 Executed<br>";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    } else {
        try{
            $query3 ="UPDATE employee SET numloyalty=numloyalty + 1 WHERE name='$employeeSale'";
            $statement3 = $db->prepare($query3);
            echo "Add statement3.2 set<br>";

            $statement3->execute();
            echo "Add statement3.2 Executed<br>";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    }

    header("Location: project01.php");
    die();
?>