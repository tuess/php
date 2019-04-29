<?php
//while循环求1-100的和
function _while()
{
	$a=0;
	$b=1;
	while($b<=100)
	{
		$a=$a+$b;
		$b+=1;
	}
	echo"和为：$a"."<br>";
}

//do-while循环求1-100的和
function do_while()
{
	$a=0;
	$b=1;
	do
	{
		$a=$a+$b;
		$b+=1;
	}
	while($b<=100);
	echo"和为：$a"."<br>";
}

//for循环求1-100的和
function _for()
{
	$a=0;
	for ($b=1;$b<=100;$b+=1)
		$a=$a+$b;
	echo"和为：$a"."<br>";
}

_while();
do_while();
_for();
?>