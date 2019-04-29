<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<script src="../../jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php
		include "../conn.php";
		include "../islogin.php";
		if(isset($_REQUEST['add']))
		{
			$flag=1;
			$teacherid=$_REQUEST['teacherid'];
			$teachername=$_REQUEST['teachername'];
			$pwd=$_REQUEST['pwd'];
			$tel=$_REQUEST['tel'];
			if($teacherid=="") //判断teacherid
			{
				$teacherid1="必须输入工号！";
				$flag=0;
			}
			elseif(preg_match('/^\d{5}$/',$teacherid)==0)
			{
				$teacherid1="工号必须为5位数字!";
				$flag=0;
			}
			else
			{
				$sql="select * from teacher where teacherid='$teacherid'";
				$result=mysqli_query($GLOBALS['con'],$sql);
				if(mysqli_num_rows($result)>=1)
				{
					$teacherid1="输入的教工号已存在，请重新输入！";
					$flag=0;
				}
			}
			if($teachername=="") //判断姓名
			{
				$teachername1="必须输入姓名！";
				$flag=0;
			}
			if($pwd=="") //判断密码
			{
				$pwd1="必须输入密码！";
				$flag=0;
			}
			if($tel=="") //判断电话
			{
				$tel1="必须输入电话!";
				$flag=0;
			}
			if($flag==1)
			{
				$sql="insert into teacher values($teacherid,'$teachername',$pwd,$tel);";
				mysqli_query($GLOBALS['con'],$sql);
				echo "<script>alert('添加成功！')</script>";
				echo "<script>location.href='teacher.php'</script>";
			}
		}
		mysqli_close($con);
	?>

<div class="col-6">
	<form name="form1" method="post" action="">
		<h3 style="text-align:center !important;">添加教师信息</h3>
		<table class="table table-hover" style="width: 500px">
			<tr>
				<td align="center">教工号：</td>
				<td align="center"><input type="text" name="teacherid" class="form-control"><?php echo @$teacherid1 ?></td>
			</tr>
			<tr>
				<td align="center">姓名：</td>
				<td align="center"><input type="text" name="teachername" class="form-control"><?php echo @$teachername1 ?></td>
			</tr>
			<tr>
				<td align="center">密码：</td>
				<td align="center"><input type="password" name="pwd" class="form-control"><?php echo @$pwd1 ?></td>
			</tr>
			<tr>
				<td align="center">电话：</td>
				<td align="center"><input type="text" name="tel" class="form-control"><?php echo @$tel1 ?></td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" name="add" value="添加" class="btn">
					<input type="button" name="back" value="返回" class="btn" onclick="location.href='teacher.php'">
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>