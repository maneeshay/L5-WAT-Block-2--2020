
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

    <!--Carts items Details-->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg" alt="">
                    
                        <div>
                            <p>Red printed T-Shirt</p>
                            <small>Price: $50.oo</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg" alt="">
                    
                        <div>
                            <p>Red printed T-Shirt</p>
                            <small>Price: $50.oo</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg" alt="">
                    
                        <div>
                            <p>Red printed T-Shirt</p>
                            <small>Price: $50.oo</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>tax</td>
                    <td>$20.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$220.00</td>
                </tr>
            </table>
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