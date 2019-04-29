<?php
	// 文件打开和关闭
	// $file=fopen("test.txt", "w+");
	// if($file) echo "打开成功";
	// else echo "打开失败";
	// fclose($file);

	// 文件写入,fwrite返回写入的字节数
	// $file=fopen("test.txt","w+");
	// $write=fwrite($file,"这是第一个测试");
	// if($write)
	// {
	// 	echo "写入文件成功<br>";
	// 	echo "写入的字节数为：".$write."个";
	// 	fclose($file);
	// }
	// else echo "写入失败";

	//用file_put_contents()函数，功能与依次调用“w”的一系列函数功能一致
	// $file=file_put_contents("test.txt","这是第二个测试");
	// if($file)
	// {
	// 	echo "写入文件成功<br>";
	// 	echo "写入的字节数为：".$file."个";
	// }
	// else echo "写入失败";

	// 读取文件固定长度用fread方法，第二个参数最大值为8192
	// $file=fopen("文件目录.php","r");
	// $content="";
	// while(!feof($file))
	// {
	// 	$data=fread($file,8192);
	// 	$content=$data;
	// }
	// 用htmlspecialchars将文件中的html标记编码，使浏览器能够显示出来
	// echo htmlspecialchars($content);
	// fclose($file);

	// 读取整个文件用file函数,整个文件被读取为一维数组，文件中的一行读取为数组的一个元素,格式很标准
	// $file=file("文件目录.php");
	// foreach($file as $a)
	// {
	// 	echo htmlspecialchars($a)."<br>";
	// }

	//读取一行数据用fgets方法,循环读取每一行并输出相当于读取全部的效果
	// $file=fopen("文件目录.php","r");
	// while(!feof($file))
	// {
	// 	$data=fgets($file);
	// 	echo htmlspecialchars($data)."<br>";
	// }
	// fclose($file);
	
	// fgetss函数是读取一行文本，去掉其中的html标记和php脚本后再放到变量中
	// $file=fopen("文件目录.php","r");
	// $data=fgetss($file);
	// echo $data;
	// fclose($file);
?>