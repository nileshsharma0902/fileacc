<?php

session_start();

$db = mysqli_connect("localhost","root","","acc");

if(isset($_POST['register_btn']))
{
	
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	
	if($password==$password2)
	{
		$password= md5($password);
		$sql="INSERT INTO users(username,email,password)VALUES('$username','$email','$password')";
		mysql_query($db,$sql);
		$_SESSION['message']="You are looged in";
		$_SESSION['username']= $username;
		header("location: home.php");
	}
	else
	{
		$_SESSION['message']="The two password do not match";
		
	}
}


?>



<html>
<head>
<title>Register Login and logout</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="header">
<h1>Register, Login</h1>
</div>

<form method="post" action="register.php">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" class="textInput"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="email" name="email" class="textInput"></td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="password2" class="text1"></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="submit" name="register_btn" value="Register"></td>
</tr>



</table>
</form>


</html>