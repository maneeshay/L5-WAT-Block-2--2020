<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Session_WEEK6</title>
	<link rel="stylesheet" type="text/css" href="">
	<!---<style>
		form{ padding: 50px; margin: 50px auto; display: block; width: 500px; background:#A6ACAF   ;
		}
		input{ margin: 10px 0;
	
		}
	</style>---->
</head>
<body>
	<form method="post" action="./login.php">
<fieldset>
	<legend>Login Form</legend> <br/>
      <label for="">Username :</label> <br/>
      <input type="text" name="txtUser" value=''/> <br/> <br/>
      <label for="">Password :</label> <br/>
      <input type="password" name="txtPass" /> <br/> <br/>
      <input type="submit" name="subLogin" value="submit" />

</fieldset>

</form>	
<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>
</body>
</html>