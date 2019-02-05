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

foreach ($db->query('SELECT price, item FROM saledata') as $row){
    echo 'price: ' . $row['price'];
    echo ' item: ' . $row['item'];
    echo '<br/>';
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>project01</title>
    </head>
    <body>
        <p>here i am </p>
        <?php
            foreach ($db->query('SELECT price, item FROM saledata') as $row){
                echo 'price: ' . $row['price'];
                echo ' item: ' . $row['item'];
                echo '<br/>';
        }
        ?>
    </body>
</html>