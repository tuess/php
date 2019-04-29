<!DOCTYPE html>
<meta charset="utf-8">
<body>
<P>下列那些是省会城市</p>
<form name="form1" method="post">
<input type="checkbox" name="answer[]" value="A" />广州<br>
<input type="checkbox" name="answer[]" value="B" />福州<br>
<input type="checkbox" name="answer[]" value="C" />成都<br>
<input type="checkbox" name="answer[]" value="D" />北京<br>
<input type="checkbox" name="answer[]" value="E" />重庆<br>
<input type="checkbox" name="answer[]" value="F" />沈阳<br>
<input type="submit" name="button" value="提交" />
</form>

<?php
	$answer=$_POST['answer'];
	$choice="";
	for($i=0;$i<count($answer);$i++)
		$choice.=$answer[$i];
	if ($choice=='ABCE')
		echo "答对了！";
	else
		echo "答错了！";
?>
</body>
</html>