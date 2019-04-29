<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form name="form1" method="post" enctype="multipart/form">
		<table>
			<tr>
				<td>请选择你最喜欢吃的零食</td>
			</tr>
			<tr>
				<td><input type="radio" name="vote" value="糖果">糖果</td>
			</tr>
			<tr>
				<td><input type="radio" name="vote" value="辣条">辣条</td>
			</tr>
			<tr>
				<td><input type="radio" name="vote" value="泡面">泡面</td>
			</tr>
			<tr>
				<td><input type="submit" name="button" value="投票"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	$file="tmp_1.txt";
	//判断用来计数的文件是否存在并初始化
	if(!file_exists($file))
	{
		$handle=fopen($file,"w+");
		fwrite($handle,"0|0|0");
		fclose($handle);
	}
	if(isset($_POST['button']))
	{
		if(isset($_POST['vote']))
		{
			$vote=$_POST['vote'];
			$handle=fopen($file,"r+");
			//fread，读取文件固定长度
			$votestr=fread($handle,filesize($file)); //此时$votesrt是字符串
			fclose($handle);
			$votearray=explode("|",$votestr); //将$votestr按|分隔开，$votestr是数组
			echo "<h3>投票完毕</h3>";
			if($vote=='糖果')
				$votearray[0]++;
			echo "目前糖果的票数为：<li>".$votearray[0]."</li><br>";
			if($vote=='辣条')
				$votearray[1]++;
			echo "目前辣条的票数为：<li>".$votearray[1]."</li><br>";
			if($vote=='泡面')
				$votearray[2]++;
			echo "目前泡面的票数为：<li>".$votearray[2]."</li><br>";
			//计算总票数
			$sum=$votearray[0]+$votearray[1]+$votearray[2];
			echo "总票数为：<li>".$sum."</li><br>";
			$votestr2=implode("|",$votearray); //将投票后的新数组用|链接为字符串
			$handle=fopen($file,"w+");
			fwrite($handle,$votestr2);
			fclose($handle);
		}
		else
		{
			echo "<script>alert('请投票！')</script>";
		}
	}
?>