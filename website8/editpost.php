<?php 
	header('Content-type:text/html;charset=utf8');

	require('config/config.php');
	require('config/db.php');
//编辑博客
	if(isset($_POST['submit'])){
		#获取input中的数据
		$title =  mysqli_real_escape_string($conn,$_POST['title']);
		$author =  mysqli_real_escape_string($conn,$_POST['author']);
		$body =  mysqli_real_escape_string($conn,$_POST['body']);

		//获取到update_id
		$update_id =  mysqli_real_escape_string($conn,$_POST['update_id']);
	if(!empty($title) && !empty($author) && !empty($body)){
			$query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id={$update_id} ";
			mysqli_query($conn,'set names utf8');
			if(mysqli_query($conn,$query)){
				header('location:index.php');

			}else{
				echo "数据编辑失败".mysqli_error($conn);
			}
		}
	}
	mysqli_query($conn,'set names utf8');
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query = "SELECT * FROM posts WHERE id={$id}";
	//执行语句
	$result = mysqli_query($conn,$query);

	//用all的时候,获取到的是一个大的二维数组
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);//得到的是关联数组
	
	mysqli_free_result($result);

	//断开连接,面向过程中,要写明断开与谁的数据
	mysqli_close($conn);

 ?>

<?php include('inc/header.php'); ?>
<div class="container">
	<h1 class="text-muted">编辑博客</h1><br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="form-group">
			<label>标题</label>
			<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
		</div>
		<div class="form-group">
			<label>作者</label>
			<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
		</div>
		<div class="form-group">
			<label>内容</label>
			<input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
		</div>
		<input type="hidden" value="<?php echo $post['id']; ?>" name="update_id">
		<input type="submit" value="修改" name="submit" class="btn btn-primary">
	</form>

</div>

<?php include('inc/footer.php'); ?>