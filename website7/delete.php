

		<?php 
				$sql = "DELETE FROM customers WHERE id = 6";
					
				deleteData($sql);
				function deleteData($sql) {
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
						echo "shan chu cheng gong ";
					}else {
						echo "shan chu shi bai ";
					}

					#断开连接
					$mysqli->close();
				}
		 ?>


