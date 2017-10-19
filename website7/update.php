<?php 
		$sql = "UPDATE customers SET name = '孙帅',email='ss@gmail.com' WHERE id = 5";
			
		updateData($sql);
		function updateData($sql) {
			#1.连接数据库
			$mysqli = new mysqli("localhost","root","","people");
			#测试是否连接成功
			if($mysqli->connect_errno) {
				#只要不是0就会进入
				die($mysqli->connect_error);
			}

			#.设置utf-8
			$mysqli->query("set names utf8");//规定好的

			#3.执行sql语句,返回0到1
			$result = $mysqli->query($sql);
			if($result) {
				echo "geng xin cheng gong ";
			}else {
				echo "geng xin shi bai ";
			}

			#断开连接
			$mysqli->close();
		}
 ?>