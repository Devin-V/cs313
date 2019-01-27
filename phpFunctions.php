<?php
    session_start();
    $list = $_POST["list"];
    $_SESSION['stored'] = $list;
    $list2 = $_SESSION['stored'];
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
            foreach ($list2 as $lists)
            {
                $cart = htmlspecialchars($lists);
                echo "<li><p>$cart</p></li>";
            }
            ?>
        </ol>
        <form name="form" action="week02.php" method="POST">
            <input type="submit" value="Add More Items">
            <input type="submit" value="Remove Items">
        </form>
        <form name="form" action="checkout.php" method="POST">
            <input type="submit" value="Continue to Checkout">
        </form>
    </body>
</html>