<?php 
	$users = ["name" => "Heny","email" => "825560019@qq.com","age" => 20];
	# 将数组压缩成字节流存入cookie
	$users = serialize($users);
	setcookie('users',$users,time()+86400);

	# 解压cookie
	$users = unserialize($_COOKIE['users']);
	print_r($users);
	
 ?>