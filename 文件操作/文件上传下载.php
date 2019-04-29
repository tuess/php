<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file" >
		<input type="submit" name="button" value="提交">
	</form>
	<!-- 超链接下载，当链接指向除txt，图片和网页文件以外的文件时，就会下载，但是会暴露目标文件所在路径 -->
	<a href="./upload/1.exe">下载</a>
</body>
</html>

<?php
	if(isset($_POST['button']))
	{
		//第一个参数是表单的 input name
		echo $_FILES['file']['size']."<br>";
		echo $_FILES['file']['tmp_name']."<br>";
		$filename=$_FILES['file']['name'];
		$tmp_filename=$_FILES['file']['tmp_name'];
		if(move_uploaded_file($tmp_filename, "upload/$filename")) //存放的文件夹需要自己创建
		{
			echo "文件名称：".$_FILES['file']['name']."<br>";
			echo "文件类型：".$_FILES['file']['type']."<br>";
			echo "文件大小：".($_FILES['file']['size']/1024)."KB";
		}
	}

	// 使用header和readfile相结合的方式，不用点击，打开页面直接下载，但是只能下载txt，图片和网页格式的文件
	// $name="./upload/test.html";
	// header("Content-Disposition:attachment;filename=test.html");
	// readfile($name);
?>