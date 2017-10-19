<?php 
	#开启
	session_start();
	$errors = [];
	#连接数据库
	$db = mysqli_connect("localhost","root","","registration");
	# 处理用户注册
	if(isset($_POST['reg_user'])) {
		#假设数据库是空的
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password1 = mysqli_real_escape_string($db,$_POST['password1']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);
		# 执行sql语句
		if(empty($username)) {
			#放进数组
			array_push($errors, "用户名不能为空");
		}
		if(empty($email)) {
			#放进数组
			array_push($errors, "邮箱不能为空");
		}
		
		if(empty($password1)) {
			#放进数组
			array_push($errors, "密码不能为空");
		}
		if($password1 != $password2) {
			#放进数组
			array_push($errors, "两次密码不能为空");
		}
		if(count($errors) == 0) {
			$password = md5($password1);
			$query = "INSERT INTO users(user_name,email,password) VALUES('$username','$email','$password')";

			mysqli_query($db,"set names utf8");
			if(mysqli_query($db,$query)) {
				
				header("location: login.php");
			}
		}

	}




	# 用户登录
	if (isset($_POST['login_user'])) {
		$username =mysqli_real_escape_string($db,$_POST['username']);
		$password =mysqli_real_escape_string($db,$_POST['password']);
		if(empty($username)) {
			arrar_push($errors,"用户名不能为空");
		}
		if(empty($password)) {
			arrar_push($errors,"密码不能为空");
		}
		if(count($errors) == 0) {
			#密码加密
			$password = md5($password);
			$query = "SELECT * FROM users WHERE user_name='$username' AND password = '$password'";
			mysqli_query($db,"set names utf8");
			$result = mysqli_query($db,$query);
			# 判断有没有获取到
			if(mysqli_num_rows($result) == 1) {
				$_SESSION['success']="success";
				$_SESSION['username']=$username;
				header("location: index.php");
			}
		}
	}
 ?>
















