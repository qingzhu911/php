<?php 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	if(!isset($_SESSION['username'])) {
		header("location: login.php");
	}
 ?>