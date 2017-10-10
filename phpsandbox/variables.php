
<?php 
	// echo "hello world!";
	//注释:
	//单行注释:win + /
	# 单行注释:shift + 3
	/*
		多行注释:alt + win + /
	*/

	# variable 变量
	// $output = "hello world!";
	// echo "$output";	
	/*
		-前缀:$
		-以字母/数字/下划线组成
		-数字不能开头
		-大小写敏感
		-驼峰命名法
	*/

	# 数据类型
	/*
		String,Integer(数字),Float,Boolean(0,1),Array,Object,Resource(函数)
	*/

	# 运算符

		// $num1 = 10;
		// $num2 = 20;
		// $sum = $num1 + $num2;
		// echo "$sum";
	# 字符串拼接(+只是单纯的相加,不能用于字符串拼接,拼接用.)
	// $string1 = "hello";
	// $string2 = "world!";
	// $greeting = $string1 + $string2;
	// $greeting = $string1.$string2;
	// $greeting = $string1." ".$string2;

	# php中引号的区别(单引号只是字符串,双引号中的变量会被解析)
	// $greeting2 = '$string1 $string2'; 
	// $greeting3 = "$string1 $string2"; 

	# 转义字符(\',"'")
	$string3 = 'They\'re here';	
	// $string3 = "They're here";

	# 输出
		echo "$string3";
		echo $string3;
	// echo $string3."<br>";//换行
	// printf($string3);//方法,成功返回1	

	# 常量
	// define("GREETING","WhatEver!",true);//true不区分大小写
	// echo GREETING;	
	// echo greeting;	

	// var_dump(greeting);//万能打印

	
?>	
