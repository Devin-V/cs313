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
            <a class="active" href="project01.php">Make a Sale</a>
            <a href="project01-2.php">View Reports</a>
            <a href="project01-1.php">Manage Employees & Advertisiments</a>
        </div>
        <form name="form" method="POST" action="project01-2.php">
            <input class="checkbox" type="checkbox" name="SaleInfo" value="person">Sales-Information<br>
            <input class="checkbox" type="checkbox" name="adverts" value="timed">Advertisement-Information<br>
            <input class="checkbox" type="checkbox" name="itemdescription" value="model">Item-description<br>
            <input class="checkbox" type="checkbox" name="employee" value="price">Employee-Information<br>
            <input class="button" type="submit" value="View Report">
            <input class="button" type="reset" value="Clear Choices">
            <input class="button" type="submit" value="Clear Results">
        </form>

        <table>
            <?php
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
                    echo "<td>".$row[7]."</td>";
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
                        echo "<td>".$row[3]."</td>";
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
                        echo "<td>".$row[4]."</td>";
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