<?php 
		#引入常量
	require("config/config.php");
		# 引入文件
	require("config/db.php");
	if(isset($_POST['submit'])) {

		# 获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);

		if(!empty($title) && !empty($author) && !empty($body)) {
			# 执行sql语句插入服务器
			$query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";
			mysqli_query($conn,"set names utf8");
			#执行sql语句
			if(mysqli_query($conn,$query)){
				header("location: index.php");//冒号后面必须有个空格
			}else {
				echo "数据插入失败".mysqli_error($conn);
			}

		}
	}
 ?>

<!-- 引入外部文件 -->
	<?php include("inc/header.php"); ?>

	<div class="container">
		<h1 class="text-muted">添加博客</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="">标题</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="">作者</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label for="">内容</label>
				<input type="text" name="body" class="form-control">
			</div>

			<input type="submit" value="添加" name="submit" class="btn btn-primary btn-block">
		</form>
	</div>

<!-- 引入脚 -->
	<?php include("inc/footer.php"); ?>