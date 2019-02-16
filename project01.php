<!DOCTYPE html>
<html>
    <head>
        <title>Project01</title>
        <link rel="stylesheet" type="text/css" href="project01.css">
    </head>
    <body>
        <div class="topnav">
            <a chref="project01.php">Make a Sale</a>
            <a href="project01-2.php">View Reports</a>
            <a href="project01-1.php">Manage Employees & Advertisiments</a>
        </div>
        <div class="mostPage">
            <!-- This is the section to make a sale -->
            <h2>Input A Sale</h2>
            <!-- This is the form to make a sale -->
            <form name="form" method="POST" action="project01-insert.php">
                Type of Payment
                <select name="typeofpurchase">
                    <option value="visa">Visa</option>
                    <option value="amx">American Express</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="discover">Discover</option>
                    <option value="cash">Cash</option>
                </select>
                Type of Customer
                <select name="typeofcustomer">
                    <option value="standard">Standard</option>
                    <option value="loyalty">Loyalty</option>
                </select><br><br>
                Was The Item On Sale?<br>
                <input type="radio" name="onsale" value="false" checked>Item was not on sale<br>
                <input type="radio" name="onsale" value="true">Item is on sale<br><br>
                What Was Sold?
                <select name="item">
                    <option value="roast">Roast</option>
                    <option value="milk">Milk</option>
                    <option value="tv">Television</option>
                    <option value="computer">Computer</option>
                    <option value="basketball">Basketball</option>
                    <option value="hockey stick">Hockey Stick</option>
                    <option value="makeup">makeup</option>
                    <option value="hair dryer">Hair Dryer</option>
                    <option value="action figure">Action Figure</option>
                    <option value="baby blocks">Baby Blocks</option>
                </select>
                Who Made The Sale?
                <select name="employee">
                    <option value="devin">Devin</option>
                    <option value="dennis">Dennis</option>
                    <option value="john">John</option>
                    <option value="doug">Doug</option>
                    <option value="william">William</option>
                    <option value="sharon">Sharon</option>
                </select><br><br>
                <input class="button" type="submit" value="Submit Order">
            </form><br>
            <!-- This is the section to remove a sale -->
            <h2>Delete a Sale</h2>
            <!--  Connect to DB -->
            <?php
                require("dbConnect.php");
                $db = get_db();
            ?>
            <!-- Form to delete a sale -->
            <form name="form" method="POST" action="project01-insert.php">
                Please input the ID of the sale you wish to delete
                <input name="numberDelete" type="number">
                <input class="button" type="submit" value="Delete Sale">
            </form><br><br>
            <!--  Display all sales to user -->
            <?php
                echo "<table>";
                echo "<tr><th>Sale Id</th><th>Time of Purchase</th><th>Type of Transaction</th><th>Type of Customer</th><th>On Sale</th><th>Item</th><th>Employee</th></tr>";
                foreach ($db->query('SELECT * FROM sales')as $row) {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "<td>".$row[5]."</td>";
                    echo "<td>".$row[6]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<br>";
            ?>
        </div>
    </body>
</html>