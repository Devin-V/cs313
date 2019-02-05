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
  echo 'running';
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>project01</title>
    </head>
    <body>
        <p>here i am </p>
        <form name="form" method="POST" action="project01-1.php">
            <input class="checkbox" type="checkbox" name="Salesman" value="person">Sales-person<br>
            <input class="checkbox" type="checkbox" name="timeofsale" value="timed">Time of sale<br>
            <input class="checkbox" type="checkbox" name="itemdescription" value="model">Item sold<br>
            <input class="checkbox" type="checkbox" name="prices" value="price">Price of sold items<br>
            <input class="button" type="submit" value="View Report">
        </form>
    </body>
</html>