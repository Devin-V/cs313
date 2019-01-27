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
        <ol>
            <?php
            foreach ($list as $lists)
            {
                $cart = htmlspecialchars($lists);
                echo "<li><p>$cart</p></li>";
            }
            ?>
            </ol>
    </body>
</html>