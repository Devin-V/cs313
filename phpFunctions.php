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
        <form name="form" action="" method="get">
            <input type="number" name="item to delete" id="deleteNum" min="1" max="8">
        </form>
            <?php
                echo "<p>$_GET['deleteNum']</p>";
            ?>
    </body>
</html>