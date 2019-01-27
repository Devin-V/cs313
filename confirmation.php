<?php
    session_start();
    $fName = htmlspecialchars($_POST['firstname']);
    $lName = htmlspecialchars($_POST['lastname']);
    $address = htmlspecialchars($_POST['address']);
    $list3 = htmlspecialchars($_SESSION['stored']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
    </head>
    <body>
    <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
        <h1>Thank you for your purchase</h1>

        <?php
        echo "<p>Dear $fName $lName</p>";
        ?>
        <p> Thank you for purchasing
            <ol>
                <?php
                    foreach ($list3 as $items)
                    {
                        $item = htmlspecialchars($items);
                        echo "<li><p>$item</p></li>";
                    }
                ?>
            </ol>
            it will be shipped to: <?=$address ?>
        </p>
        <form name="form" method="POST" action="week02.php">
            <input class="button" type="submit" value="Continue Shopping">
        </form>
    </body>
</html>