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
	<div class="container-fluid">
		<h1 style="color: #909090;text-align: center;">学生成绩管理系统</h1>
		<hr/>
		<?php
			session_start();
			$role="管理员";
			if($_SESSION['role']=="teacher")
				$role="教师";
			if($_SESSION['role']=="student")
				$role="学生";
			echo "当前用户类别：".$role."	&emsp;&emsp;用户名：".$_SESSION['userid'];
		?>
	</div>
</body>
</html> 