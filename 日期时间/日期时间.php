<?php
	date_default_timezone_set('PRC'); //设置默认时区为UTC+8
	//输出时间戳，从1970年1月1日到现在的秒数
	echo mktime()."<br>";
	echo time()."<br>";

	//输出时间，按给定的格式转化为具体的日期和时间(默认UTC时间，应改为PRC时间)
	echo date('Y-m-d H:i:s l')."<br>";

	//gedate,将时间戳转化为日期和时间信息，存入数组中
	$array=getdate();
	print_r($array);
?>