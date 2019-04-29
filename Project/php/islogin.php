<?php
	if(!isset($_SESSION["role"]))
	{
		echo "<script>alert('未登录！');location.href='login.php'</script>";
	}
?>