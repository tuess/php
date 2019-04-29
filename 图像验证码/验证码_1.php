<?php
	session_start();
	header('Content-type:image/png'); //指定内容类型（输出图片，必须加上相应的头信息）
	$image_w=100;
	$image_h=25;
	$number=range(0,9);
	$character=range("Z","A");
	$result=array_merge($number,$character); //array_merge,数字合并
	$string="";
	$len=count($result);
	for($i=0;$i<4;$i++) //从连接的数组中随机取4个数
	{
		$new_number[$i]=$result[rand(0,$len-1)];
		$string=$string.$new_number[$i]; //将4个数连起来
	}
	$_SESSION['string']=$string; //将验证码的字符作为session传过去
	//画背景
	$check_image=imagecreate($image_w,$image_h);
	$white=imagecolorallocate($check_image, 255, 255, 255);
	$black=imagecolorallocate($check_image, 0, 0, 0);
	imagefill($check_image,0,0,$white);
	//随机填充一百个黑点
	for($i=0;$i<100;$i++)
	{
		imagesetpixel($check_image, rand(0,$image_w), rand(0,$image_h), $black);
	}
	//在随机位置画出验证码
	for($i=0;$i<count($new_number);$i++)
	{
		$x=mt_rand(1,4)+$image_w*$i/4; //x轴要每次循环向后去
		$y=mt_rand(1,$image_h/4);
		$color=imagecolorallocate($check_image, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200)); //字符取随机颜色
		imagestring($check_image, 5, $x, $y, $new_number[$i], $color);
	}
	imagepng($check_image); //输出图形
	imagedestroy($check_image); //释放资源
?>