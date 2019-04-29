<!DOCTYPE html>
<meta charset="utf-8">
<body>
<?php 
	$a=1;
	function test()
	{
		$b=2; 
		static $c=3;
		$b++;
		$c++;
		global $a;
		//使用global关键词在函数内访问全局变量
		echo '局部变量：'.$b."<br>";
		echo '全局变量：'.$a."<br>";
		//static变量在函数调用结束后不会被释放，仍保留原值
		echo 'static变量：'.$c."<br>";
	}
	//连续调用三次函数，b是不会自增的，因为每次调用后都被释放掉了
	test();
	test();
	test();
	//在主程序内访问函数内的局部变量会出错
	echo '局部变量：'.$b."<br>";
	echo '全局变量：'.$a."<br>";
?>
</body>
</html>