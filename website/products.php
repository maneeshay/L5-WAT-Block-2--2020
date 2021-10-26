<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Products</title>
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
                    <li><a href="account.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width ="30px" height ="30px" alt="" srcset=""></a>
            <img src="images/menu.png" class ="menu-icon" onclick="menutoggle()">

        </div>
    </div> 
    <hr>
      <div class="small-container">
        <div class="row row-2" >
            <h1 style = "float:left; font-size: 50px ">All Products</h1>
        </div>
            <div class="row">
                <?php 
                    $product_name = isset($_GET['product_name']) ? $_GET['product_name']: '';
                    $product_type = isset($_GET['type']) ? $_GET['type'] : '';
                    $product_brand = isset($_GET['product_brand']) ? $_GET['product_brand'] : '';
                    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : '';

                ?>
                <form action="products.php" method="get">
                    <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="product_name" placeholder="Product Name" 
                            value="<?php $product_name ?>"/>
                    </div>
                    <div class="form-group col-md-2">
                        <select name="type" class="form-control">
                            <option value="">Product Type</option>
                            <option value="tshirt" <?php if($product_type=="tshirt") echo 'selected'?> >Tshirt</option>
                            <option value="pant" <?php if($product_type=="pant") echo 'selected'?>>Pant</option>
                            <option value="hoodies" <?php if($product_type=="hoodies") echo 'selected'?>>Hoodies</option>
                            <option value="shoes" <?php if($product_type=="shoes") echo 'selected'?>>Shoes</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select name="product_brand" class="form-control">
                            <option value="">Sort By Brand</option>
                            <option value="nike" <?php if($product_brand=="nike") echo 'selected'?>>Nike</option>
                            <option value="adidas" <?php if($product_brand=="adidas") echo 'selected'?>>Adidas</option>
                            <option value="reebok" <?php if($product_brand=="reebok") echo 'selected'?>>Reebok</option>
                            <option value="puma" <?php if($product_brand=="puma") echo 'selected'?>>Puma</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select name="sort_by" class="form-control">
                            <option value="">Sort By Name or Price</option>
                            <option value="Name" <?php if($sort_by=="Name") echo 'selected'?> >Name</option>
                            <option value="Price" <?php if($sort_by=="Price") echo 'selected'?> >Price</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-primary" type="submit" name="submit" value="Search" />
                    </div>
                </form>
            </div>  
        <?php        
            include 'connection.php';
            $fields = array('type', 'product_name', 'product_brand');
            $conditions = array();
            foreach($fields as $field){
                // if the field is set and not empty
                if(isset($_GET[$field]) && $_GET[$field] != '') {
                    // create a new condition while escaping the value inputed by the user (SQL Injection)
                    $conditions[] = "`$field` LIKE '%" . $_GET[$field] . "%'";
                }
            }
            
            
            $query = "SELECT * FROM product ";
            if(count($conditions) > 0) {
                // append the conditions
                $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
            }
            $orderby = '';
            if($sort_by=='Name'){
                $orderby = ' order by product_name ASC ';
            }else{
                $orderby = ' order by product_price DESC ';
            } 
            $query = $query. $orderby ;
            $result = mysqli_query($connection, $query);
            echo'<div class="row">';
            while($row = mysqli_fetch_assoc($result)){               
            echo'<div class="col-4">';
            echo '<img src="./images/'.$row['product_file_name'] . '" />';
            echo '<h4>'. $row['product_name'].'</h4>';
            echo '<p>$'.$row['product_price'].'</p>';
            echo ' <select name="" id="">
                <option value="">Select size</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">Small</option>
            </select>

            <input type="number" value ="1">
            <br>
            <a href="" class="btn">Add to Cart</a> ';
            echo'</div>';     
            }
            echo'</div>';
  
        ?>
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