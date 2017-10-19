<?php 
	require("config/config.php");
	# 连接数据库
	require("config/db.php");
	# 实现删除博客
	if(isset($_POST['delete'])) {
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		// var_dump($delete_id);
		#sql 语句
		$query = "DELETE FROM posts WHERE id= '$delete_id'";
		if(mysqli_query($conn,$query)) {
			# 跳转
			header("location: index.php");
		}else {
			echo "error".mysqli_error($conn);
		}
	}

	# 设置编码格式
	mysqli_query($conn,"set names utf8");
	// $id = $_GET['id'];
	$id = mysqli_real_escape_string($conn,$_GET['id']);//转义 SQL 语句中使用的字符串中的特殊字符。

	#设置sql语句
	$query = "SELECT * FROM posts WHERE id = '$id'";
	
	# 查询数据库(查询的连接,查询的的字符串)
	$result = mysqli_query($conn,$query);

	# 获取单个数据(得到的是关联数组,取得一行作为关联数组：),拿到所有数据是fetch_all
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);

	# 释放数据从结果集中取得行，然后释放结果内存：
	mysqli_free_result($result);
	# 断开连接
	mysqli_close($conn);
 ?>
 <html lang="en">
<!-- 引入外部文件 -->
	<?php include("inc/header.php"); ?>

 <div class="container">
		<h1>博客详情</h1>
			<div class="well">
				<h3><?php echo $post['title'] ?></h3>
				<p>
					<strong>ID:</strong>
					<?php echo $post['id']; ?>
				</p>
				<p>
					<strong>作者:<?php echo $post['author']; ?></strong>
				</p>
				<p>
					<strong>时间:<?php echo $post['created_at']; ?></strong>
				</p>
				<p>
					<?php echo $post['body']; ?>
				</p>
				<br>
				<!-- 删除模块 -->
				<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<!-- 隐形的表单目的是传数据 -->
					<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
					<input class="btn btn-danger " type="submit" name="delete" value="删除">
				</form>
				<!-- 编辑模块,传id -->
				<a class="btn btn-info" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">编辑</a>
			</div>
			<a class="btn btn-primary btn-block" href="<?php echo ROOT_URL ?>">返回主页</a>

	</div>
</div>
<!-- 引入脚 -->
	<?php include("inc/footer.php"); ?>