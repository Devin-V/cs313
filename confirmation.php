<?php
    session_start();
    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $address = $_POST['address'];
    $list3 = $_SESSION['stored'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
    </head>
    <body>
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
            <input type="submit" value="Continue Shopping">
        </form>
    </body>
</html>