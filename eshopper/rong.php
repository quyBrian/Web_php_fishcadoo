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
</head><!--/head-->

<body>
	<!-- header -->
    <?php
            include("inc/header.php");
    ?>
    <!-- close header -->
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
					
					</div>
				</div>
				
				

				
				<div class="col-sm-9 padding-right">
				<div class="left-sidebar">
					<h2 style="color: #FF0000;">Cá Rồng</h2>
				</div>
				<?php
					$sql = "SELECT * FROM sanpham WHERE MaLSP=19";
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
											<p>Sản phẩm độc quyền: FishCadoo</p>
											<a href="addcart.php?MaSP=<?=$row["MaSP"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a> 
											


										
										</div>
										
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