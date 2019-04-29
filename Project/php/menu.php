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
	<p class="text-dark" align="center">管理菜单</p>
	<?php
		session_start();
		include "conn.php";
		if(isset($_SESSION['role']))
		{
			$sql="select * from menu where role='".$_SESSION['role']."';"; //查询语句
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			while ($row)
			{	//连接到下面
	?>
	<ul class="list-group">
		<li class="list-group-item text-center"><a href="<?php echo @$_SESSION['role']?>/<?php echo @$row['url']?>" target="iframe_c"><?php echo @$row['menuname']?></li>
	</ul>
	<?php
			$row=mysqli_fetch_array($result);
		}
		mysqli_free_result($result);
		mysqli_close($con);
	}
	?>
</body>
</html>