<?php 
	# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "Hellow World";
	// $output = substr($output, 1,5);
	// echo $output;
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output, "World");//查到首次出现的位置
	// echo $output;
	
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output, "l");//查到最后出现的位置
	// echo $output;
	
	# 去除首尾空格trim
	// $output = "  Hellow world  ";
	// echo strlen($output);
	// $newStr = trim($output);
	// echo $newStr;
	// echo strlen($newStr);
	# 将字符串转为大写 strtoupper
	// $str = "Hellow World";
	// $a = strtoupper($str);
	// echo $a;
	
	# 将字符串转为小写 strtolower
	// $str = "Hellow World";
	// $a = strtolower($str);
	// echo $a;
	
	# 将每个单词首字母大写 ucwords
	// $str = "hellow world";
	// $a = ucwords($str);
	// echo $a;
	
	# 替换所有匹配的内容  str_replace
	// $text = "Hellow World";
	// $output = str_replace("World", "Everybody", $text);
	// echo $output;
	
	# 判断是否是字符串  is_string
	// $val ="22";
	// $output = is_string($val);
	// echo $output;//1只有是字符串的时候才会打印1
	
	# 过滤掉数组中非字符串的值用到foreach
	$values = array(true,false,"Hellow",32,"23",23.4,"32.4",""," ",0,"0");
	foreach ($values as $key) {
		# 判断key是否是字符串
		if(is_string($key)) {
			echo $key." is a string!<br>";
		}
	}
	# 压缩字符串  gzcompress
	// $string = "一大坨文字";
	// $output = gzcompress($string);
	// echo $output;
	// # 解压字符串gzuncompress
	// $unCompressed = gzuncompress($output);
	// echo $unCompressed;
 ?>