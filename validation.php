<?php
session_start();

$con=mysqli_connect("localhost","root");

mysqli_select_db($con,'php_connection');
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from setup1 where name='$name' && password='$pass' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$name;
	header('location:home.php');
}
else
{
	header('location:login.php');
	echo "Id or Password not match!";
}
?>