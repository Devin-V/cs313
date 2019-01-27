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
        <?php
        $size = sizeof($list);
        ?>
        <form name="form" action="" method="get">
            <input type="number" name="item to delete" min="1" max="<?=$size ?>>">
        </form>
    </body>
</html>