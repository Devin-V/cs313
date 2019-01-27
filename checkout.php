<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Checkout</title>
    </head>
    <body>
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