<?php 
	# if & switch
	
	#关系运算符
   /* 
	*	> < >= <= === !==
	*/

	// $num = 6;
	// if($num <= 4) echo "num的值一定是小鱼或者等于4";
	// echo "hello";

	#if else
	// $num = 2;
	// if($num >=4 ) {
	// 	echo "true";
	// }else {
	// 	echo "false";
	// }

	#nesting if
	// $num = 4;
	// if($num >= 4){
	// 	if($num <=10){
	// 		echo "num一定是在4到10之间";
	// 	}else {
	// 		echo "num大于10";
	// 	}
	// }else {
	// 	echo "num一定小鱼4";
	// }

	# 逻辑运算符
	/*
		逻辑与 && AND(短路)
		逻辑或 || OR(短路)
		逻辑非 !
		逻辑异或 XOR
	*/
	// $num = 3;
	// if($num > 3 XOR $num < 10) {
	// 	echo "num是大于3并且小鱼10";
	// }
	/*
	    AND: 一假既假
	    OR: 一真即真
	    XOR:只有一边为真即真
	*/

	# switch(条件大于等于4使用)
	$favColor = "green";
	switch ($favColor) {
		case 'red':
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;	
		
		default:
			echo "GUN";
			break;
	}












 ?>