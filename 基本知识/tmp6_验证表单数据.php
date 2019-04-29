<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_POST['button1']))
	{
		$flag=1; //设一个标志
		$id=$_POST['id']; //将数据取出来
		$name=$_POST['name'];
		$sex=@$_POST['sex']; //若未选中任何选项，则sex不存在
		$date=$_POST['date'];
		$study=$_POST['study'];
		$note=$_POST['note'];
		$hobit=@$_POST['hobit'];

		if($id=="")
		{
			$id1="必须输入学号！";
			$flag=0;
		}
		elseif (preg_match('/\d{6}/', $id)==0) 
		{
			$id1="学号必须为6位数字！";
			$flag=0;
		}
		if($name=="")
		{
			$name1="必须输入姓名！";
			$flag=0;
		}
		if($sex=="")
		{
			$sex1="必须选择性别！";
			$flag=0;
		}
		if($date=="")
		{
			$date1="必须输入日期！";
			$flag=0;
		}
		if($study=="")
		{
			$study1="必须选择专业！";
			$flag=0;
		}
		if(count($hobit)==0)
		{
			$hobit1="必须选择兴趣！";
			$flag=0;
		}
		else $hobit2=implode(",", $hobit);
		if($flag==1)
		{
			header("Location:tmp6_1.php?id=$id&name=$name&sex=$sex&date=$date&study=$study&note=$note&hobit=$hobit2");
		}
	}
?>

<form name="form1" method="post" action="">
<table border="1">
	<tr>
		<caption>学生个人信息</caption>
	</tr>
	<tr>
		<td>学号：</td>
		<td><input type="text" name="id">&nbsp;&nbsp;<?php echo $id1; ?></td>
	</tr>
	<tr>
		<td>姓名：</td>
		<td><input type="text" name="name">&nbsp;&nbsp;<?php echo $name1; ?></td>
	</tr>
	<tr>
		<td>性别：</td>
		<td>
			<input type="radio" name="sex" value="男">男&nbsp;&nbsp;
			<input type="radio" name="sex" value="女">女&nbsp;&nbsp;<?php echo $sex1; ?>
		</td>
	</tr>
	<tr>
		<td>出生日期：</td>
		<td><input type="date" name="date">&nbsp;&nbsp;<?php echo $date1; ?></td>
	</tr>
	<tr>
		<td>所学专业：</td>
		<td>
			<select name="study">
				<option>计算机科学与技术</option>
				<option>机械工程</option>
				<option>网络工程</option>
			</select><?php echo $study1; ?>
		</td>
	</tr>
	<tr>
		<td>备注：</td>
		<td><input type="text" name="note"></td>
	</tr>
	<tr>
		<td>兴趣：</td>
		<td>
			<input type="checkbox" name="hobit[]" value="游泳" checked="true">游泳
			<input type="checkbox" name="hobit[]" value="跑步">跑步
			<input type="checkbox" name="hobit[]" value="看书">看书&nbsp;&nbsp;<?php echo $hobit1; ?>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="button1" value="提交">
			<input type="reset" name="button2" value="重置">
		</td>
	</tr>
</table>
</form>
</body>
</html>