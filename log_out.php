<?php  

	setcookie("loggedin", "", time() - (60), "/");
	header("Location: index.php");
?>