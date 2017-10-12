<div class="container">
	<?php 
		# 检查是否存在data的name属性
		// if(filter_has_var(INPUT_POST, "data")) {
			# echo "data 存在";
			# 拿到不合法邮箱
			// $email = $_POST["data"];
			# 邮箱必须写@,会过滤掉邮箱中不合法的字符
			// $email = filter_var($email,FILTER_SANITIZE_EMAIL);
			// echo $email;
			# 验证邮箱
			// if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
				// echo "邮箱有效!";
				/*
					审核:合法的留下,不合法带走
					FILTER_SANITIZE_EMAIL
					FILTER_SANITIZE_ENCODED
					FILTER_SANITIZE_MAGIC_QUOTES
					FILTER_SANITIZE_NUMBER_FLOAT
					FILTER_SANITIZE_NUMBER_INT
					FILTER_SANITIZE_SPECIAL_CHARS
					FILTER_SANITIZE_FULL_SPECIAL_CHARS
					FILTER_SANITIZE_STRING
					FILTER_SANITIZE_STRIPPED
					FILTER_SANITIZE_URL
					FILTER_UNSAFE_RAW
					
					验证:验证和不合法
					FILTER_VALIDATE_BOOLEAN
					FILTER_VALIDATE_EMAIL
					FILTER_VALIDATE_FLOAT
					FILTER_VALIDATE_INT
					FILTER_VALIDATE_IP
					FILTER_VALIDATE_MAC
					FILTER_VALIDATE_REGEXP
					FILTER_VALIDATE_URL
				*/
			// }else {
				// echo "邮箱无效!";
			// }
		// }else {
		// 	// echo "data 不存在";
		// }


		# 练习:验证变量中的一个值是否是合法的数值
		// $var = 23.3;
		// $var = "23.3";
		// if(filter_var($var,FILTER_VALIDATE_INT) OR filter_var($var,FILTER_VALIDATE_FLOAT)) {
		// 	echo $var."是合法的数值";
		// }else {
		// 	echo $var."是不合法字符";
		// }

		# 练习:获取字符串中的所有数值
		// $var = "54545dfa5d5fa5s5555gfgg5hj5jk4k44";
		// $var = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
		// echo $var;

		# 特殊字符
		// $var = "<script>alert(1)</script>";
		// echo $var;//弹出1
		// echo filter_var($var,FILTER_SANITIZE_FULL_SPECIAL_CHARS);//打印<script>alert(1)</script>

		# 如果有2个input含有name,要配置过滤信息
		# 数组规则,随便起
		// $filters = array(
		// 	"data" => FILTER_VALIDATE_EMAIL,
		// 	"data2" => array(
		// 		'filter' => FILTER_VALIDATE_INT,
		// 		'options' => array(
		// 			'min_range' => 1,
		// 			'max_range' => 150
		// 		)
		// 	)
		// );
		// print_r(filter_input_array(INPUT_POST,$filters));

		// $filters = array(
		// 	"data" => FILTER_VALIDATE_EMAIL,
		// 	"data2" => array(
		// 		'filter' => FILTER_VALIDATE_INT,
		// 		'options' => array(
		// 			'min_range' => 1,
		// 			'max_range' => 150
		// 		)
		// 	) 
		// );
		// print_r(filter_input_array(INPUT_POST,$filters));


		# 题目:验证form表单中imput的内容,第一个input一定是email,第二个input一定是数值(数值不能小于1,数值不能大于150)
		//1.判断邮箱
		// if(filter_has_var(INPUT_POST, "data")) {
		// 	$email = $_POST["data"];
		// 	if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
		// 		echo $email;
		// 	}else {
		// 		echo "";
		// 	}
		// }else {
		// 	echo "";
		// }			
		// //2.判断数字
		// if(filter_has_var(INPUT_POST, "data2")) {
		// 	$number = $_POST["data2"];
		// 	if(filter_var($number,FILTER_VALIDATE_INT)) {
		// 		if($number < 1 OR $number > 150) {
		// 			echo "";
		// 		}else {
		// 			echo $number;
		// 		}
		// 	}else {
		// 		echo "";
		// 	}
		// }else {
		// 	echo "";
		// }




		$arr = array(
			"name" => "henry",
			"age" => "30",
			"email" => "henry@qq.com"
		);
		//定义规则
		$filters = array(
			"name" => array(
				"filter" => FILTER_CALLBACK,//回调下面的options
				"options" => "ucwords"
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"potions" => array(
					"min_range" => 1,
					"max_range" => 100
				)
				
			),
			"email" => FILTER_VALIDATE_EMAIL

		);
		print_r(filter_var_array($arr,$filters));





	 ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<input type="text" name="data" class="form-control">
			<br>
			<input type="text" name="data2" class="form-control">
			<br>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>