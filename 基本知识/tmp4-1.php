<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$id=$_REQUEST["id"];
	$pw=$_REQUEST["pw"];
	$phone=$_REQUEST["phone"];
	$mail=$_REQUEST["mail"];
?>

<table border="1" align="center">
	<tr>
		<caption>
			输入结果：
		</caption>
	</tr>
	<tr>
		<td align="=center">
			用户名：
		</td>
		<td>
			<?php echo $id; ?>
		</td>
	</tr>
	<tr>
		<td align="center">
			密码：
		</td>
		<td>
			<?php echo $pw; ?>
		</td>
	</tr>
	<tr>
		<td align="center">
			手机号码：
		</td>
		<td>
			<?php echo $phone; ?>
		</td>
	</tr>
	<tr>
		<td align="center">
			邮箱：
		</td>
		<td>
			<?php echo $mail; ?>
		</td>
	</tr>
</table>
</body>
</html>