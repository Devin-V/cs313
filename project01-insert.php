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
    // Subtract Values
    $numDelete = $_POST['numberDelete'];

// CONNECT to DB
    require("dbConnect.php");
    $db = get_db();
    echo "Connected to Database<br>";

// ADD to Sales Table
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

// DEDUCT Stock from Item Table
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
// ADD Sales to Employee Table 
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
            $query4 ="UPDATE adverts SET price=(price+$amountSpent) WHERE typeofitem='$typeofitem'";
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
            $query5 ="UPDATE employee SET numprojects=(numprojects+$numberProjects) WHERE name='$employeeName'";
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

// ADD stock to items after sale deletion
    if (isset($_POST['numberDelete'])){

        $queryy = "SELECT * FROM sales WHERE id='$numDelete'";
        $stmt = $db->prepare($queryy);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $row = $results['item'];
        echo "results= ".results['item']."<br>";

        try{
            $query6 = "UPDATE items SET stock=stock +1 WHERE typeofitem='$row'";
            $statement6 = $db->prepare($query6);
            echo "Add Statement6 set<br>";

            $statement6->execute();
            echo "Add Statement6 Executed";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    }

// DEDUCT sales from employee sales after deletion
    if (isset($_POST['numberDelete'])){
        try{
            $test2 = "SELECT typeofcustomer FROM sales WHERE id=$numDelete";
            $state2 = $db->prepare($test2);
            $state2 = execute();
            $test3 = "SELECT name FROM sales WHERE id=$numDelete";
            $state3 = $db->prepare($test3);
            $state3 = execute();
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
        if ($test2 == 'standard'){
            try{
                $query7 ="UPDATE employee SET numsales=numsales - 1 WHERE name='$state2'";
                $statement7 = $db->prepare($query7);
                echo "Deduct statement7 set<br>";

                $statement7->execute();
                echo "Deduct statement7 Executed<br>";
            }
            catch (Exception $ex)
            {
                echo "ERROR with DB. Details: $ex";
                die();
            }
        } else {
            try{
                $query8 ="UPDATE employee SET numloyalty=numloyalty - 1 WHERE name='$state3'";
                $statement8 = $db->prepare($query8);
                echo "Deduct statement8 set<br>";

                $statement8->execute();
                echo "Deduct statement8 Executed<br>";
            }
            catch (Exception $ex)
            {
                echo "ERROR with DB. Details: $ex";
                die();
            }
        }
    }

// DELETE Sale from sale table
    if (isset($_POST['numberDelete'])){
        try{
            $query9 ="DELETE FROM sales WHERE id='$numDelete'";
            $statement9 = $db->prepare($query9);
            echo "Delete Statement9 Set<br>";

            $statement9->execute();
            echo "Delete Statement9 Set<br>";
        }
        catch (Exception $ex)
        {
            echo "ERROR with DB. Details: $ex";
            die();
        }
    }

// Redirect to homepage
if (isset($_POST['onsale']) || isset($_POST['numberDelete'])){
    header("Location: project01.php");
    die();
}

// Redirect to Employee Page
    if (isset($_POST['employee2']) || isset($_POST['typeofitem'])){
        header("Location: project01-1.php");
        die();
    }
?>