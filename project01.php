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

foreach ($db->query('SELECT * FROM saledata')as $row)
{
    echo $row[1] . $row[2] . $row[3];
    echo '<br>';
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>project01</title>
    </head>
    <body>
        <p>here i am </p>
        <form name="form" method="POST" action="project01.php">
            <input class="checkbox" type="checkbox" name="Salesman" value="person">Sales-person<br>
            <input class="checkbox" type="checkbox" name="timeofsale" value="timed">Time of sale<br>
            <input class="checkbox" type="checkbox" name="itemdescription" value="model">Item sold<br>
            <input class="checkbox" type="checkbox" name="prices" value="price">Price of sold items<br>
            <input class="button" type="submit" value="View Report">
        </form>

        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php
                foreach ($db->query('SELECT * FROM saledata')as $row) {
                    echo "<tr>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>

    </body>
</html>