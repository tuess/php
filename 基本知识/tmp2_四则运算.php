<!DOCTYPE html>
<meta charset="utf-8">
<body>
<p>四则运算计算器</p>
<form name="form1" method="post">
<input type="text" name="a" size="6" />
<select name="opr">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="b" size="6" />
<input type="submit" name="button" value="提交" />
</form>

<?php
	$a=$_POST['a']; //第一个数
	$b=$_POST['b']; //第二个数
	$opr=$_POST['opr']; //运算符
	$c=""; //结果
	calc($a,$opr,$b,$c);
	show("$a $opr $b = $c"); //弹窗显示结果
	
function calc($a,$opr,$b,&$c) //加上&符号可以让函数直接对全局变量进行修改
{
	switch($opr)
		{
			case'+':
				$c=$a+$bb;
				break;
			case'-':
				$c=$a-$b;
				break;
			case'*':
				$c=$a*$b;
				break;
			case'/':
				$c=@($a/$b); //@符号是隐藏错误
				break;
			default:
				$c="";
		}
}

function show($message)
{
	echo"<script>alert('$message')</script>";
}
?>
</body>
</html>