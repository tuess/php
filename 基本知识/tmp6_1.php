<?php
	$id=$_REQUEST['id']; //将数据取出来
	$name=$_REQUEST['name'];
	$sex=$_REQUEST['sex'];
	$date=$_REQUEST['date'];
	$study=$_REQUEST['study'];
	$note=$_REQUEST['note'];
	$hobit=$_REQUEST["hobit"];
?>

<table>
	<tr>
		<td>学号：</td>
		<td><?php echo $id; ?></td>
	</tr>
	<tr>
		<td>姓名：</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>性别：</td>
		<td><?php echo $sex; ?></td>
	</tr>
	<tr>
		<td>出生日期：</td>
		<td><?php echo $date; ?></td>
	</tr>
	<tr>
		<td>所学专业：</td>
		<td><?php echo $study; ?></td>
	</tr>
	<tr>
		<td>备注：</td>
		<td><?php echo $note; ?></td>
	</tr>
	<tr>
		<td>兴趣：</td>
		<td><?php echo $hobit; ?></td>
	</tr>
</table>