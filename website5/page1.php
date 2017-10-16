<?php 
	# 监听用户是否触发了submit方法
	if(isset($_POST['submit1'])) {
		$username = $_POST['username'];
		//cookie第一个参数名字随便起,第二个参数是值,第三个参数是保存的时长
		setcookie('username',$username,time() + 86400 * 30);
		# 页面跳转
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
		<input type="text" name="username" placeholder="enter u name">
		<input type="submit" value="Submit" name="submit1">
	</form>
</body>
</html>