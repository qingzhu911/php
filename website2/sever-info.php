<?php 
	# $_SERVER[]: 用于记录客户端&服务端的配置信息

	# 服务器端数组信息

	/*
		SERVER_NAME => 主机名
		SERVER_SOFTWARE => 服务器软件信息
		DOCUMENT_ROOT => 文档根路径
		SCRIPT_FILENAME => 绝对路径
		PHP_SELF => 当前路径
	*/
	$server = [
		"主机名" => $_SERVER['SERVER_NAME'],
		"服务器软件信息" => $_SERVER['SERVER_SOFTWARE'],
		"文档根路径" => $_SERVER['DOCUMENT_ROOT'],
		"绝对路径" => $_SERVER['SCRIPT_FILENAME'],
		"当前路径" => $_SERVER['PHP_SELF'],
	];
	// echo $_SERVER['SERVER_NAME'];
	// echo $_SERVER['主机名'];
	// echo $_SERVER['软件信息'];
	// echo $_SERVER['DOCUMENT_ROOT'];






	# 客户端数组信息
	/*
		HTTP_USER_AGENT => 客户端系统信息
		REMOTE_ADDR => 客户端IP
		REMOTE_PORT => 客户端端口号
	*/
	$client = [
		"客户端系统信息" => $_SERVER['HTTP_USER_AGENT'],
		"客户端IP" => $_SERVER['REMOTE_ADDR'],
		"客户端端口号" => $_SERVER['REMOTE_PORT'],
	];
	// print_r($client);










 ?>