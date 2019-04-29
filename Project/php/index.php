<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<iframe src="top.php" name="iframe_a" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 10px">
		<div class="row">
			<div class="col-3" style="height: 600px">
				<iframe src="menu.php" name="iframe_b" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="col-9">
				<iframe src="<?php session_start(); echo @$_SESSION['role'].'/index.php';?>" name="iframe_c" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	include "islogin.php";
?>