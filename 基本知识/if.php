<!DOCTYPE html>
<meta charset="utf-8">
<body>
<form name="form1" method="post">
请输入一个整数：<input type="text" name="score" />
<input type="submit" name="button" value="提交" />
</form>

<?php
	$score=$_POST['score'];
	if($score>=90)
	{
		echo '成绩等级为：A';
	}
	else if($score>=80)
	{
		echo '成绩等级为：B';
	}
	else if($score>=70)
	{
		echo '成绩等级为：C';
	}
	else if($score>=60)
	{
		echo '成绩等级为：D';
	}
	else if($score<60)
	{
		echo '成绩等级为：E';
	}
?>
</body>
</html>