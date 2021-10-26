<!DOCTYPE html>
<html>
<head>
	
	<title>Register</title>
</head>
<body>
	
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
	echo "Registered Successfully.";
}


	?>
</body>
</html>