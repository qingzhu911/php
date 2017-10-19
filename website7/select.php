

		<?php 
				$sql = "SELECT * FROM customers";
					
				selectData($sql);
				function selectData($sql) {
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

					if($result->num_rows) {
						$data = $result->fetch_all(MYSQLI_ASSOC);// MYSQLI_ASSOC拿到数组赋值给$data
						print_r($data);//默认是下标数组
						echo json_encode($data);
					}
					
					// var_dump($result);

					#断开连接
					$mysqli->close();
				}
		 ?>


