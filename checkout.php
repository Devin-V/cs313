<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
    </head>
    <body>
    <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
        <form name="form" method="POST" action="confirmation.php">
            First Name:<br>
            <input type="text" name="firstname"><br>
            Last Name:<br>
            <input type="text" name="lastname"><br>
            Billing Address:<br>
            <input type="text" name="address"><br>
            <input type="submit" value="Complete Purchase">
    </body>
</html>