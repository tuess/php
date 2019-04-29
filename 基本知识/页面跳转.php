<?php
	if(isset($_POST['button']))
	{
		header("Location:页面接收.php?id=1&name=张三");
	}
?>
<form name="form1" method="post" action="">
	<table border="1">
		<tr>
			<td>在php脚本中实现页面跳转</td>
			<td align="center"><input type="submit" name="button" value="执行"></td>
		</tr>
		<tr>
			<td>文件超链接实现页面跳转</td>
			<td align="center"><a href="页面接收.php?id=1&name=张三">跳转</a></td>
		</tr>
		<tr>
			<td>js脚本实现页面跳转</td>
			<td><input type="button" name="button1" value="执行" onclick="window.location.replace('页面接收.php?id=1&name=张三')"></td>
		</tr>
	</table>
</form>