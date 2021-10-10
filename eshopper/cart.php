<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="style_cart.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<!-- header -->
    <?php
			// session_start();
            include("inc/header.php");
    ?>
    <!-- close header -->
    <!-- <h1>GIỎ HÀNG CỦA BẠN</h1> -->
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			 <div class="table-responsive cart_info">
			 <?php
				// session_start();
				require("Dungchung.php");
				//đếm số đầu sản phẩm trong giỏ hàng
				$count = 0;
				if(isset($_SESSION["cart"]))
				{
					$count = count($_SESSION["cart"]); //đếm số phần tử của mảng cart
				}
				if($count == 0)
				{
			?>
			<div class='pro'>
				<p align='center'>Ban khong co mon hang nao trong gio hang!<br/>
					<a href="index.php">Buy Ebook</a>
				</p>
			</div>
			<?php
				}
				else //nếu giỏ hàng có sản phẩm
				{
					//tạo chuỗi chứa danh sách các id của sản phẩm từ giỏ hàng (để SELECT)
					$arr = array_keys($_SESSION["cart"]); //lấy ra ds các key của mảng cart
					$str = implode(",", $arr); //tạo chuỗi chứa các phần tử của mảng ngăn cách bởi dấu phẩy
					//truy vấn CSDL hiển thị các sản phẩm từ giỏ hàng
					$pdo_conn = KetNoiCSDL();
					//SELECT các sản phẩm có id nằm trong danh sách str (id sản phẩm trong giỏ hàng)
					$strSQL = "SELECT * FROM sanpham WHERE MaSP in ($str) ";
					$pdo_smt = $pdo_conn->prepare($strSQL);
					$ketqua = $pdo_smt->execute();
					if($ketqua == FALSE)
					{
						die("<h3>Lỗi truy vấn CSDL</h3>");
					}
					//hiển thị các sản phẩm
					$total = 0; //tổng tiền của tất cả sản phẩm trong giỏ hàng
					$rows = $pdo_smt->fetchAll();
			?>
				<form name="f1" id="f1" action="updatecart.php" method="post">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<th class="image">Item</th>
								<th class="description">Tên sản phẩm</th>
								<th class="price">Giá bán </th>
								<th class="quantity">Số lượng</th>
								<th class="total">Giá tiền sản phẩm </th>
							</tr>
						</thead>
						<?php
						foreach($rows as $row)
						{
							$id = $row["MaSP"];
							$tensp = $row["TenSP"];
							$HinhAnh = ($row["HinhAnh"]!="") ? $row["HinhAnh"] : "noimage.jpg";
							$price = $row["DonGia"];
							$soluong = $_SESSION['cart'][$id];
							$total+=$soluong*$price;
						?>   
						<tbody>
							<tr>
								<td ><img src="img/<?=$HinhAnh?>" width="80"></td>
								<th><?=$tensp?></th>
								<td><?=number_format($price,2);?> VNĐ</td>
								<td><input type="text" name="qty[<?=$id?>]" size="5" value="<?=$soluong?>"><a href="delcart.php?item=<?=$id?>"> Xóa Sản phẩm </a></td>
								<td><?=number_format($soluong*$price,2)?> VNĐ</td>
							</tr>
						</tbody> 
						
						<?php
							}//đóng foreach
						?>
						
					</table>
					<div class="pro" style="text-align:right; font-weight:bold">
							Tong tien cho cac mon hang: 
							<span style="color:red"> <?=number_format($total,3)?> VND</span>
						</div>
						<div class="pro" style="text-align:right;">
						<input type="submit" name="capnhat" value="Cap Nhat Gio Hang">
						</div>
						<div class="pro" style="text-align:right; font-weight:bold">
							<a href='index.php'>Mua Hàng Tiếp</a> - 
							<a href='delcart.php?item=0'>Xoá Bỏ Giỏ Hàng</a>
						</div>
            </form>

				
        
        
            <!-- <div>
                <h3>THANH TOÁN GIỎ HÀNG</h3>
                <form name="f2" id="f1" action="checkout.php" method="POST">
                    
					<p>
                        <span style="width: 110px; display: inline-block;">nguoi dung </span>
                        <input type="text" name="MaND" id="MaND">
                    </p>
					<p>
                        <span style="width: 110px; display: inline-block;">Nguoi Nhan: </span>
                        <input type="text" name="NguoiNhan" id="NguoiNhan">
                    </p>
					<p>
                        <span style="width: 110px; display: inline-block;">SDT: </span>
                        <input type="text" name="SDT" id="SDT">
                    </p>
					<p>
                        <span style="width: 110px; display: inline-block;">Dia Chi: </span>
                        <input type="text" name="DiaChi" id="DiaChi">
                    </p>
                    <p>
                        <span style="width: 110px; display: inline-block;">Phuong Thuc Thanh Toan: </span>
                        <input type="text" name="PhuongThucTT" id="PhuongThucTT">
                    </p>
                    
                    
                    <p>
                        <input type="submit" name="dathang" id="dathang" value="ĐỒNG Ý">
                    </p>
                </form>
            </div> -->
    <!-- ?php
        } //đóng else
    ?> -->

			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>THANH TOÁN GIỎ HÀNG</h3>
			</div>
			<div class="row">

				<div class="col-sm-6">
					<div class="total_area">
					<form name="f2" id="f1" action="checkout.php?TongTien=<?=number_format($total,3)?>" method="POST">
						<ul>
							<input type="text" style="width: 500px;" placeholder="Mã người dùng" name="MaND" id="MaND" >
							<input type="text" style="width: 500px;" placeholder="Người nhận"  name="NguoiNhan" id="NguoiNhan">
							<input type="text" style="width: 500px;" placeholder="SDT" name="SDT" id="SDT">
							<input type="text" style="width: 500px;" placeholder="Địa chỉ " name="DiaChi" id="DiaChi" >
							<input type="text" style="width: 500px;" placeholder="Phương thức thanh toán " name="PhuongThucTT" id="PhuongThucTT">
						</ul>
						<input type="submit" style="background-color:#FE980F; margin-left:40px;" name="dathang" id="dathang" value="ĐỒNG Ý">
					</form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	<?php
        } //đóng else
    ?>

</body>
</html>