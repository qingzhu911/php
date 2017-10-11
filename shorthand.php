<?php 
	$loggedIn = false;
	$names = ["Henry","Bucky","Emily"];
	// if ($loggedIn) {
	// 	# code...
	// 	echo "U r LOgged In";
	// }else {
	// 	echo "U r Not Logged In";
	// }

	# 上面三目写法
	// echo ($loggedIn) ?  "U r LOgged In" : "U r Not Logged In";
	# 简写得到true 或者 false
	// $isRegistered = ($loggedIn == true) ? true : false;
	// echo $isRegistered;//1

	# 三目嵌套
	// $age = 18;
	// $score = 80;
	// echo "Your score is".($score > 70 ? ($age < 20 ? "优秀" : "一般") : ($age < 20 ? "一般" : "很差"));

 ?>

 <!-- html + php 嵌套语法糖 -->
<!--  <div>
 	<?php if($loggedIn) { ?>
 	<p>Welcome to Beijing</p>
 	<?php }else { ?>
	<p>Welcome to Zhengzhou</p>
 	<?php } ?>
 </div> -->

 <!-- 上面代码优化 -->

<!--  <div>
 	<?php if($loggedIn) : ?>
 	<p>Welcome to Beijing</p>
 	<?php else : ?>
	<p>Welcome to Zhengzhou</p>
 	<?php endif; ?>
 </div> -->


<!-- 遍历数组 foreach -->
<!-- <div>
	<?php foreach($names as $key): ?>
		<?php echo $key ?>
	<?php endforeach; ?>
</div> -->

<!-- 练习: for循环遍历数组 -->
<div>
	<?php for($i = 0; $i < count($names); $i++): ?>
		<?php echo $names[$i] ?>
	<?php endfor; ?>	
</div>










