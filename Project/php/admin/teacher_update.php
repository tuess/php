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
	$teacherid=$_REQUEST['id']; //接收传过来的teacherid

?>

	<div class="col-6">
	<form name="form1" method="post" action="">
		<h3 style="text-align:center !important;">修改教师信息</h3>
		<table class="table table-hover" style="width: 500px">
			<tr>
				<td align="center">教工号：</td>
				<td align="center"><input type="text" name="teacherid" class="form-control" value="<?php echo $teacherid ?>" readonly="readonly"></td>
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
					<input type="submit" name="add" value="修改" class="btn" onclick="alert('修改成功！');">
					<input type="button" name="back" value="返回" class="btn" onclick="location.href='teacher.php';">
				</td>
			</tr>
		</table>
	</form>
	</div>

<?php 
	include "../conn.php";
	include "../islogin.php";
	$teachername=$_REQUEST['teachername']; //接收下面表格传来的修改过后的teachername
	$pwd=$_REQUEST['pwd'];
	$tel=$_REQUEST['tel'];
	$flag=1; //设定一个成功标志
	if($teachername=="")
	{
		$teachername1="姓名不能为空！";
		$flag=0;
	}
	if($pwd=="")
	{
		$pwd1="密码不能为空！";
		$flag=0;
	}
	if($tel=="")
	{
		$tel1="电话不能为空！";
		$flag=0;
	}
	if($flag==1)
	{
		$sql="update teacher set teachername='$teachername',pwd='$pwd',tel='$tel' where teacherid='$teacherid';";
		$result=mysqli_query($GLOBALS['con'],$sql);
		echo "<script>location.href='teacher.php';</script>";
		mysqli_free_result($result);
	}
	
	mysqli_close($con);
?>
</body>
</html>