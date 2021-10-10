<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> fishcodoo.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img style="width:200px; height: 70px;" src="images/home/logofish1.jpg" alt="" /></a>
						</div>
						<!-- <div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Tài Khoản</a></li>
								<!-- <li><a href=""><i class="fa fa-star"></i> Admin</a></li> -->
								<!-- <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li ><a href="cart.php"><i class="fa fa-shopping-cart"></i>

								<div id="cart">
								<?php
									session_start();
									//kiểm tra xem đã có sản phẩm trong giỏ hàng chưa? số lượng là bao nhiêu?
									$count = 0;
									if(isset($_SESSION["cart"]) == true) //nếu đã có biến cart trong SESSION
									{
										$count = count($_SESSION["cart"]); //đếm số phần tử của mảng cart trong SESSION
									}
									if($count == 0)
									{
										echo "0";
									}
									else
									{
										echo "$count";
									}
								?>
							</div>
							
							
							
							</a></li>
								<li><a href="logoutuser.php"><i class="fa fa-lock"></i> Đăng Xuất</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="#">Danh Mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="koi.php">Cá Koi</a></li>
                                        <li><a href="ranchu.php">Cá RanChu</a></li>
										<li><a href="rong.php">Cá Rồng</a></li> 
										<li><a href="lahan.php">Cá La Hán </a></li> 
										<li><a href="thuysinh.php">Cây Thủy Sinh</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="cart.php">Giỏ hàng</a></li>
										<li><a href="loginuser.php">Login</a></li>
                                    </ul>
                                </li> 
								<!-- <li><a href="404.html">404</a></li> -->
								<!-- <li><a href="contact-us.php">Liên hệ</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					
						<a href="TimKiem.php" style="color:coral;"> Tìm Kiếm </a>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->