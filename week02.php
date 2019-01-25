<?php
session_start();
$list = array();
$_SESSION['items']=$list;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Backpack Store</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
        <script src="week02.js"></script>
    </head>
    <body onload="deleteCookies();">
        <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
        <br><br>

        <form>
        <div class="gallery">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsxCRpplAK1KUET2NqrEOCGskBpARJrRdr9M2vXs3qz7CNVKmC" width="320" height="300">
            <div class="desc"><p>Grey Backpack With Stripes<br> Select the amount you wish to purchase 0-9</p><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0851/3262/products/School_Backpack_Heavyweight_Ochre-01_1024x1024.jpg?v=1533162547" width="320" height="300"> 
            <div class="desc"><p>Tan Plain Backpack<br> Select the amount you wish to purchase 0-9</p><br><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://www.pbteen.com/ptimgs/ab/images/dp/wcm/201849/0132/gear-up-ombre-backpack-c.jpg" width="320" height="300">
            <div class="desc"><p>Rainbow Backpack<br> Select the amount you wish to purchase 0-9</p><br><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/adidas-Santiago-Black-Mini-Backpack-_301422.jpg" width="320" height="300">
            <div class="desc"><p>Black Adidas Backpack<br> Select the amount you wish to purchase 0-9</p><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/Herschel-Supply-Co.-Little-America-Raven-Crosshatch-25L-Backpack-_280269.jpg" width="320" height="300">
            <div class="desc"><p>Plain Grey Backpack<br> Select the amount you wish to purchase 0-9</p><br><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0183/7917/products/canvas-rucksack-backpack-for-school-outdoor-front_grande.jpg?v=1472458352" width="320" height="300">
            <div class="desc"><p>Tan Backpack With Straps<br> Select the amount you wish to purchase 0-9</p><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://assets.academy.com/mgen/40/10618640.jpg?is=150,150?wid=250&hei=250" width="320" height="300">
            <div class="desc"><p>Pattern Backpack<br> Select the amount you wish to purchase 0-9</p><br><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <div class="gallery">
            <img src="https://d1wwyfhxuarwk4.cloudfront.net/images/products/common/white/large/4584-w_personalized-kids-backpack-giraffe.jpg" width="320" height="300">
            <div class="desc"><p>Giraffe Backpack<br> Select the amount you wish to purchase 0-9</p><br><input type="number" name="quantity" min="0" max="9"></div>
        </div>
        <br><input type="submit" id="button">
        </form>


    </body>
</html>