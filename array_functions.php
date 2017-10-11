<?php 
	$array = array("Henry","Bucky","Emily");
	# 计算数组个数 count
	// echo count($array);
	# 将数组开头的单元移出数组 array_shift
	// $newArray = array_shift($array);//返回移除的
	// echo $newArray;
	// print_r($array);
	# 在数组开头插入一个或多个单元 array_unshift
	// $insertVal = array_unshift($array,"Hemiah");
	// print_r($array);
	# 将一个或多个单元压入数组的末尾（入栈）array_push
	// array_push($array,"Elyse");
	// print_r($array);
	# 弹出数组最后一个单元（出栈） array_pop
	// array_pop($array);
	// print_r($array);
	# 数组排序 sort
	// $values = array(22,56,32,11,65,23,15,44);
	// sort($values);
	// print_r($values);
	# 数组转字符串 implode
	$arrayToString = array("a","b","c");
	$value = implode(" ", $arrayToString);
	echo $value;
	
	# 字符串转数组 explode
	// $array = explode(" ", $value);
	// echo $array[0];
	// var_dump($array);
 ?>