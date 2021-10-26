<?php
include 'connection.php';
 $email = $password = $pwd = ' ';


$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM register WHERE  email='$email' AND password='$password'";
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_assoc($result)) {
			
			$email = $row['email'];
			$password = $row['password'];
			session_start();
			
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		}
		header("Location: products.php");
}
else
{
	echo "Invalid email or password";
}
?>