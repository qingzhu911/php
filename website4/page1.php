<?php 
	# cookie,sessionstorage 存在于服务器中,localstorage存在浏览器中
	# 必须先调用session_start()方法
	
	if (isset($_POST['submit'])) {
		session_start();
		//第一个name,email 自定义
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];
		//header跳转
		header("location:page2.php");
	}
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page 1</title>
 </head>
 <body>

 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 		<input type="text" name="name">
 		<input type="text" name="email" placeholder="enter email">
 		<input type="submit" value="提交" name="submit">
 	</form>
 </body>
 </html>