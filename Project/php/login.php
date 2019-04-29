<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
   <style type="text/css">
      .table>tbody>tr>td{
         border: 0px;
      }
   </style>
   <script type="text/javascript">
   if(window.top.loaction.href!=window.location.href)
   {
      window.top.location.href=window.loaction.href;
   }
   function keydown()
   {
      if (event.keyCode == 13)
      {
       form1.login.click();
      }
   }
</script>
</head>
<body background="../images/background.jpg" onkeydown="keydown()">
      <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <form name="form1" method="post" action="">
               <table class="table">
                  <tr>
                     <td class="text-center" colspan="2"><h3>学生成绩管理系统</h3></td>
                  </tr>
                  <tr>
                     <td class="text-center">用户名：</td>
                     <td><input type="text" name="userid" id="userid" class="form-control" value=""></td>
                  </tr>
                  <tr>
                     <td class="text-center">密码：</td>
                     <td><input type="password" name="pwd" id="pwd" class="form-control"></td>
                  </tr>
                  <tr align="center">
                     <td>你的身份是：</td>
                     <td>
                        <select class="form-control" name="role">
                           <option value="admin">管理员</option>
                           <option value="teacher">教师</option>
                           <option value="student">学生</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td align="center"><input type="submit" name="login" value="登录" class="btn"></td>
                     <td align="center">
                        <label style="margin-top: 10px">
                        <input type="checkbox" name="rem" class="form-check-input" style="margin-top: 8px" checked="true">记住密码
                        </label>
                     </td>
                  </tr>
               </table>
            </form>
         </div>
      </div>
   </div>
</body>
</html>

<?php
   include "conn.php";
   session_start();
   //检测cookie，直接在输入框里填好账号和密码，否则手动输入账号密码
   if(!empty($_COOKIE))
   {
      $x=$_COOKIE['userid'];
      $y=$_COOKIE['pwd'];
      //在输入框写入账号和密码
      echo "<script>document.getElementById('userid').value=$x;document.getElementById('pwd').value=$y;</script>";
   }

   if(!empty($_SESSION['update']))
   {
      echo "<script>document.getElementById('pwd').value='';</script>";
   }

   if(isset($_POST['login'])) //登录，设置session
   {
      $role=$_POST['role'];
      $userid=$_POST['userid'];
      $pwd=$_POST['pwd'];
      $rem=$_POST['rem'];
      $sql="select * from $role where ".$role."id='$userid' and pwd='$pwd'"; //id前要加上id的类型
      $result=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($result);
      if(!$row)
      {
         echo "<script>alert('用户名或密码错误！');</script>";
      }
      else
      {
         $_SESSION['role']=$role;
         $_SESSION['userid']=$userid;
         $_SESSION['pwd']=$pwd;
         echo "<script>location.href='index.php'</script>;";
      }
   }

   if(!empty($rem)) //记住密码，设置cookie
   {
      //先清除cookie，防止上一次修改过密码
      setcookie("userid", ''); 
      setcookie("pwd", '');

      //cookie会默认记录sessionID，除非主动删除，否则不会为空
      setcookie("userid", $userid, time()+3600*24*30,'/'); 
      setcookie("pwd", $pwd, time()+3600*24*30,'/');
   }

   mysqli_close($con);
?>