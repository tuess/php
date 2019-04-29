<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form name="form1" method="post" action=""> <!--如果要将结果输出到另一个网页，就加上action-->
		学号：<input type="text" name="id"><br>
		姓名：<input type="text" name="name"><br>
		性别：<input type="radio" name="sex" value="男">男&nbsp;&nbsp;
		<input type="radio" name="sex" value="女">女<br>
		<input type="submit" name="button" value="提交">
	</form>
</body>
</html>

<?php
	class Student
	{
		public $id,$name,$sex;
		function __construct($a,$b,$c)
		{
			$this->name=$a;
			$this->id=$b;
			$this->sex=$c;
		}

		function show()
		{
			echo "学号：".$this->id."<br>";
			echo "姓名：".$this->name."<br>";
			echo "性别：".$this->sex;
		}
	}

	if(isset($_POST["button"]))
	{
		$a=$_POST['id'];
		$b=$_POST['name'];
		$c=$_POST['sex'];
		$stu=new Student($a,$b,$c);
		$stu->show();
	}
?>