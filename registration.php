<?php
session_start();
header('location:login.php');
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,'php_connection');
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from setup1 where name='$name' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo"duplicate data";
}
else
{
	$qy="insert into setup1(name,password) values('$name','$pass')";
	mysqli_query($con,$qy);
	echo"Connection successful";
}
?>