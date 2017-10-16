<?php 
	# 改变cookie
	setcookie('username','Franch',time() + 86400);
	# 干掉cookie
	// setcookie('username','fafaf',time() - 3600);
	# 判断cookie有多少个
	if(count($_COOKIE) > 0) {
		echo "一共有". count($_COOKIE)."COOKIE";
	}else {
		echo "没有cookei";
	}

	if(isset($_COOKIE['username'])) {
		echo "你的用户名是:".$_COOKIE['username'];
	}else {
		echo "用户名不存在";
	}
 ?>