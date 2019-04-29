<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form name="form1" method="post" action="">
		<table>
		<tr>
			<td>请输入年份：</td>
			<td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>请输入月份：</td>
			<td><input type="text" name="month"></td>
		</tr>
		<tr>
			<td><input type="submit" name="button1" value="提交">
			<input type="reset" name="button2" value="重置"></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php
	$year=@$_REQUEST['year'];
	$month=@$_REQUEST['month'];
	if(empty($year))
		$year=date("Y"); //Y，4位数表示的完整年份
	if(empty($month))
		$month=date("n"); //n，月份，没有前导0
	$day=date("j"); //j，月份中的第几天，没有前导0
	$wd_ar=array("日","一","二","三","四","五","六");
	$wd=date("w",mktime(0,0,0,$month,1,$year)); //将时间戳按给定的格式转化成具体的时间,"w"数字表示的星期中的第几天,这里求出每个月1号是星期几

	$y_lnk1=$year<=1970?$year=1970:$year-1;
	$y_lnk2=$year>=2037?$year=2037:$year+1;

	$m_lnk1=$month<=1?$month=1:$month-1;
	$m_lnk2=$month>=12?$month=12:$month+1;

	echo "<table><tr align=center>";
	echo "<td colspan=4>".$year."年"."</td>";
	echo "<td colspan=3>".$month."月"."</td></tr>";

	//输出日一二三四五六
	echo "<tr  align=center>";
	for ($i=0;$i<7;$i++)
	{
		echo "<td>".$wd_ar[$i]."</td>";
	}
	echo "</tr>";

	//输出日期
	$tnum=$wd+date("t",mktime(0,0,0,$month,1,$year)); //求这个月共有几天，加上星期几,控制循环次数
	for($i=0;$i<$tnum;$i++)
	{
		$date=$i+1-$wd; //0加1减去星期几，前面都是负数，可以控制每个月第一天打印出来的是1
		if($i%7==0) echo "<tr align=center>"; //星期日输出一个<tr>
			echo "<td>";
		if($i>=$wd) //当i到了第一天的星期数时，开始打印天数
		{
			if($date==$day&&$month==date("n")) //如果时今天，加粗
				echo "<b>".$day."</b>";
			else
				echo $date;
		}	
		echo "</td>"; //输出一个加一个</td>
		if($i%7==6)
			echo "</tr>"; //星期六加上</tr>
	}
	echo "</table>";

	/*画日历天数对齐星期的方法：
	先求出这个月第一天是星期几，转化成0-6的整数，再求出这个月共有多少天，
	将天数加上星期转化的整数，用这个数来控制for循环，i=0，i++，日期的显示
	就用i+1-星期转化的整数，这样在这个月的第一天之前的几天都是负数，当i>=
	星期转化的整数时，再开始打印日期。*/
?>