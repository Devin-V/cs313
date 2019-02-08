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
    <title>project01</title>
    </head>
    <body>
        <form name="form" method="POST" action="project01.php">
            <input class="checkbox" type="checkbox" name="Salesman" value="person">Sales-person<br>
            <input class="checkbox" type="checkbox" name="timeofsale" value="timed">Time of sale<br>
            <input class="checkbox" type="checkbox" name="itemdescription" value="model">Item sold<br>
            <input class="checkbox" type="checkbox" name="prices" value="price">Price of sold items<br>
            <input class="button" type="submit" value="View Report">
        </form>

        <table>
            <?php
                if(isset($_POST['Salesman'])){
                echo "<tr> <td>Salesman</td><td>Item ID</td><td>Time ID</td></tr>";
                foreach ($db->query('SELECT * FROM saledata')as $row) {
                    echo "<tr>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "</tr>";
                }
                }
            ?>
            <?php
                if(isset($_POST['timeofsale'])){
                    echo "<tr><td>hour</td><td>min</td><td>day</td><td>month</td><td>year</td></tr>";
                    foreach ($db->query('SELECT * FROM timed')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "<td>".$row[4]."</td>";
                        echo "<td>".$row[5]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['itemdescription'])){
                    echo "<tr><td>price</td><td>serial number</td></tr>";
                    foreach ($db->query('SELECT * FROM timed')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['prices'])){
                    echo "<tr><td>price</td><td>serial number</td></tr>";
                    foreach ($db->query('SELECT * FROM timed')as $row){
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>

    </body>
</html>