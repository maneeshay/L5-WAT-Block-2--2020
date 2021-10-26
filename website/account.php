<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		*{
    margin: 0;
    padding:0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex:1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}

a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;

}

@media only screen and (max-width:600px){
    .row{
        text-align: center;
    }

    .col-2,.col-4, .col-4{
        flex-basis: 100%;
    }
    .single-product .row{
        text-align: left;
    }
    .single-product .col-2{
        padding:20px;
    }
    .single-product h1{
        font-size: 26px;
        line-height: 32px;
    }

    .cart-info p{
        display: none;;
    }
}


	</style>
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
           
        </div>
    </div>
	<h1>You must Sign in first</h1>
	
	<form method="post" action="account.php">
		
		<fieldset>
		<legend><b>User Registration</b></legend>
		<label for="name">User Name: </label>
		<input type="text" name="username" value="<?php
				if(isset($_POST['username'])){
					echo $_POST['username'];
				}
			?>"><br/><br/>
		<label for="email">email: </label>
		<input type="text" name="email" value="<?php
				if(isset($_POST['email'])){
					echo $_POST['email'];
				}
			?>"><br/><br/>
		<label for="Password">Password: </label>
		<input type="Password" name="password"><br/><br/>
		<label for="Password">Confirm Password: </label>
		<input type="Password" name="confirmPassword"><br/><br/>
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
<?php
include "connection.php";

if (isset($_POST['submit'])) 
{
	if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword']) && !empty($_POST['age'])) 
	{
	
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

				$name=$_POST['username'];
				$email=$_POST['email'];
				$password1=$_POST['password'];
				$password2=$_POST['confirmPassword'];
				$age=$_POST['age'];

			if ($password1 == $password2) 
			{
			        if (strlen($_POST["password"]) <= '6') 
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
                            	if ($password1 == $password2) {
                            		$encrypt=md5($_POST['password']);
                            			$query = "INSERT INTO register 
										(username, email, password, Age) 
											VALUES 
												('$name','$email','$encrypt','$age')";
							   
							    //run query to insert new records
								mysqli_query($connection, $query);
								//return to calling page(stored in the server variables)
        						header("Location: {$_SERVER['HTTP_REFERER']}");
                            	}
                            	else
                            	{
                            		echo "Data not inserted";
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
	echo "Registered Successfully.";	
}

else
{
	
}

	?>
</body>
</html>