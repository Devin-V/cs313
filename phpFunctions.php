<?php
    $list = $_POST["list"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <h1>Contents of Cart</h1>
        <ul>
            <?php
            foreach ($list as $item)
            {
                $items = $list;
                echo "<li><p>$items</p></li>";
            }
            ?>
            </ul>
    </body>
</html>