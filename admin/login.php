<?php 
	@session_start();
	if(isset($_POST['submit']))
	{
		
		include '../connect.php';
		$admin_user = $_POST['username'];
		$admin_pw = $_POST['password'];
		$sql = "SELECT *FROM tab_admin WHERE ((admin_user = '$admin_user') and (admin_password = '$admin_pw')) ";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		$_SESSION["admin_user"] = $result["admin_user"]; // เก็บ ชื่อผู้ใช้งาน
	}
?>