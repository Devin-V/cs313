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
    </head>
    <body>
        <h1>Thank you for your purchase</h1>

        <p>Dear <?=$fName " " $lName ?></p>
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
            it will be shipped to: <?=$address ?></p>
    </body>
</html>