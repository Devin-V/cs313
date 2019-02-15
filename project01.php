
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
        <h1>Input A Sale</h1>
        <form method="POST" action="project01.php">
            <input type="datetime-local" name="timeofpurchase">
            <select name="typeofpurchase">
                <option value="visa">Visa</option>
                <option value="amx">American Express</option>
                <option value="mastercard">Mastercard</option>
                <option value="cash">Cash</option>
            </select>
            <select name="typeofcustomer">
                <option value="standard">Standard</option>
                <option value="loyalty">Loyalty</option>
            </select>
            <input type="radio" name="onsale" value="true" checked>Item was not on sale<br>
            <input type="radio" name="onsale" value="false">Item is on sale<br>
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
            <select name="employee">
                <option value="devin">Devin</option>
                <option value="dennis">Dennis</option>
                <option value="john">John</option>
                <option value="doug">Doug</option>
                <option value="william">William</option>
                <option value="sharon">Sharon</option>
            </select>
            <input type="submit" value="Submit Order">
        </div>
    </body>
</html>