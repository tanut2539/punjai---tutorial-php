<?php
		@session_start();
		include '../connect.php';
		$donate_sql = "SELECT *FROM tab_donate ";
		$donate_query = mysql_query($donate_sql);
?>
<!Doctype html>
<html >
<head>
	<!--- Meta & Viewport --->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--- Title --->
	<title>หน้าจัดการดูแลระบบ</title>
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
	
	<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                
					
			<?php 
				  include 'login.php';
				  if(isset($_SESSION["admin_user"]) == "") // เช็คว่าหากเป็นค่าว่างให้ทำการล็อคอิน
				  {
			?>
			    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<h3 class="section-heading">Login เข้าสู่ระบบ</h3>

					<form name="adminLogin" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" />
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<input name="username" type="text" class="form-control" placeholder="Username"  required>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<input name="password" type="password" class="form-control" placeholder="Password"  required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<button name="submit" type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
					</form>
				</div>
			 <?php }
				   else
				   {
			?>
			
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
			
			<h2 class="section-heading">รายชื่อผู้บริจาค</h2>

			<div class="table-responsive">
				<table class="table table-bordered">
					<thead> 
						<tr> 
							<th>ชื่อ - นามสกุล</th>
							<th>อีเมลล์</th>
							<th>เบอร์โทรสัพท์</th>
							<th>ประเภทบริจาค</th>
							<th>สถานะ</th>
							<th>ตรวจสอบ</th>
						</tr> 
					</thead>
					<tbody>
					<?php while($donate_result = mysql_fetch_array($donate_query)){ ?>
						<tr>
							<th scope="row">
								<?php echo $donate_result["name"];?>
							</th>
							<th>
								<?php echo $donate_result["email"];?>
							</th>
							<th>
								<?php echo $donate_result["phone"];?>
							</th>
							<th>
								<?php echo $donate_result["details"];?>
							</th>
							<th>
								<?php if($donate_result["status"] == 0){ echo 'ยังไม่ตรวจสอบ';}else{echo 'ตรวจสอบแล้ว';}; ?>
							</th>
							<th>
								<a href="check-<?php echo $donate_result["donate_id"];?>.php" class="btn btn-default">ตรวจสอบ</a>
							</th>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>	
				<a href="logout.php" class="btn btn-success">ออกจากระบบ</a>
			<?php } ?>
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