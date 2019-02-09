<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

/*foreach ($db->query('SELECT * FROM saledata')as $row)
{
    echo $row[1] . $row[2] . $row[3];
    echo '<br>';
}*/
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
        <form name="form" method="POST" action="project01-2.php">
            <input class="checkbox" type="checkbox" name="SaleInfo" value="person">Sales-Information<br>
            <input class="checkbox" type="checkbox" name="adverts" value="timed">Advertisement-Information<br>
            <input class="checkbox" type="checkbox" name="itemdescription" value="model">Item-description<br>
            <input class="checkbox" type="checkbox" name="employee" value="price">Employee-Information<br>

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
            <input class="button" type="submit" value="View Report">
            <input class="button" type="reset" value="Clear Choices">
            <input class="button" type="submit" value="Clear Results">
        </form>

        <table>
            <?php
                $counter = 0;
                $header = [];
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
                    foreach ($db->query('SELECT * FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['typeofcustomer'])){
                    foreach ($db->query('SELECT * FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['onsale'])){
                    foreach ($db->query('SELECT * FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                     }
                     $counter++;
                }
                if(isset($_POST['priceofsale'])){
                    foreach ($db->query('SELECT * FROM sales')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['stockofitem'])){
                    foreach ($db->query('SELECT * FROM items')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['typeofitem'])){
                    foreach ($db->query('SELECT * FROM items')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['adverttype'])){
                    foreach ($db->query('SELECT * FROM adverts')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['advertprice'])){
                    foreach ($db->query('SELECT * FROM adverts')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeename'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeetitle'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeesale'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeeloyalty'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeephone'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeeside'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }
                if(isset($_POST['employeecust'])){
                    foreach ($db->query('SELECT * FROM employee')as $row) {
                        echo "<tr>";
                        echo "<td>".$row[$counter]."</td>";
                        echo "</tr>";
                    }
                    $counter++;
                }

                if(isset($_POST['SaleInfo'])){
                echo "<tr><td>Time of Purchase</td><td>Type of Transaction</td><td>Type of Customer</td><td>On Sale</td><td>Item ID</td><td>Employee ID</td></tr>";
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
                }
            ?>
            <?php
                if(isset($_POST['adverts'])){
                    echo "<tr><td>Type of Advertisement</td><td>Amount Spent</td></tr>";
                    foreach ($db->query('SELECT * FROM adverts')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['itemdescription'])){
                    echo "<tr><td>price</td><td>Current Stock</td><td>Type of Item</td></tr>";
                    foreach ($db->query('SELECT * FROM items')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['employee'])){
                    echo "<tr><td>Name</td><td>Postition</td><td>Number of Sales</td><td>Number Of Loyalty Sales</td><td>Phone Number</td><td>Number of Side Projects</td><td>Customer Rating</td></tr>";
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
                }
            ?>
        </table>
    </body>
</html>