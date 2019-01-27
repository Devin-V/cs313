<?php
    $list = $_POST["list"];
    $delete = $_POST["item to delete"];
    unset($list[$delete]);
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
        <form name="form" action="phpFunctions.php" method="POST">
            <input type="number" name="item to delete" id="deleteNum" min="1" max="8">
            <input type="submit" value="Delete Item">
        </form>
    </body>
</html>