<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
	<h1></h1>
	<h1></h1>
	<h1 style="text-align: center">WelCome To New WebSite</h1>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-lg-6">
				<h2>LogIn form</h2>
				<form action="validation.php" method="post">
					
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">	
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">	
					</div>
					<button type="submit">SignIn</button>
				</form>	
			</div>



			
			<div class="col-lg-6">
				<h2>Registration form</h2>
				<form action="registration.php" method="post">
					
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">	
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">	
					</div>
					<button type="submit" class="">SignUp</button>
				</form>
				
			</div>
		</div>
		
	</div>
</div>

</body>
</html>