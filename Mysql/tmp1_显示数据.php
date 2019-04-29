<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>	
<body>
	<form name="form1" method="post" action="">
		<select name="select">
			<option value="">请选择一个表</option>
			<option>student</option>
		</select>
		<input type="submit" name="button1" value="确定">
	</form>
	<table border="1" style="border-bottom-style:none">
		<tr>
			<td width="50">编号：</td>
			<td width="50">姓名：</td>
			<td width="50">性别：</td>
			<td width="50">分数：</td>
		</tr>
	</table>
</body>
</html>

<?php
	$table=$_REQUEST['select'];
	$con=mysqli_connect('localhost','root','','test');
	mysqli_query($con,"set names utf8");
	$sql="select * from $table";
	$result=mysqli_query($con,$sql);
	$b=mysqli_num_fields($result);
	echo "<table border='1'>";
	if($b>0)
	{
		while($row=mysqli_fetch_row($result))
		{
			for($i=0;$i<$b;$i++)
			{
				if($i==0) echo"<tr>";
				echo "<td width='50'>".$row[$i]."</td>";
				if($i==3) echo"</tr>";
			}
		}
	}
	echo "</table>";

?>