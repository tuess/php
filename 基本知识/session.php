<?php
	if(isset($_REQUEST['button']))
	{
		session_set_cookie_params(30);
		session_start();
		$_SESSION["s1"]=$_REQUEST["1"];
		$_SESSION["s2"]=$_REQUEST["2"];
		$_SESSION["s3"]=$_REQUEST["3"];
	}
?>

<form id="form1" name="form1" method="post" action="">
	<p>零食：</p>
	<P>
		<input type="checkbox" name="1" value="泡面">泡面&nbsp;&nbsp;
		<input type="checkbox" name="2" value="可乐">可乐&nbsp;&nbsp;
		<input type="checkbox" name="3" value="瓜子">瓜子
	</P>
	<P>
		<input type="submit" name="button" value="提交">
		<input type="button" name="button2" value="查看" onclick="window.location.replace('session_1.php');">
	</P>
</form>