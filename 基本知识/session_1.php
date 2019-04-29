<P>你要买的是：</P>
<?php
	session_start();
	$str="";
	if(@$_SESSION["s1"]!=null)
	{
		$str=$str.$_SESSION["s1"];
	}
	if(@$_SESSION["s2"]!=null)
	{
		$str=$str." ".$_SESSION["s2"];
	}
	if(@$_SESSION["s3"]!=null)
	{
		$str=$str." ".$_SESSION["s3"];
	}
	echo $str;
?>