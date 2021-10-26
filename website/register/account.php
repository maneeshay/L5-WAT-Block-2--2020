
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

    <!--Account page-->
                <!--
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="" method="post">
                            <input type="text" placeholder="username" name="" id="">
                            <input type="password" placeholder="password" value="">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>

                        <form id="RegForm" action="" method="post">
                            <input type="text" placeholder="username" value="">
                            <input type="email" placeholder="Email" name="" id="">
                            <input type="password" placeholder="password" value="">
                            <label for="age">Age Range: </label>
                            <select name="age" id="age">
                                <option value="0-20">0-20</option>
                                <option value="21-60">21-60</option>
                                <option value="">61 & above</option>
                            </select>
                            <label for="checkbox">confirm to proceed</label>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <button type="submit" class="btn">Register</button>                          
                        </form>
                    </div>
                </div>-->

                <h1>Registration Form:</h1>
	<form method="post" action="register.php">
		
		<fieldset>
		<legend><b>User Registration<b/></legend>
		<label for="name">User Name: </label>
		<input type="text" name="username"><br/><br/>
		<label for="email">email: </label>
		<input type="text" name="email"><br/><br/>
		<label for="Password">Password: </label>
		<input type="Password" name="password"><br/><br/>
		<label for="Password">Confirm Password: </label>
		<input type="Password" name="confirmPassword"><br/><br/>
		<label for="gender">Gender: </label>
		  <input type="radio" name="gender" value="male">Male
		  <input type="radio" name="gender" value="female">Female
		  <input type="radio" name="gender" value="other">Other  
		  <br><br>
		<label for="age">Age: </label>
		<select name="age">
			<option value="" selected disabled hidden>Choose here</option>
			<option>1-18</option>
			<option>19-60</option>
			<option>Above 60</option>
		</select><br/><br/>
		<label>
			Click to confirm
		</label>
		<input type="checkbox" name="checkConfirm" value="agree"><br/><br/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="clear" value="clear">
		</fieldset>
		<p>Already a member?<a href="login.php"> Sign in</a>
	</form>

  
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


<!-------JS for toggle form--------->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }

</script>
</body>
<?php
    include "connection.php";

    if (isset($_POST['submit'])) 
    {
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword']) && !empty($_POST['gender']) && !empty($_POST['age'])) 
        {
        
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    
                    $name=$_POST['username'];
                    $email=$_POST['email'];
                    $password1=$_POST['password'];
                    $password2=$_POST['confirmPassword'];
                    $gender=$_POST['gender'];
                    $age=$_POST['age'];
    
                if ($password1 == $password2) 
                {
                        if (strlen($_POST["password"]) >= '6') 
                        {
                            echo "Your Password Must Contain At Least 6 Characters!";
                        }
                        elseif(!preg_match("#[0-9]+#",$password1)) 
                        {
                            echo "Your Password Must Contain At Least 1 Number!";
                        }
                        elseif(!preg_match("#[A-Z]+#",$password1)) 
                        {
                            echo "Your Password Must Contain At Least 1 Capital Letter!";
                        }
                        elseif(!preg_match("#[a-z]+#",$password1))
                         {
                            echo "Your Password Must Contain At Least 1 Lowercase Letter!";
                        } else 
                        {
                            if (isset($_POST['checkConfirm']))
                               {
                                if(preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['username'])) { 
                                    if ($password1 == $password2) {
                                        //$hash=password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);
                                        $encrypt=md5($_POST['password']);
                                            $query = "INSERT INTO register 
                                            (username, email, password, Gender, Age) 
                                                VALUES 
                                                    ('$name','$email','$encrypt','$gender','$age')";
                                   
                                    //run query to insert new records
                                    mysqli_query($connection, $query);
                                    //return to calling page(stored in the server variables)*/
                                    header("Location: {$_SERVER['HTTP_REFERER']}");
                                    }
                                    else
                                    {
                                        echo "Data not inserted";
                                    }
                                    
                               }
                               else
                               {
                                   echo "User name must be alphanumeric and should be longer than or equals to 6";
                               }
                            }
                            else
                            {
                                echo "Not Agreed<br />";
                            }
                        }
    
                }
                else
                {
                echo "Two password are not matching";
                }	
            }
            else
            {
                echo "Please enter valid email address";
            }
        
        }
        else
        {
            echo "fill the form correctly";
        }
    
    }
    else
    {
        echo "not submitted!!";
    }
    
    
?>
</html>