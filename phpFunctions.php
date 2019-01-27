<!DOCTYPE html>
<?php
    $list = $_POST["list"];
?>
<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <h1>Contents of Cart</h1>
        <ul>
            <?
            foreach ($list as $item)
            {
                $items = $list);
                echo "<li><p>$items</p></li>";
            }
            ?>
            </ul>
    </body>
</html>