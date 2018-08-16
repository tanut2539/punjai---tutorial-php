<?php
	// connect into database
	$host = "localhost";
	$user = "root";
	// No password use XAMPP
	$db = "project";
	$connect = mysql_connect($host,$user);
	if(!$connect)
	{
		echo "<h3>ไม่สามารถเชื่อมต่อฐานข้อมูลได้</h3>";
		exit();
	}
	mysql_db_query($db,'SET NAMES UTF8');
?>