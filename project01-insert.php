<?php

// get data from POST
    // Sales Variables
    $timestamp = date('Y-m-d G:i:s');
    $purchaseType = $_POST['typeofpurchase'];
    $customerType = $_POST['typeofcustomer'];
    $onSale = $_POST['onsale'];
    $itemSold = $_POST['item'];
    $employeeSale = $_POST['employee'];
    // Adverts and Employee Variables
    $typeofitem = $_POST['typeofitem'];
    $amountSpent = $_POST['number'];
    $employeeName = $_POST['employee2'];
    $numberProjects = $_POST['number2'];

// Connect to DB
    require("dbConnect.php");
    $db = get_db();
    echo "Connected to Database<br>";

// Add to Sales Table
    if (isset($_POST['employee'])){
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
    }

// Deduct Stock from Item Table
    if (isset($_POST['employee'])){
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
    }
// Add Sales to Employee Table 
    if (isset($_POST['employee'])){
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
    }

// ADD amount spent on adverts
    if (isset($_POST['typeofitem'])){
        try{
            //$amountSpent = intval(mixed $amountSpent [, int $base = 10 ]) : int;
            $query4 ="UPDATE adverts SET price=price+ floatval(mixed$amountSpent):float WHERE typeofitem='$typeofitem'";
            $statement4 = $db->prepare($query4);
            echo "Add Statement4 set<br>";

            $statement4->execute();
            echo "Add Statement4 Executed<br>";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    }


// ADD projects done for employees
    if (isset($_POST['employee2'])){
        try{
            $query5 ="UPDATE employee SET numprojects=numprojects+$numberProjects WHERE name='$employeeName'";
            $statement5 = $db->prepare($query5);
            echo "Add Statement5 set<br>";

            $statement5->execute();
            echo "Add Statement5 Executed<br>";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    }

// Redirect to homepage
    if (isset($_POST['onsale'])){
        header("Location: project01.php");
        die();
    }

// Redirect to Employee Page
    if (isset($_POST['employee2']) || isset($_POST['typeofitem'])){
        header("Location: project01-1.php");
        die();
    }
?>