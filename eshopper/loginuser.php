<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php
		include("inc/header.php");
	?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng Nhập</h2>
						<form name="form1" method="post" action="Xlyloginuser.php">
							<input type="text" placeholder="Ueser" name="TaiKhoan" id="TaiKhoan" >
							<input type="password" placeholder="Password" name="MatKhau" id="MatKhau">
							<!-- <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span> -->
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Tạo Tài Khoản</h2>
						<form name="f1" id="f1" method="post" action="Xlytaotaikhoan.php" enctype="multipart/form-data">
							<input type="text" placeholder="Họ" name="Ho" id="Ho">
							<input type="text" placeholder="Tên" name="Ten" id="Ten">
							<!-- <input type="text" placeholder="Giới Tính"/> -->
							<input type="text" placeholder="SDT" name="SDT" id="SDT">
							<input type="email" placeholder="Email " name="Email" id="Email">
							<input type="text" placeholder="Địa chỉ" name="DiaChi" id="DiaChi">
							<a style="font-size: 13; color:grey;">Hình ảnh: </a>
							<input type="file" placeholder="Hình ảnh" name="fHinhanh" id="fHinhanh">
							<input type="text" placeholder="Tài Khoản" name="TaiKhoan" id="TaiKhoan">
							<input type="password" placeholder="Mật Khẩu" name="MatKhau" id="MatKhau">
							<!-- <input type="text" placeholder="Trạng thái"/> -->
							<button type="submit" class="btn btn-default" name="n1" id="n1">Tạo</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php
		include("inc/footer.php");
	?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>