<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form name="form1" method="post" action="">
		验证码：<input type="text" name="check">
		<img src="验证码_1.php">
		<input type="submit" name="button1" value="提交">
	</form>
</body>
</html>

<?php
	session_start();
	if(isset($_POST['button1']))
	{
		$chechstr=$_SESSION['string'];
		$str=$_POST['check'];
		if(strcasecmp($str, $chechstr)==0)
			echo "<script>alert('验证码输入正确!')</script>";
		else
			echo "<script>alert('验证码输入错误')</script>";
	}
?>