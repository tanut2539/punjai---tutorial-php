<!Doctype html>
<html >
<head>
	<!--- Meta & Viewport --->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--- Title --->
	<title>ปัญใจสร้างบุญ - สมทบทุนเด็กกำพร้าในจังหวัดเชียงราย </title>
	<!--- CDN Fonts --->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--- Link Stylesheet -->
	<link rel="stylesheet" href="themes/css/bootstrap.min.css">
    <link href="themes/css/project.css" rel="stylesheet">
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
                <a class="navbar-brand" href="index.php">ปัญใจสร้างบุญ</a>
            </div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="about.php">เกี่ยวกับองค์กร</a>
                    </li>
                    <li>
                        <a href="contact.php">ติดต่อบริจาค</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			
		</div>
	 <!--- .div -->
	 </nav> 
	<!--- .nav -->
	
	<!-- Page Header -->
    <header class="intro-header" style="background-image: url('themes/images/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>ปัญใจสร้างบุญ</h1>
                        <hr class="small">
                        <span class="subheading">ทุกการบริจาคของคุณจะส่งไปถึง บ้านเด็กกำพร้า จังหวัด เชียงราย</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				
					<span>การเดินทางครั้งต่อไป 20 มิถุนายน 2559 บ้านเด็กกำพร้า จังหวัดเชียงราย เวลา 09:00 น.</span>
				
                    <h2 class="section-heading">ยอดเงินบริจาค</h2>
					
					<?php include 'connect.php' ?>
					<?php $result = mysql_query("SELECT SUM(money) FROM tab_donate;");?>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="10000" aria-valuemin="0" aria-valuemax="100000" style="width: <?php echo mysql_result($result, 0)/1000; ?>%;font-size: 18px;">
							<?php echo mysql_result($result, 0); ?> บาท
						</div>
					</div>
					
					<p style="color:red;">ยอดเงินบริจาคปัจจุบัน <?php echo mysql_result($result, 0); ?> บาท จาก <?php echo '100,000'; ?> บาท<br>**ยอดเงินบริจาคทั้งหมดจะไม่มีการหักค่าภาษีใดใด</p>
					
					<hr>
					
					<h2 class="section-heading">จากใจผู้บริจาค</h2>
					
					<center><img class="img-responsive" src="themes/images/post-sample-image.jpg"></center>
					
					<p>คุณ อรอริณ จริญาณิณ :&nbsp ค่ะตั้งแต่รู้ว่ามีองค์กรช่วยเหลือเด็กกำพร้า ปัญใจสร้างบุญ ดิฉันก็ได้ร่วมบริจาคและได้เดินทางไปยังสถานที่จริงพร้อมกับ คุณ บุญฑริกา ศุลกะนุเคราะห์ และ คุณ สุพิญญา ดาวกาษ ซึ่งดิฉันได้เห็นเด็กๆเหล่านั้น ต่างน่าสงสาร ดิฉันจึงช่วยเหลือและบริจาคสิ่งของให้แก่เด็กเหล่านั้น ตอนนี้ก็ทำมาเป็นระยะเวลา 3 ปีแล้วค่ะ</p>
					
					
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
    <script src="themes/js/bootstrap.min.js"></script>
</body>
</html>