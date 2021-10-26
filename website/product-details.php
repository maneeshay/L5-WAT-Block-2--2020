
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products-My Store </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125" alt="" srcset="">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width ="30px" height ="30px" alt="" srcset=""></a>
            <img src="images/menu.png" class ="menu-icon" onclick="menutoggle()">
        </div>
    </div> 

    <!--Single Product Details-->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/nike-pant.jpeg" width="100%" alt="">
            </div>
            <div class="col-2">
                <p>Home / Pant</p>
                <h1>Nike Joggers</h1>
                <h4>$50.00</h4>
                <select name="" id="">
                    <option value="">Select Size</option>
                    <option value="">XXL</option>
                    <option value="">XL</option>
                    <option value="">Large</option>
                    <option value="">Medium</option>
                    <option value="">Small</option>
                </select>

                <input type="number" value ="1">
                <a href="" class="btn">Add to Card</a>
                <h3>Products Details</h3>
                <p>Give your summer wardrobe a style upgrade with nike joggers. Team it with a pair of shorts for your mrning workout or a denims for an evening out.</p>
            </div>
        </div>
    </div>


    <!------title------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/product-1.jpg" alt="" srcset="">
                <h4>Red Printed T-Shirt</h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg" alt="" srcset="">
                <h4>Shoes</h4>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg" alt="" srcset="">
                <h4>Pant</h4>
                <p>$80.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg" alt="" srcset="">
                <h4>Blue Printed T-Shirt</h4>
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

    <!--Js for toggle menu-->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight ="0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight =="0px"){
                MenuItems.style.maxHeight ="200px";
            }
            else{
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>
</html>