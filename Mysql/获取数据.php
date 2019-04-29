<?php 
	$con=mysqli_connect('localhost','root','','test');
	mysqli_query($con,"set names utf8");
	$sql="select * from student";
	$result=mysqli_query($con,$sql); //执行查询语句后，返回结果集，result是一个数组
	
	//用mysqli_fetch_assoc方法
	// if (mysqli_num_rows($result) > 0) 
	// 	{
	//     while($row = mysqli_fetch_assoc($result)) {
	//         echo "id: " . $row["id"]. "姓名: " . $row["name"]. "性别： " . $row["sex"]. "分数： ".$row["score"]."<br>";
	// 	}
	// } else {
	//     echo "0 结果";
	// }
	// mysqli_free_result($result);
	// mysqli_close($con);

	//用mysqli_fetch_row方法
	// if(mysqli_num_rows($result)>0)
	// {
	// 	while($row=mysqli_fetch_row($result))
	// 	{
	// 		echo "id: " . $row[0]. "姓名: " . $row[1]. "性别： " . $row[2]. "分数： ".$row[3]."<br>";
	// 	}
	// }
	// mysqli_free_result($result);
	// mysqli_close($con);

	//mysqli_fetch_array方法，是assoc方法和row方法的集合，用$row["name"]和$row[0]都可以

	//用mysqli_fetch_object方法
	// if (mysqli_num_rows($result) > 0)
	// {
	// while($row = mysqli_fetch_object($result))
	// 	{
	//     	echo "id:".$row->id." 姓名： " . $row->name." 性别： ".$row->sex." 分数：".$row->score."<br>";
	// 	}
	// } 
	// mysqli_free_result($result);
	// mysqli_close($con);

	//mysqli_num_rows方法，获取结果集中行的数目
	// $a=mysqli_num_rows($result);
	// echo $a;

	//mysqli_num_fields方法，获取结果集中字段的数目
	// $a=mysqli_num_fields($result);
	// echo $a;
?>	
