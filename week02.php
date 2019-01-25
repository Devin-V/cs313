<?php
    // Start Session
    session_start();

    // Declare Cart
    if (! isset ( $_SESSION ['cart'] )) {
        $_SESSION ['cart'] = array ();
    }

    // Total list of items
    $items = array (
        '001' => array (
            'name' => 'Grey Backpack With Stripes',
            'price' => 24.99
        ),
        '002' => array (
            'name' => 'Tan Plain Backpack',
            'price' => 25.99
        ),
        '003' => array (
            'name' => 'Rainbow Backpack',
            'price' => 26.99
        ),
        '004' => array (
            'name' => 'Black Adidas Backpack',
            'price' => 27.99
        ),
        '005' => array (
            'name' => 'Plain Grey Backpack',
            'price' => 28.99
        ),
        '006' => array (
            'name' => 'Tan Backpack With Stripes',
            'price' => 29.99
        ),
        '007' => array (
            'name' => 'Pattern Backpack',
            'price' => 30.99
        ),
        '008' => array (
            'name' => 'Giraffe Backpack',
            'price' => 99.99
        ),
    )
    // Add items to cart
    if (isset ($_POST ["buy"] )) {
        $_SESSION ['cart'][] = $_POST["buy"];
    }
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <title>Backpack Store</title>
        <link rel="stylesheet" type="text/css" href="css02.css">
    </head>
    <body onload="deleteCookies();"> -->
        <img src="https://hdwallsource.com/img/2018/6/dakine-backpack-wallpaper-62886-64892-hd-wallpapers.jpg" id="bg" alt="">
        <br><br>
        <form>
        <div class="gallery">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsxCRpplAK1KUET2NqrEOCGskBpARJrRdr9M2vXs3qz7CNVKmC" width="320" height="300">
            <div class="desc"><p>Grey Backpack With Stripes</p><button type='submit' name='buy' value='$ino'>Buy</button></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0851/3262/products/School_Backpack_Heavyweight_Ochre-01_1024x1024.jpg?v=1533162547" width="320" height="300"> 
            <div class="desc"><p>Tan Plain Backpack</p><br><button onclick="addItem('Tan Plain Backpack');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://www.pbteen.com/ptimgs/ab/images/dp/wcm/201849/0132/gear-up-ombre-backpack-c.jpg" width="320" height="300">
            <div class="desc"><p>Rainbow Backpack</p><br><button onclick="addItem('Rainbow Backpack');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/adidas-Santiago-Black-Mini-Backpack-_301422.jpg" width="320" height="300">
            <div class="desc"><p>Black Adidas Backpack</p><button onclick="addItem('Black Adidas Backpack');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://s7d9.scene7.com/is/image/zumiez/cat_max/Herschel-Supply-Co.-Little-America-Raven-Crosshatch-25L-Backpack-_280269.jpg" width="320" height="300">
            <div class="desc"><p>Plain Grey Backpack</p><br><button onclick="addItem('Plain Grey Backpack');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://cdn.shopify.com/s/files/1/0183/7917/products/canvas-rucksack-backpack-for-school-outdoor-front_grande.jpg?v=1472458352" width="320" height="300">
            <div class="desc"><p>Tan Backpack With Straps</p><button onclick="addItem('Tan Backpack with Straps');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://assets.academy.com/mgen/40/10618640.jpg?is=150,150?wid=250&hei=250" width="320" height="300">
            <div class="desc"><p>Pattern Backpack</p><br><button onclick="addItem('Pattern Backpack');" id="button">Add to Cart</button></div>
        </div>
        <div class="gallery">
            <img src="https://d1wwyfhxuarwk4.cloudfront.net/images/products/common/white/large/4584-w_personalized-kids-backpack-giraffe.jpg" width="320" height="300">
            <div class="desc"><p>Giraffe Backpack</p><br><button onclick="addItem('Giraffe Backpack');" id="button">Add to Cart</button></div>
        </div>
        </form>

        <a href="cart.html">Visit the Cart</a>
<!--    </body>
</html> -->