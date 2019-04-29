<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <?php
    	include "conn.php";
    	if(isset($_POST['update']))
    	{
    		$flag=1;
    		$role=$_SESSION['role'];
    		$userid=$_SESSION['userid'];
    		$pwd=$_POST['password'];		//旧密码
    		$newpwd=$_POST['password1'];	//新密码
    		$confirm=$_POST['password2'];	//确认新密码
    		if($pwd=="")
    		{
    			$pwd1="必须输入原密码！";
    			$flag=0;
    		}
    		else
    		{
    			$sql="select * from ".$role." where ".$role."id= '".$userid."' and pwd='$pwd';	";
    			echo $sql."<hr/>";
    			$result=mysqli_query($GLOBALS['con'],$sql);
    			print_r($result);
    			if(mysqli_num_rows($result)==0)
    			{
    				$pwd1="原密码错误，请重新输入！";
    				$flag=0;
    			}
    		}
    		if($newpwd=="")
    		{
    			$newpwd1="新密码不能为空！";
    			$flag=0;
    		}
    		if($confirm=="")
    		{
    			$confirm1="确认密码不能为空！";
    			$flag=0;
    		}
			if(strcmp($newpwd, $confirm)!=0)
			{
				$confirm1="输入两次密码不一致！";
				$flag=0;
			}
			if($flag==1)
			{
				$sql="update ".$role." set pwd= '$newpwd' where ".$role."id = '".$userid."';";
				mysqli_query($GLOBALS['con'],$sql);
				$_SESSION['update']="1"; //判定是否修改过密码
				setcookie("pwd",''); //先清除cookie
				setcookie("pwd", $newpwd, time()+3600*24*30,'/'); //设置cookie为新密码
				echo "<script>alert('修改成功！');location.href='logout.php'</script>";
			}
    	}
        mysqli_close($con);
    ?>

<div class="col-6">
    <form name="form1" method="post" action="">
    	<table class="table table-hover">
    		<tr>
    			<td align="center">原密码：</td>
    			<td align="center"><input type="password" name="password" class="form-control"><?php echo @$pwd1 ?></td>
    		</tr>
    		<tr>
    			<td align="center">新密码：</td>
    			<td align="center"><input type="password" name="password1" class="form-control"><?php echo @$newpwd1 ?></td>
    		</tr>
    		<tr>
    			<td align="center">确认密码：</td>
    			<td align="center"><input type="password" name="password2" class="form-control"><?php echo @$confirm1 ?></td>
    		</tr>
    		<tr>
    			<td align="center" colspan="2">
    				<input type="submit" name="update" class="btn" value="修改">
    			</td>
    		</tr>
    	</table>
    </form>
   </div>
</body>
</html>