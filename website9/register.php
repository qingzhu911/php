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
			<h2 class="text-muted text-center">注册</h2>
		</header>
		<form action="register.php" method="POST">
			<!-- 引入文件 -->
			<?php include("errors.php"); ?>
			<div class="form-group">
				<label for="">账号</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="">邮箱</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="">密码</label>
				<input type="password" name="password1" class="form-control">
			</div>
			<div class="form-group">
				<label for="">确认密码</label>
				<input type="password" name="password2" class="form-control">
			</div>
			<input class="btn btn-default" type="submit" name="reg_user" value="注册">
			<a class="btn btn-success pull-right" href="login.php">有账号请登录</a>
		</form>
	</div>
</body>
</html>