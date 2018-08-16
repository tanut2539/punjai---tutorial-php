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
	<script language="javascript">
function chksatatus(sx){
if (sx==0){
    document.getElementById('items').style.display='none';
    document.getElementById('money').style.display='none';

}else if(sx=="บริจาคสิ่งของ"){
    document.getElementById('items').style.display='block';
	document.getElementById('money').style.display='none';
}
else if(sx=="บริจาคเงิน"){
	document.getElementById('money').style.display='block';
	document.getElementById('items').style.display='none';
}
else{
	
	document.getElementById('items').style.display='block';
	document.getElementById('money').style.display='block';
}
}
</script>
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
    <header class="intro-header" style="background-image: url('themes/images/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>ติดต่อบริจาค</h1>
                        <hr class="small">
                        <span class="subheading">ทุกการบริจาคของคุณจะส่งไปถึง บ้านเด็กกำพร้า จังหวัด เชียงราย</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p><center style="color:red;">โปรดกรอกข้อมูล ชื่อ - นามสกุล , อีเมลล์ติดต่อกลับ , เบอร์โทรศัพท์ที่ติด ให้ครบถ้วน <br>ทางทีมงานจะติดต่อกลับไปภายใน 24 ชั่วโมง</center></p>
				<?php include 'save-donate.php';?>
                <form name="sentMessage" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" />
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input name="name" type="text" class="form-control" placeholder="ชื่อ - นามสกุล"  required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input name="email" type="email" class="form-control" placeholder="อีเมลล์ติดต่อกลับ"  required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input name="phone" type="text" class="form-control" placeholder="เบอร์โทรศัพท์" maxlength="10"  required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <select onChange="chksatatus(this.value);" name="select" class="form-control" style="font-size: 1em;height: 50px;">
								<option class="hide" value="0">เลือกการบริจาค</option>
								<option value="บริจาคสิ่งของ">บริจาคสิ่งของ</option>
								<option value="บริจาคเงิน">บริจาคเงิน</option>
								<option value="บริจาคทั้งเงินและสิ่งของ">บริจาคทั้งเงินและสิ่งของ</option>
							</select>
                        </div>
                    </div>
					
					<div class="row control-group" style="display:none;" id="items">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							<textarea rows="5" class="form-control" placeholder="ระบุสิ่งของที่จะนำมาบริจาค" name="items"></textarea>
						</div>
					</div>
					
					<div class="row control-group" style="display:none;" id="money">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
							<input type="number" class="form-control" placeholder="ใส่จำนวนเงิน" min="0" max="1000000" name="money">
						</div>
					</div>
					
                    <div class="row">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <button name="submit" type="submit" class="btn btn-default">ส่งข้อมูล</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
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