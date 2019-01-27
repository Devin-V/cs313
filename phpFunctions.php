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
        <link rel="stylesheet" type="text/css" href="css02.css">
    </head>
    <body>
    <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
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
            <input class="button" type="submit" value="Add More Items">
            <input class="button" type="submit" value="Remove Items">
        </form>
        <form name="form" action="checkout.php" method="POST">
            <input class="button" type="submit" value="Continue to Checkout">
        </form>
    </body>
</html>