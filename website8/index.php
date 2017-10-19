<?php 
	#引入常量
require("config/config.php");
	# 引入文件
require("config/db.php");

	#设置utf8编码
mysqli_query($conn,"set names utf8");

	#设置sql语句   排序
$query = "SELECT * FROM posts ORDER BY created_at DESC";

	# 执行语句

$result = mysqli_query($conn,$query);

	# 获取数据

$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

	// var_dump($posts);

	# 释放数据
mysqli_free_result($result);
	# 断开连接
mysqli_close($conn);


?>
<!-- 引入外部头文件 -->
<?php include("inc/header.php"); ?>
<div class="container">
	<h1>博客总览</h1>
	<?php foreach ($posts as $post): ?>
		<div class="well">
			<h3><?php echo $post['title'] ?></h3>
			<p>
				<strong>作者:<?php echo $post['author']; ?></strong>
			</p>
			<p>
				<strong>时间:<?php echo $post['created_at']; ?></strong>
			</p>
			<p>
				<?php echo $post['body']; ?>
			</p>
			<a class="btn btn-info btn-block" href="post.php?id=<?php echo $post['id']; ?>">博客详情</a>
			<a href="#"><?php echo $post['id']; ?></a>
		</div>
	<?php endforeach; ?>
</div>
<!-- 引入脚 -->
<?php include("inc/footer.php"); ?>





















