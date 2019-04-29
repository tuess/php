<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<script src="../../jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<p class="text-warning">admin</p>
	<?php
		session_start();
		var_dump($_COOKIE)."<br>";
		var_dump($_SESSION);
	?>
</body>
</html>