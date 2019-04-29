<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	if (isset($_REQUEST["button"])) //判断是否存在
	{
		$test=1; //test作一个flag
		$id=$_REQUEST["id"]; //把输入的四个数据取出来
		$pw=$_REQUEST["pw"];
		$phone=$_REQUEST["phone"];
		$mail=$_REQUEST["mail"];

		if($id=="")
		{
			$id1="用户名不能为空";
			$test=0; //flag设为false
		}
		elseif (preg_match('/^1\w{1,10}$/', $id)==0) //正则匹配找到返回1未找到返回0
		{
			$id1="用户名不超过十个字";
			$test=0;
		}
		if($pw=="")
		{
			$pw1="密码不能为空";
			$test=0;
		}
		elseif (preg_match('/^\d{4,14}$/', $pw)==0)
		{
			$pw1="密码必须为4-14个数字";
			$test=0;
		}
		if($phone=="")
		{
			$phone1="电话号码不能为空";
			$test=0;
		}
		elseif(preg_match('/^1\d{10}$/', $phone)==0)
		{
			$phone1="手机号码必须是11位";
			$test=0;
		}
		if($mail=="")
		{
			$mail1="邮箱不能为空";
			$test=0;
		}
		elseif(preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9_\.]+$/', $mail)==0)
		{
			$mail1="邮箱地址无效";
			$test=0;
		}
		if($test==1)
		{
			header("Location:tmp4-1.php?id=$id&pw=$pw&phone=$phone&mail=$mail"); //跳转到一个新地址
		}
	}	
?>

<form action="">
	<table border="1" align="center">
		<tr>
			<caption>
				新用户注册
			</caption>
		</tr>
		<tr>
			<td align="center">
				用户名：
			</td>
			<td>
				<input type="text" name="id" /><?php echo $id1; ?>
			</td>
		</tr>
		<tr>
			<td align="center">
				密码：
			</td>
			<td>
				<input type="password" name="pw" /><?php echo $pw1; ?>
			</td>
		</tr>
		<tr>
			<td align="center">
				手机号：
			</td>
			<td>
				<input type="text" name="phone" /><?php echo $phone1; ?>
			</td>
		</tr>
		<tr>
			<td align="center">
				邮箱：
			</td>
			<td>
				<input type="text" name="mail"><?php echo $mail1; ?>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="button" value="注册">
				<input type="reset" name="button2" value="重置">
			</td>
		</tr>
	</table>
</form>
</body>
</html>	