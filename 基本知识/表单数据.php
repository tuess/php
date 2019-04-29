<!DOCTYPE html>
<meta charset="utf-8">
<body>
<h3>个人信息填写表</h3>
<form name="form1" id="form1" method="post">
姓名：<input type="text" name="name" id="name"/><br/>
年龄：<input type="text" name="age" id="age"/><br/>
爱好：<input type="text" name="hobit" id="hobit"/><br/>
<input type="submit" name="send" id="send" value="确认"/>
</form>
<?php 
	echo "姓名：".$_POST['name']."<br>";
	echo "年龄：".$_POST['age']."<br>";
	echo "爱好：".$_POST['hobit'];
?>
</body>
</html>