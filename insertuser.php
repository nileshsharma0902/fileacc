<?php
if (isset($_POST['submitt']))
{

$conn=mysql_connect('localhost','root','');
mysql_select_db('acc');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



$con="insert into user(name,email,password)values('$name','$email','$password')";

$var=mysql_query($con);
if($var>0)
{
 	echo "<script type='text/javascript'>window.location='adduser.php?message=User registred succesfully.'</script>";
	echo "User insert succesfully";
}
else
{
	echo "<script type='text/javascript'>window.location='adduser.php?message=Please insert correct data.'</script>";
	echo "Please insert correct data";
}

}
mysql_close($conn)
 
?>