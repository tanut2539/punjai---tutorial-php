<?php  
	include 'connect.php';
	if(isset($_POST['submit']))
	{
		// object
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$details = $_POST['select'];
		$items = $_POST['items'];
		$money = $_POST['money'];
		$status = 0;
		// sql
		$sql = "INSERT INTO tab_donate (name,email,phone,details,items,money,status) VALUES ('$name','$email','$phone','$details','$items','$money','$status')";
		$query = mysql_query($sql);
		header('refresh: 2;'.$_SERVER['HTTP_REFERER']);
?>
	<p class="message">ขอขอบคุณทุกท่านที่ร่วมบริจาคสิ่งของและเงินให้แก่เด็กกรำพร้า ทางเราจะส่งรายละเอียดการติดต่อกลับไป</p>
<?php
		exit();
	}
?>
	