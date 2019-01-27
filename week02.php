<?php
    session_destroy();
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Backpack Store</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
        <script src="week02.js"></script>
    </head>
    <body>
        <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
        <br><br>
        <form method="POST" action="phpFunctions.php">
        <div class="gallery">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsxCRpplAK1KUET2NqrEOCGskBpARJrRdr9M2vXs3qz7CNVKmC" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="001" value="Grey Backpack With Stripes"><label for="001">Grey Backpack With Stripes</label></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0851/3262/products/School_Backpack_Heavyweight_Ochre-01_1024x1024.jpg?v=1533162547" width="320" height="300"> 
            <div class="checkbox"><input type="checkbox" name="list[]" id="002" value="Tan Plain Backpack"><label for="002">Durable Tan Plain Backpack</label></div>
        </div>
        <div class="gallery">
            <img src="https://www.pbteen.com/ptimgs/ab/images/dp/wcm/201849/0132/gear-up-ombre-backpack-c.jpg" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="003" value="Rainbow Backpack"><label for="003">Multicolored Rainbow Backpack<br></label></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/adidas-Santiago-Black-Mini-Backpack-_301422.jpg" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="004" value="Black Adidas Backpack"><label for="004">Black and White Adidas Backpack<br></label></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/Herschel-Supply-Co.-Little-America-Raven-Crosshatch-25L-Backpack-_280269.jpg" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="005" value="Plain Grey Backpack"><label for="005">Plain Grey Backpack With Straps<br></label></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0183/7917/products/canvas-rucksack-backpack-for-school-outdoor-front_grande.jpg?v=1472458352" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="006" value="Tan Backpack With Straps"><label for="006">Tan Backpack With Straps</label></div>
        </div>
        <div class="gallery">
            <img src="https://assets.academy.com/mgen/40/10618640.jpg?is=150,150?wid=250&hei=250" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="007" value="Pattern Backpack"><label for="007">Blue and White Pattern Backpack<br></label></div>
        </div>
        <div class="gallery">
            <img src="https://d1wwyfhxuarwk4.cloudfront.net/images/products/common/white/large/4584-w_personalized-kids-backpack-giraffe.jpg" width="320" height="300">
            <div class="checkbox"><input type="checkbox" name="list[]" id="008" value="Giraffe Backpack"><label for="008">Business Casual Giraffe Backpack<br></label></div>
        </div>
        <input class="button" type="submit" value="Checkout">
        </form>
    </body>
</html>