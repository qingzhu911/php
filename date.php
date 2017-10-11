<?php 
	// echo date("d"); # 至少给一个参数
	// echo date("m"); # 至少给一个参数
	// echo date("Y"); # 至少给一个参数 2017
	// echo date("y"); # 至少给一个参数 17
	// echo date("l"); # 星期 Wednesday
	// echo date("Y/m/d"); # 年月日 
	// echo date("d/m/Y"); # 年月日 
	// echo date("h"); # 小时
	// echo date("i"); # 分钟
	// echo date("s"); # 秒
	// echo date("a"); #AM or PM

	# 设置时区 date_default_timezone_set()
	// date_default_timezone_set("Asia/Shanghai");
	// echo date("h:i:sa");

	# mktime(时/分/秒/月/日/年)
	// $timestamp = mktime(07,00,12,1,24,1988);
	// echo "<hr>";
	// echo $timestamp;

	# 完整时间
	// echo date("m/d/Y h:i:sa",$timestamp);

	# 字符串转时间
	// $timestamp2 = strtotime("7:00pm March 22 2016");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo "<hr>";
	// echo date("m/d/Y h:i:sa",$timestamp3);
	// echo date("m/d/Y h:i:sa",$timestamp4);
	echo date("m/d/Y h:i:sa",$timestamp5);
	
 ?>