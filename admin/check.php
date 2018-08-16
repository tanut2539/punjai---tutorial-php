<?php
		include '../connect.php';
		$sql = "SELECT * FROM tab_donate WHERE donate_id = '".$_GET["donate-id"]."'";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		
		if(isset($_POST['submit']))
		{
			$status = $_POST['check'];
			$update = "UPDATE tab_donate SET status = $status WHERE donate_id = '".$_GET["donate-id"]."'";
			$update_query = mysql_query($update);
		}
		
		if(isset($_POST['delete']))
		{
			$delete = "DELETE FROM tab_donate WHERE donate_id = '".$_GET["donate-id"]."'";
			$delete_query = mysql_query($delete);
			header('refresh: 1;url= index.php');
			exit();
		}
		
?>

<!Doctype html>
<html >
<head>
	<!--- Meta & Viewport --->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--- Title --->
	<title>หน้าจัดการดูแลระบบ - ตรวจสอบข้อมูลบริจาค</title>
	<!--- CDN Fonts --->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--- Link Stylesheet -->
	<link rel="stylesheet" href="../themes/css/bootstrap.min.css">
    <link href="../themes/css/project.css" rel="stylesheet">
</head>

<body>
	<!--- Navigation --->
	 <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			
			<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">ปัญใจสร้างบุญ</a>
            </div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="../about.php">เกี่ยวกับองค์กร</a>
                    </li>
                    <li>
                        <a href="../contact.php">ติดต่อบริจาค</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			
		</div>
	 <!--- .div -->
	 </nav> 
	<!--- .nav -->
	
	<!-- Page Header -->
    <header class="intro-header" style="background-image: url('../themes/images/admin-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>หน้าจัดการผู้ดูแลระบบ</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<article>
        <div class="container">
            <div class="row">
				
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
				
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" />
					
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							ชื่อผู้บริจาค <input name="username" type="text" class="form-control" placeholder="<?php echo $result["name"]; ?>"  readonly/>
						</div>
					</div>
					
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							อีเมลล์ติดต่อ <input name="email" type="email" class="form-control" placeholder="<?php echo $result["email"]; ?>"  readonly/>
                        </div>
                    </div>
					
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							เบอร์โทรศัพท์ติดต่อ<input name="phone" type="text" class="form-control" placeholder="<?php echo $result["phone"]; ?>" maxlength="10"  readonly/>
                        </div>
                    </div>
					
					 <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
								ประเภทการบริจาค
							<select name="select" class="form-control" style="font-size: 1em;height: 50px;" readonly/>
								<option class="hide" value="<?php echo $result["details"]; ?>"><?php echo $result["details"]; ?></option>
							</select>
                        </div>
                    </div>
					
					<?php 
						  if($result["details"] == "บริจาคเงิน")
						  {
					?>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<div class="input-group">
									    <div class="input-group-addon">บริจาคเงิน</div>
										<input type="number" class="form-control" placeholder="<?php echo $result["money"]; ?>" min="0" max="1000000" name="money" readonly/>
										<div class="input-group-addon">บาท</div>
									</div>
								</div>
							</div>
					<?php } 
						  else if($result["details"] == "บริจาคสิ่งของ")
						  {
					?>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									บริจาคสิ่งของ <textarea rows="5" class="form-control" placeholder="<?php echo $result["items"]; ?>" name="items" readonly/></textarea>
								</div>
							</div>
					<?php }
						  else
						  {
					?>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<div class="input-group">
										<div class="input-group-addon">บริจาคเงิน</div>
										<input type="number" class="form-control" placeholder="<?php echo $result["money"]; ?>" min="0" max="1000000" name="money" readonly/>
										<div class="input-group-addon">บาท</div>
									</div>
								</div>
							</div>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									บริจาคสิ่งของ <textarea rows="5" class="form-control" placeholder="<?php echo $result["items"]; ?>" name="items" readonly/></textarea>
								</div>
							</div>
				    <?php }?>
					
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							<input name="check" type="checkbox" <?php if($result["status"] == 1){echo 'checked';}; ?> value="1"> ตรวจสอบแล้ว</input>
                        </div>
                    </div>
					
					<div class="row">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<button name="submit" type="submit" class="btn btn-success">บึนทึก</button>
							<button name="delete" type="submit" class="btn btn-danger">ลบข้อมูล</button>
							<a onclick='window.history.back()' class="btn btn-warning">ย้อนกลับ</a>
						</div>
					</div>
					</form>
					
				</div>
			
			</div>
        </div>
    </article>
	
	<hr>
	
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://www.twitter.com" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; ปัญใจสร้างบุญ 2016</p>
                </div>
            </div>
        </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../themes/js/bootstrap.min.js"></script>
</body>
</html>