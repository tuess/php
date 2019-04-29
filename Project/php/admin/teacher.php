<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>学生成绩管理系统</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<script src="../../jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		function checkall(form) //全选
		{
			for(var i=0;i<form.elements.length;i++)
			{
				var e=form.elements[i];
				if(e.name != 'checkbox1' && e.type=='checkbox')
				{
					e.checked=form.checkbox1.checked;
				}
			}
		}

		function delconfirm() //删除确认
		{
			//forms 集合返回当前页面所有表单的数组集合
			var a=document.forms[0].checkbox2; //获取forms表单中的checkbox2对象，是一个数组
			var b=0;
			for(var i=0;i<document.forms[0].checkbox2.length;i++) //checkbox2的长度
			{
				if(a[i].checked)
				{
					b+=1; //计算有几个选中
				}
			}
			if(b==0)
			{
				alert('至少选择一条记录！');
				return false;
			}
		}
	</script>
</head>
<body>
	<form name="form1" method="post" action="">
		<div class="col-5">
			<div class="input-group" align="center" style="margin-bottom: 5px">
				<span style="margin-top: 6px">请输入姓名：</span>
				<input type="text" name="name" id="name" class="form-control rounded" style="margin-top: 2px">
				<input type="submit" name="search" value="查询" class="btn" style="margin-left: 5px">	
			</div>
		</div>
		<table class="table table-hover">
			<thead>
				<th width="17%">工号</th>
				<th width="17%">姓名</th>
				<th width="17%">密码</th>
				<th width="17%">电话</th>
				<th width="17%">全选<input type="checkbox" name="checkbox1" id="checkbox1" onclick="checkall(this.form)"></th>
			</thead>
			<?php
				include "../conn.php";
				include "../islogin.php";
				//先写一个加载数据的方法
				function loadinfo($sql)
				{
					$result=mysqli_query($GLOBALS['con'],$sql.";"); //查询语句第二次调用要在后面加语句，所以分号在用的时候再添加上
					// $row=mysqli_fetch_array($result);
					// print_r($row);
					$total=mysqli_num_rows($result); //获取查询记录的总数
					if(isset($_REQUEST['search'])) $page=1;
					else $page=isset($_GET['page']) ? intval($_GET['page']) : 1; //intval，返回一个整数值
					$num=2; //每页显示记录的数量
					$url="teacher.php";
					$pagenum=ceil($total/$num); //获取总页数。ceil()返回不小于 value 的下一个整数，value 如果有小数部分则进一位。
					$prepage=$page-1; //上一页
					$nextpage=($page==$pagenum ? 0 : $page+1); //如果当前页是最后一页，下一页设为0
					$new_sql=$sql." limit ".($page-1)*$num.",".$num.";"; //按每页记录数生成限制查询语句
					$new_result=mysqli_query($GLOBALS['con'],$new_sql);
					if($new_row=@mysqli_fetch_array($new_result)) //$new_row是查询的结果匹配的数组
					{
						do
						{
							//在echo语句中用到类似$new_row['teachername']，要用大括号括起来表示一个整体
							list($id,$name,$pwd,$tel)=$new_row; //将$new_row数组中的值赋给一组变量,就不用写$new_row['teachername']了
							echo "<tr>";
							echo "<td width='17%'><a href='teacher_update.php?id=$id'>$id</a></td>";
							echo "<td width='17%'>$name</td>";
							echo "<td width='17%'>$pwd</td>";
							echo "<td width='17%'>$tel</td>";
							echo "<td width='17%'><input type='checkbox' name='T_id[]' id='checkbox2' value='$id'></td>";
							echo "</tr>";
						}
					 	while($new_row=mysqli_fetch_array($new_result));

					 	//分页导航条
					 	$pagenav="";
					 	if($prepage)
					 		$pagenav.="<a href='$url?page=$prepage'>上一页</a>";
					 	for($i=1;$i<=$pagenum;$i++)
					 	{
					 		if($page==$i)
					 			$pagenav.="<b>$i</b>&nbsp;";
					 		else
					 			$pagenav.="<a href='$url?page=$i'>$i&nbsp;</a>";
					 	}
					 	if($nextpage)
					 		$pagenav.="<a href='$url?page=$nextpage'>下一页</a>";
					 	$pagenav.="&emsp;共".$pagenum."页";
					 	//输出分页导航
					 	echo "<tr><td align='center' colspan='6'>".$pagenav."</td></tr>";
					}
					else
					{
						echo "<tr><td align='center' colspan='6'>暂无记录</td></tr>";
					}
				}
				//删除功能
				if(isset($_POST['del']))
				{
					$id=@$_POST['T_id']; //取得被选中的人的id
					if($id)
					{
						$num=count($id);
						for($i=0;$i<$num;$i++)
						{
							$delsql="delete from teacher where teacherid='{$id[$i]}';";
							mysqli_query($GLOBALS['con'],$delsql);
						}
						echo "<script>alert('操作完成！')</script>";
					}	
				}
				$str="select * from teacher where teachername like '%".@$_POST['name']."%' order by teacherid";
				loadinfo($str); //调用函数
				if(isset($_POST['add']))
				{
					echo "<script>location.href='teacher_add.php';</script>"; 
				}
				mysqli_close($con);
			?>
			<!-- 输出位于表单最后的两个按钮 -->
			<tr>
				<td colspan="6" align="center">
					<input type="submit" name="add" id="add" class="btn" value="添加">&emsp;
					<input type="submit" name="del" id="del" class="btn" value="删除" onclick="delconfirm()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>