<?php 
	session_start();
	# 取消干掉session中的name
	// unset($_SESSION['name']);
	# 干掉所有的session
	session_destroy();

 ?>