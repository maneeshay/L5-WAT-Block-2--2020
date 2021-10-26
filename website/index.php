<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Red Store</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="125" alt="" srcset=""></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="account.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width ="30px" height ="30px" alt="" srcset=""></a>
            <img src="images/menu.png" class ="menu-icon" onclick="menutoggle()">

        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Yourslef <br/>a New Style!</h1>
                <p>Success isn't always about greatness. It's about consitency. Consistent<br>hard work gains sucess. greatness
                will come.</p>

                <a href="account.php" class = "btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="" srcset="">
            </div>
        </div>
    </div> 
</div>

      <!---featured products--->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.php"><img src="images/nike-pant.jpeg" alt="" srcset=""></a>
                <a href="product-details.php"><h4>Pant</h4></a>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/adidas-shoes.jpeg" alt="" srcset="">
                <h4>Shoes</h4>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/reebok-hoodies.jpg" alt="" srcset="">
                <h4>Pant</h4>
                <p>$80.00</p>
            </div>
            <div class="col-4">
                <img src="images/puma-tshirt.jpg" alt="" srcset="">
                <h4>Blue Printed T-Shirt</h4>
                <p>$50.00</p>
            </div>
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg" alt="" srcset="">
                <h4>White shoes</h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg" alt="" srcset="">
                <h4>Black Printed T-Shirt</h4>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg" alt="" srcset="">
                <h4>Socks</h4>
                <p>$80.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg" alt="" srcset="">
                <h4>Watch</h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-9.jpg" alt="" srcset="">
                <h4>Watch</h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="" srcset="">
                <h4>Black shoes</h4>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="" srcset="">
                <h4>Grey Shoes</h4>
                <p>$80.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="" srcset="">
                <h4>Joggers</h4>
                <p>$50.00</p>
            </div>
        </div>
    </div>

    <!--Footer-->
      <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download</h3>
                    <p>download App for Android and ios mobile Phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our Purpose is to sustainably make the pleasure and Benefits of sport Accessible
                        to the many.
                    </p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>You Tube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copright 2021 - Manisha Yadav</p>
        </div>
    </div>

</body>
</html>