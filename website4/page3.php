<?php 
	session_start();
	# 改变服务器中的session的值
	// $_SESSION['name'] = "Alice";
	# 获取session的值
	$name = isset($_SESSION['name']) ? $_SESSION['name']:'name属性不存在';
	$email = isset($_SESSION['email']) ? $_SESSION['email']:'name属性不存在';	
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page 3</title>
 </head>
 <body>	
 	<h2>你的名字:<?php echo $name; ?></h2>
 	<h2>你的邮箱:<?php echo $email; ?></h2>
 </body>
 </html>