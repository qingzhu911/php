<?php 
	# loop: 循环,让项目更高效;
	# 根据某个条件,重复执行某段代码
	
	/*
		-For
		-While
		-Do..While
		-Foreach
	*/

	# For 循环
	# @params - init,condition,inc
	// for($i = 0; $i < 10; $i ++) {
	// 	echo ($i+1)."<br>";//点的优先级比+高
	// }

	# while 循环
	# @params - condition
	// $i = 0;	
	// while ($i < 10) {
	// 		// echo $i."<br>";
	// 		$i ++;
	// 	}
	// echo $i;//10,变量泄露
	
	# 当知道循环次数用for循环,不知道次数用while循环,什么时候搭配使用?(外层使用while循环,内层使用for循环)

	# do...while
	#@params - condition
	// $i = 0;
	// do {
	// 	echo $i."<br>";
	// 	$i++;
	// }while($i < 10);	

	# foreach 循环 下标数组
	// $people = array("Henry","Bucky","Emily");
	// foreach ($people as $person) {
	// 	echo $person;
	// 	echo "<br>";
	// }

	# foreach 循环 关联数组
	// 	$people = array(
	// 		"Henry"=>"henry@gamail.com",
	// 		"Bucky"=>"Bucky@gamail.com",
	// 		"Emily"=>"Emily@gamail.com"
	// 	);
	// foreach ($people as $key => $value) {
	// 			echo $key.":".$value;
	// 			echo "<br>";
	// 		}		


/*
	打印1~100之间7的倍数
	打印1~100之间各位为7的数
	打印1~100之间十位为7的数
	打印1~100之间个位不为7,十位不为7,以及不是7的倍数的数

*/
/*
	打印9x9乘法表
*/	











 ?>