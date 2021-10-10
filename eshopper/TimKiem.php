<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | FishCadoo</title>
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
	<script language="javascript" src="js/jquery.min.js"></script>
	<script language="javascript">
	$(document).ready(function(e) {
		//lập trình sử kiện keyup chung cho input
		$("input").keyup(function(e) {
			tk = $("#tukhoa").val();//lấy giá trị của input tukhoa
			//sử dụng $.post(url, {bien:giatri}, function(){} );
			$.post("Ketqua.php",{tukhoa:tk},
			//responseData: kết quả echo về từ Ketqua.php; status là trạng thái thực hiện
				function (responseData, status){
					if(status=="success")
						$("#Ketqua").html(responseData);
					else	
						$("#Ketqua").html("<h3>CÓ LỖI</h3>");	
					} 
			);
		});
	});
</script>
</head><!--/head-->

<body>
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
								<!-- ?php
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
								?> -->
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
					
					<form name="f1" id="f1">
						Từ khóa: <input type="text" name="tukhoa" id="tukhoa">
					</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<?php
		include("inc/slider.php");
	?>

	<!-- slider -->
    
    <!-- close slider -->
	<?php
		require("Dungchung.php");
		$conn = KetNoiCSDL();//gọi hàm kết nối CSDL và lưu lại đối tượng PDO 
	?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>

						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php
                            
                            $sql = "SELECT * FROM loaisanpham";
                            $pdo_stm = $conn->query($sql);//thực hiện lệnh sql trả về PDOStatement
                            if($pdo_stm==NULL)
                                die("<H3>LỖI SQL</H3>");
                            $n =$pdo_stm->rowCount();//lấy số bản ghi kết quả
                            // echo "<h3> số kết quả nhóm sản phẩm là $n </h3>";
                            //lấy mảng chứa các dòng và cột từ kết quả SELECT
                            $rows  = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
                            //PDO::FETCH_BOTH truy cập cả theo tên cột hoặc số thứ tự cột
                            //print_r($rows);//hiển thị cấu trúc mảng
						?>

						<?php
						foreach($rows as $row)
						{
						?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"></span>
											<?=$row["TenLSP"]?>
										</a>
									</h4>
								</div>
							</div>
						<?php
						}
						?>

						</div><!--/category-products-->
	
						<div class="shipping text-center"><!--shipping-->
							<img src="images/ca.jpg" alt="" />
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img style="width:400px; height:700px;" src="images/l3.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
				<div class="left-sidebar">
					<h2>Sản phẩm đồng giá</h2>
				</div>
				<?php
					//require("DungChung.php");
					$conn = KetNoiCSDL();
					$tukhoa="";
					if(isset($_REQUEST["tukhoa"]))
						$tukhoa = $_REQUEST["tukhoa"];
						
					$sql = "SELECT * FROM sanpham";
					if($tukhoa!="")
						$sql .= "  WHERE TenSP LIKE '%$tukhoa%'";
					$pdo_stm = $conn->query($sql);//thực hiện lệnh sql trả về PDOStatement
					if($pdo_stm==NULL)
						die("<H3>LỖI SQL</H3>");
					$n =$pdo_stm->rowCount();//lấy số bản ghi kết quả
					echo "<h3>Có $n sản phẩm phù hợp </h3>";
					//lấy mảng chứa các dòng và cột từ kết quả SELECT
					$rows  = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
				?>
				<?php
					foreach($rows as $row)//lặp từng dòng trong mảng $rows lưu vào mảng 1 chiều $row	
					{
						$HinhAnh = ($row["HinhAnh"]!="") ? $row["HinhAnh"] : "noimage.jpg";
					?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											
											<img style="width: 210px;height: 210px ;" src="img/<?=$HinhAnh?>" />
											
											<h2><?$row["MaSP"]?></h2>
											<h2><a href="product-details.php?MaSP=<?=$row["MaSP"]?>"><?=$row["TenSP"]?></a></h2>
											<h5><?=$row["DonGia"]?> VND</h5>
											<p style="color:red">Sản phẩm độc quyền: FishCadoo</p>
											<a href="addcart.php?MaSP=<?=$row["MaSP"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a> 
											


										
										</div>
										
								</div>
								
							</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>
	
	<!--Footer-->
    <?php
        include("inc/footer.php");
    ?>
	<!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>