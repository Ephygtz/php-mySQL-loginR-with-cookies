<!DOCTYPE html>
<html>
<head>
	<title>Login or Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		.jumbotron{
			background-image: url("img/utah.jpg");
			background-position: center;
			background-size: cover;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<div align="center">
				<h2 class="text-info">Register/Login with cookies</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<h1>Login/Register:</h1>
		<form action="logreg.php" method="post" >
				<div class="form-group">
					<label>Username: 
						<input type="text" name="username" placeholder="Enter your username" class="form-control">
					</label>	
				</div>
				<div class="form-group">
					<label>Password: 
						<input type="password" name="password" placeholder="Enter your password" class="form-control">
					</label>	
				</div>
				<div class="form-group">
					<input type="submit" value="Login" name="login" class="form-control btn btn-success">
				</div>
				<div class="form-group">
					<input type="submit" value="Register" name="register" class="form-control btn btn-warning">
				</div>
		</form>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>