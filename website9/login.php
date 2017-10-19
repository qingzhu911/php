<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
	<title>注册和登录系统</title>
</head>
<body>
	<div class="container">
		<header>
			<h2 class="text-muted text-center">登录</h2>
		</header>
		<form action="login.php" method="POST">
			<!-- 引入文件 -->
			<?php include("errors.php"); ?>
			<div class="form-group">
				<label for="">账号</label>
				<input type="text" name="username" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="">密码</label>
				<input type="password" name="password" class="form-control">
			</div>
			
			<input class="btn btn-success" type="submit" name="login_user" value="登录">
			<a class="btn btn-info pull-right" href="register.php">没有有账号请登录</a>
		</form>
	</div>
</body>
</html>