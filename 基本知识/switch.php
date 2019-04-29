<!DOCTYPE html>
<meta charset="utf-8">
<body>
<form name="form1" method="post">
请输入月份：<input type="text" name="month" />
<input type="submit" name="button" value="提交" />
</form>
<?php
	$month=$_POST['month'];
	switch($month)
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$day=31;
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			$day=30;
			break;
		case 2:
			$day=29;
			break;
	}
	echo "$month 月有 $day 天";
?>
</body>
</html>