<?php
	$array1=["color"=>"blue","name"=>"pen"];
	$array2=[1,2,3,4];
	$array3=[1=>5,2=>6,3=>7,4,5];
	$array4=["color"=>array("红色","蓝色","绿色"),"number"=>array(1,2,3)];

	print_r($array1);
	echo "<br>";
	echo count($array1);
	echo "<br>";
	print_r($array2);
	echo "<br>";
	print_r($array3);
	echo "<br>";
	echo $array4["color"][0];
	echo "<br>";
	print_r($array4);
?>