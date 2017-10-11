<?php 
	# function: 函数 - 具有某一功能的代码块(都有返回值,不写return返回undefined)
	/*
		Camel Case - myFun()
		Lower Case - my_fun()
		Pascal Case - MyFun()
	*/

	# 定义函数(函数如果没调用,内存中不存在,调用的时候会写入内存),函数名字大小写不敏感
	// function SimpleFunction() {
	// 	echo "Hello world!";
	// }
	// simpleFunction();//函数名字大小写不敏感

	# 有参数无返回值
	// function buy($money = "20块钱") {
	// 	echo $money."给了,但没给我买东西!拿着钱跑了!";
	// }
	// buy("30块钱");//调用有参函数必须传参,传参的优先级比默认的优先级高
	// buy("100块钱");

	# 多参数 有返回值
	// function sumVal($num1,$num2) {
	// 	$sum = $num1 + $num2;
	// 	return $sum;
	// }
	// $a = sumVal(3,5);//有返回值要拿变量接收
	// echo $a;

	# 无参数 有返回值
	// function buyDrink() {
	// 	return "饭后饮料!";
	// }
	// $a = buyDrink();
	// echo $a;

	# 函数传引用(&取地址,在函数形参中)
	$myNum = 10;
	function addFive(&$num) {
		 $num += 5;
	}	
	addFive($myNum);
	echo $myNum; #拿到了myNum的引用,改变了内存中的数值 所以是15

























 ?>