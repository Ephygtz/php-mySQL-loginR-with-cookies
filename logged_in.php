<?php  
	$cookie_name = "loggedin";
	if(isset($_COOKIE[$cookie_name])){
		$cookie_value = $_COOKIE[$cookie_name];
		echo "Welcome to the Admin dashboard: $cookie_value!!!";
		echo '<a href="log_out.php">Logout</a>';
	} else {
		echo "Session expired, you need to login or Register";
	}

?>
