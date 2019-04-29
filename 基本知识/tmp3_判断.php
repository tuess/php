<!DOCTYPE html>
<meta charset="utf-8">
<body>
<form name="form1" method="post">
你的爱好是：<br>
<input type="checkbox" name="answer[]" value="1" />打球<br>
<input type="checkbox" name="answer[]" value="2" />跑步<br>
<input type="checkbox" name="answer[]" value="3" />听音乐<br>
<input type="checkbox" name="answer[]" value="4" />学习<br>
<input type="submit" name="button" value="测试一下" />
</form>
<?php
function show($message)
{
	echo"<script>alert('$message')</script>";
}
	$answer=$_POST['answer'];
	$choice="";
	for ($i=0;$i<count($answer);$i++)
		$choice.=$answer[$i];
	$l=count($answer);
	if ($l==1)
		if($choice=='1' || $choice=='2')
			show('你是一个好动的人');
		else
			show('你是一个安静的人');
	else if($l==2)
		if($choice=='12')
			show('你是一个好动的人');
		else if($choice=='34')
			show('你是一个安静的人');
		else
			show('你是一个动静皆宜的人');
	else if($l==3)
		if($choice=='123' || $choice=='124')
			show('你是一个好动的人');
		else if($choice=='134' || $choice=='234')
			show('你是一个安静的人');
		else
			show('你是一个动静皆宜的人');
	else
		show('你是一个动静皆宜的人');
?>
</body>
</html>