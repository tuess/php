<?php
	//连接数据库
	header("Content-type:text/html;charset=utf-8");
	$con=mysqli_connect('localhost','root','','project');
	mysqli_query($con,"set names utf8");
	session_start();
?>