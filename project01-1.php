<!DOCTYPE html>
    <html>
    <head>
        <title>Make a Sale</title>
        <link rel="stylesheet" type="text/css" href="project01.css">
    </head>
    <body>
        <div class="topnav">
            <a href="project01.php">Make a Sale</a>
            <a href="project01-2.php">View Reports</a>
            <a href="project01-1.php">Manage Employees & Advertisiments</a>
        </div>
        <div class="mostPage">
            <h1>Update Employee & Advertisement Data</h1>
            <h2>Update Advertisiment Spending</h2>
            <form method="POST" action="project01-insert.php">
                What Type Of Product Was Advertised?
                <select name="typeofitem">
                    <option value="food">Food</option>
                    <option value="electronics">Electronics</option>
                    <option value="sports">Sports</option>
                    <option value="beauty">Beauty</option>
                    <option value="toys">Toys</option>
                </select><br><br>
                How Much Money Was Spent?
                <input type="number"><br><br>
                <input class="button" type="submit" value="Update Adverts">
            </form>
            <h2>Update Employee Side Projects</h2>
            <form method="POST" action="project01-insert.php">
                Which Employee?
                <select name="employee2">
                    <option value="dennis">Dennis</option>
                    <option value="doug">Doug</option>
                    <option value="john">John</option>
                    <option value="sharon">Sharon</option>
                    <option value="william">William</option>
                    <option value="devin">Devin</option>
                </select><br><br>
                How Many Side Projects Did They Complete?
                <input type="number2"><br><br>
                <input class="button" type="submit" value="Update Projects">
            </form>
        </div>
    </body>
</html>