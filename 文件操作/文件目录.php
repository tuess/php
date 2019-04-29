<?php
	// if(mkdir("111")) echo"创建文件夹成功";

	// mkdir("111");
	// if(rmdir("111")) echo "删除文件夹成功";

	// 输出当前操作目录
	// echo getcwd();

	// 打开和关闭目录句柄
	// $dir=opendir("../Mysql");
	// if($dir) echo "打开目录句柄成功";
	// else echo "打开失败";
	// closedir($dir);

	// readdir的参数为一个已打开的目录句柄，每次调用会返回目录中的一个文件或文件夹名
	// $dir=opendir("../../test");
	// $file=readdir($dir);
	// while($file)
	// {
	// 	echo $file."<br>";
	// 	$file=readdir($dir);
	// }
	// closedir($dir);

	// scandir是将指定路径下的所有文件和文件夹依次放入一维数组中
	// $file=scandir("../../../www");
	// foreach($file as $a)
	// {
	// 	echo $a."<br>";
	// }
?>