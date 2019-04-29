<?php
	$con=mysqli_connect('localhost','root','','test');
	if($con) echo "链接成功";
	else echo "链接失败";

	$sql="insert into student(name,sex,score) values('小红','女',99)";  //增删查改只是sql语句不同，代码结构是一样的

	mysqli_query($con,"set names utf8"); //设置字符集

	if(mysqli_query($con,$sql))
	{
		echo "插入成功";
	}
	else
	{
		echo "Error".$sql."<br>".mysqli_error($con);
	}

	mysqli_close($con);
?>