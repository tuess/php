<?php
	// 计算文件大小
	// echo filesize("./文件.php");

	// 判断文件是否存在
	// if(file_exists("./1.php")) echo "文件存在";
	// else echo "文件不存在";

	// 判断给定的是文件夹路径还(is_dir)是文件路径(is_file)
	// if(is_dir("./文件.php")) echo "文件夹路径";
	// else echo "不是文件夹路径";

	// 删除文件
	// if(unlink("1.rtf")) echo "删除成功";
	// else echo "删除失败";

	// 复制文件，复制的同时可以更改复制过来的名字
	// if(copy("upload/test.html","test.html")) echo "复制成功";
	// else echo "复制失败";

	// 移动文件,和复制文件同理，也可以更改移动过来的名字
	
	// 文件指针
	// $handle=fopen("文件.php","r");
	// ftell返回当前指针的位置
	// echo "当前指针为：".ftell($handle)."<br>";
	// fseek移动指针到第n个字节
	// fseek($handle, 100);
	// echo "当前指针为：".ftell($handle)."<br>";
	// rewind重置指针的位置，放到头部
	// rewind($handle);
	// echo "当前指针为：".ftell($handle)."<br>";

?>