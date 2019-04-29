<!DCOTYPE html>
<meta charset="utf-8">
<body>
<form name="form1" method="post">
用post发送学号：<input type="text" name="number" /><br>
<input type="submit" name="button1" value="提交" />
</form>

<form name="form2" method="get">
用get发送姓名：<input type="text" name="name" /><br>
<input type="submit" name="button2" value="提交" />
</form>

<?php
	echo '学号：'.$_POST['number'];
	echo '姓名：'.$_GET['name'];
?>
</body>
</html>