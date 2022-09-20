<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<style>
body {
  background-image: url('img11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  /*background-color: orange;*/
}
</style>
</head>
<body>
	

	<h1 style="text-align: right">WelCome:  
		<?php 
		echo $_SESSION['username']; 
		?> 
	</h1>

	<a href="logout.php" style="float: right">LOGOUT</a>

</body>
</html>