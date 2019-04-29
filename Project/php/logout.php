<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php
		session_start();
   		if(isset($_SESSION['update']))
   		{
   			echo "<script>window.top.location.href='login.php';</script>";
   		}
   		else
   		{
   			echo "<script>var x=window.confirm('确定要退出吗？');";
   			echo "if(x==true) window.top.location.href='login.php';</script>";
   		}
	?>
</body>
</html>