<!doctype html>
<html>
    <head>
        <title>Devin's Homepage</title>
        <link id="pagestyle" rel="stylesheet" type="text/css" href="homepage.css">
        <script src="homepage.js"></script>
    </head>
    <body>
        <div id="header">
            <h1>Devin Vial Homepage</h1>
            <?php
            echo "Today is " . date("Y/m/d") . "<br>";
            ?>
        </div>
        <div id="aboutMe">
        <p id="p1">I'm a senior (or close to it) at BYU-Idaho.  I am currently taking mostly online classes and I'm hoping to finish my degree in Computer Science early next year.  I work full time and go to school full time and sometimes I even get to see my wife.</p>
        <p id="p2">I have lived in Rexburg for 6 years now and I work for a transportation company called the Salt Lake Express.  I manage the customer service department there but I am currently looking for something more related to my major. Let me know if you hear of anything!</p>
        <p id="p3">Out of all the classes that I have taken I think Web Design was my favorite.  You would think that would make me look foward to this class but I'm still scared of using git and php so we'll see how this goes.  I hope things work out well this semester!</p>
        </div> 
        <div id="assignments">
            <br><br>
            <h4>This Semesters Assignments:</h4>
            <a href="cs313assignments.html">CS 313 Assignments</a><br><br>
        </div>
        <div id="change">
            <button id="button1" onclick="changeUp();">Make Less Boring!</button>
        </div>
    </body>
</html>