<?php  
	$cookie_name = "loggedin";

	//create db connection
	$servername = "localhost";
	$username = "login";
	$pass = "logreg";
	$db = "logreg";

	//Test connection
	$connection = mysqli_connect($servername, $username, $pass, $db);

	if(!$connection) {
		die("Database connection failed: " . mysqli_connect_error());
	} 
	echo "Succeful connection";

	//Check if user is registered
	if(isset($_POST['login'])){
		$user = $_POST['username'];
		$pass =$_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass';";

		$result = mysqli_query($connection, $query);

		$count = mysqli_num_rows($result);

		if($count == 1) {
			$cookie_value = $user;
			setcookie($cookie_name, $cookie_value, time() + (300), "/");
			header("Location: logged_in.php");
		} else {
			echo "Username or password you entered is incorrect";
		}

	} else if(isset($_POST['register'])) {
		$user = $_POST['username'];
		$pass =$_POST['password'];

		$query = "INSERT INTO users (id, username, password) VALUES ('', '$user', '$pass');";

		$result = mysqli_query($connection, $query);
	}
?>