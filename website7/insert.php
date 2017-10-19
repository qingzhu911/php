<?php 
	/*
		操作数据库:
		1.连接数据库
		2.执行sql语句
		3.获取数据并且使用
		4.断开连接		
	*/		
		#.准备sql语句
			$sql = "INSERT INTO customers(name,email,address,city,state) VALUES('欣欣','xx@gmail.com','定泗路','北京','昌平区')";
		insertData($sql);
		function insertData($sql) {
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
				echo "success";
			}else {
				echo "faild";
			}
			#断开连接
			$mysqli->close();
		}









 ?>