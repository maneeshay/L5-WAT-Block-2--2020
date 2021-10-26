<?php
include 'connection.php';
$username = $email = $password = $pwd = ' ';

$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM register WHERE username= '$username'	AND email='$email' AND password='$password'";
$result = mysqli_query($connection,$sql);
if (mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_assoc($result)) {
			$username = $row['username'];
			$email = $row['email'];
			$password = $row['password'];
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		}
		header("Location: dashboard.php");
}
else
{
	echo "Invalid email or password";
}
?>