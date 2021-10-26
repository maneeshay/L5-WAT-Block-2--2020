<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'logout.php';

	echo "Login Sucessful";
    echo "<br/>";
    echo "Welcome ".$_SESSION['username'];

	 ?>
    
	<form action="" method="POST">
		
		<input type="submit" name="logout" value="LOGOUT">
	</form>
	</body>
</html>





	
