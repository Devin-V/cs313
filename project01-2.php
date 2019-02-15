<?php
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Results</title>
        <link rel="stylesheet" type="text/css" href="project01.css">
    </head>
    <body>
        <div class="topnav">
            <a href="project01.php">Make a Sale</a>
            <a href="project01-2.php">View Reports</a>
            <a href="project01-1.php">Manage Employees & Advertisiments</a>
        </div>
        <div class="mostPage">
            <h1>Generate Reports</h1>
            <!-- This form Picks what reports to show -->
        <form name="form" method="POST" action="project01-2.php">
        <div class="boxes">
            <input class="checkbox" type="checkbox" id="box-1" name="SaleInfo"><label for="box-1">Sales-Information<br></label>
            <input class="checkbox" type="checkbox" id="box-2" name="adverts"><label for="box-2">Advertisement-Information<br></label>
            <input class="checkbox" type="checkbox" id="box-3" name="itemdescription"><label for="box-3">Item-description<br></label>
            <input class="checkbox" type="checkbox" id="box-4" name="employee"><label for="box-4">Employee-Information<br></label>
</div>
            <!--    
            <input class="checkbox" type="checkbox" name="timeofsale" value="timeofsales">Time of Sales<br>
            <input class="checkbox" type="checkbox" name="typeofpurchase" value="typeofpurchases">Type of Purchases<br>
            <input class="checkbox" type="checkbox" name="typeofcustomer" value="typeofcustomers">Type of Customers<br>
            <input class="checkbox" type="checkbox" name="onsale" value="onsales">Was the Item on sale<br>
            <input class="checkbox" type="checkbox" name="priceofsale" value="priceofsales">Price of Sales<br>
            <input class="checkbox" type="checkbox" name="stockofitem" value="stockofitems">Stock of Items<br>
            <input class="checkbox" type="checkbox" name="typeofitem" value="typeofitems">Type of Items<br>
            <input class="checkbox" type="checkbox" name="adverttype" value="adverttypes">Type of Advertisement<br>
            <input class="checkbox" type="checkbox" name="advertprice" value="advertprices">Price of Advertisements<br>
            <input class="checkbox" type="checkbox" name="employeename" value="employeenames">Employee Names<br>
            <input class="checkbox" type="checkbox" name="employeetitle" value="employeetitles">Employee Titles<br>
            <input class="checkbox" type="checkbox" name="employeesale" value="employeesales">Employee Sales<br>
            <input class="checkbox" type="checkbox" name="employeeloyalty" value="employeeloyalties">Employee Loyalty Sales<br>
            <input class="checkbox" type="checkbox" name="employeephone" value="employeephones">Employee Phone Number<br>
            <input class="checkbox" type="checkbox" name="employeeside" value="employeesides">Employee Side Projects<br>
            <input class="checkbox" type="checkbox" name="employeecust" value="employeecusts">Employee Customer Score<br>
-->         <br>
            <input class="button" type="submit" value="View Report">
            <input class="button" type="reset" value="Clear Choices">
            <input class="button" type="submit" value="Clear Results">
        </form>
        <hr>
        <br><br>

            <?php
                /*$counter = 0;
                echo "<tr>";
                if(isset($_POST['timeofsale'])){
                    echo "<td>Time of Purchase</td>";
                }
                if(isset($_POST['typeofpurchase'])){
                    echo "<td>Type of Transaction</td>";
                }
                if(isset($_POST['typeofcustomer'])){
                    echo "<td>Type of Customer</td>";
                }
                if(isset($_POST['onsale'])){
                    echo "<td>On Sale</td>";
                }
                if(isset($_POST['priceofsale'])){
                    echo "<td>Price of Sale</td>";
                }
                if(isset($_POST['stockofitem'])){
                    echo "<td>Stock of Item</td>";
                }
                if(isset($_POST['typeofitem'])){
                    echo "<td>Type of Item Sold</td>";
                }
                if(isset($_POST['adverttype'])){
                    echo "<td>Type of Advertisement</td>";
                }
                if(isset($_POST['advertprice'])){
                    echo "<td>Price of Advertisement</td>";
                }
                if(isset($_POST['employeename'])){
                    echo "<td>Employee Name</td>";
                }
                if(isset($_POST['employeetitle'])){
                    echo "<td>Employee Title</td>";
                }
                if(isset($_POST['employeesale'])){
                    echo "<td>Employee Sales</td>";
                }
                if(isset($_POST['employeeloyalty'])){
                    echo "<td>Employee Loyalty</td>";
                }
                if(isset($_POST['employeephone'])){
                    echo "<td>Employee Phone</td>";
                }
                if(isset($_POST['employeeside'])){
                    echo "<td>Employee Side Projects</td>";
                }
                if(isset($_POST['employeecust'])){
                    echo "<td>Employee Customer Rating</td>";
                }
                echo "</tr>";


                if(isset($_POST['timeofsale'])){
                    foreach ($db->query('SELECT timeofpurchase FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['typeofpurchase'])){
                    foreach ($db->query('SELECT typeofpurchase FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['typeofcustomer'])){
                    foreach ($db->query('SELECT typeofcustomer FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['onsale'])){
                    foreach ($db->query('SELECT onsale FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                     }
                     $counter++;
                }
                if(isset($_POST['priceofsale'])){
                    foreach ($db->query('SELECT price FROM items')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter+ 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['stockofitem'])){
                    foreach ($db->query('SELECT stock FROM items')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['typeofitem'])){
                    foreach ($db->query('SELECT typeofitem FROM items')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['adverttype'])){
                    foreach ($db->query('SELECT typeofitem FROM adverts')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['advertprice'])){
                    foreach ($db->query('SELECT price FROM adverts')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeename'])){
                    foreach ($db->query('SELECT name FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeetitle'])){
                    foreach ($db->query('SELECT title FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeesale'])){
                    foreach ($db->query('SELECT numsales FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeeloyalty'])){
                    foreach ($db->query('SELECT numloyalty FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeephone'])){
                    foreach ($db->query('SELECT phonenumber FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeeside'])){
                    foreach ($db->query('SELECT numprojects FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeecust'])){
                    foreach ($db->query('SELECT custscore FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter + 1]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
*/
                if(isset($_POST['SaleInfo'])){
                    echo "<table>";
                    echo "<tr><th>Time of Purchase</th><th>Type of Transaction</th><th>Type of Customer</th><th>On Sale</th><th>Item ID</th><th>Employee ID</th></tr>";
                    foreach ($db->query('SELECT * FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "<td>".$row[4]."</td>";
                        echo "<td>".$row[5]."</td>";
                        echo "<td>".$row[6]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                }
            ?>
            <?php
                if(isset($_POST['adverts'])){
                    echo "<table>";
                    echo "<tr><th>Type of Advertisement</th><th>Amount Spent</th></tr>";
                    foreach ($db->query('SELECT * FROM adverts')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                }
            ?>
            <?php
                if(isset($_POST['itemdescription'])){
                    echo "<table>";
                    echo "<tr><th>Price of Item Sold</th><th>Current Stock</th><th>Type of Item</th></tr>";
                    foreach ($db->query('SELECT * FROM items')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                }
            ?>
            <?php
                if(isset($_POST['employee'])){
                    echo "<table>";
                    echo "<tr><th>Name</th><th>Postition</th><th>Number of Sales</th><th>Number Of Loyalty Sales</th><th>Phone Number</th><th>Number of Side Projects</th><th>Customer Rating</th></tr>";
                    foreach ($db->query('SELECT * FROM employee')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "<td>".$row[4]."</td>";
                        echo "<td>".$row[5]."</td>";
                        echo "<td>".$row[6]."</td>";
                        echo "<td>".$row[7]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                }
            ?>
            </div>
    </body>
</html>