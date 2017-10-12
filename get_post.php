<div class="container">
	<!-- <?php 
		// echo $_GET['sbqname'];
		# 检查sbqname是否能获取到
		if(isset($_GET['sbqname']) && isset($_GET['sbqemail'])) {
			# echo $_GET['sbqname'];
			$name = $_GET['sbqname'];
			$email = $_GET['sbqemail'];
			echo $name." : ".$email;
		}
	 ?> -->
<!-- 	 <?php 
		// echo $_POST['sbqname'];
		if(isset($_POST['sbqname']) && isset($_POST['sbqemail'])) {
			# echo $_POST['sbqname'];
			$name = $_POST['sbqname'];
			$email = $_POST['sbqemail'];
			if(!empty($name) && !empty($email)) {
				// echo $name." : ".$email;
			}
			print_r($_POST);
			
		}
	 ?> -->
	 <?php 
		// echo $_REQUEST['sbqname'];
		if(isset($_REQUEST['sbqname']) && isset($_REQUEST['sbqemail'])) {
			# echo $_REQUEST['sbqname'];
			$name = $_REQUEST['sbqname'];
			$email = $_REQUEST['sbqemail'];
			if(!empty($name) && !empty($email)) {
				// echo $name." : ".$email;
			}
			// print_r($_REQUEST);
		}
		# 查询url地址后面的参数
		// 查询get后面提交的参数(?后面的参数)
		echo $_SERVER['QUERY_STRING'];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- 提交到本文件 -->
		<!-- get提交网址会有?,后面的是内容,大小有限制 -->
		<!-- post不会有参数,安全系数更高,将数据打包以二进制传到后台,大小很大-->
		<form action="get_post.php" method="get">
		<!-- <form action="get_post.php" method="post"> -->
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="sbqname" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="sbqemail" class="form-control">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交"></input>
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=高超"; ?>" class = "btn btn-success btn-block">高超</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅"; ?>" class = "btn btn-info btn-block">赵帅</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</body>
</html>