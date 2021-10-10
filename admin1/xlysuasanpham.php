<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["s1"])==false)
	echo "<p><a href='themnguoidung.php'> Mời nhập từ form</a></p>";
else
{
	$pdo_conn=KetNoiCSDL();
	$MaSP =$_REQUEST["MaSP"];
    $MaLSP=$_REQUEST["MaLSP"];
	$TenSP   =$_REQUEST["TenSP"];
	$DonGia  =$_REQUEST["DonGia"];
    $SoLuong  =$_REQUEST["SoLuong"];
    $HinhAnh = UploadFile("sHinhanh","DaWeb/img");
		if($HinhAnh == "") //nếu không có ảnh mới thì lấy ảnh hiện tại
		{
			$HinhAnh = $_REQUEST["anhHientai1"];
		}
    $MaKH  =$_REQUEST["MaKM"];
    $Mota= $_REQUEST["Mota"];
    $SoSao = $_REQUEST["SoSao"];
	$SoDanhGia = $_REQUEST["SoDanhGia"];
	$TrangThai=0;
		if(isset($_REQUEST["TrangThai"])==false)// kiểm tra trạng thái trong request
			$TrangThai=1;
    $GhiChu=$_REQUEST["GhiChu"];
	//thêm nhân viên vào CSDL
	$sql = "UPDATE sanpham SET MaLSP=?,  TenSP=? ,DonGia=?,
				SoLuong=?, HinhAnh=?, MaKM=? ,Mota=?, SoSao =?,SoDanhGia=?,TrangThai=?,GhiChu=? WHERE MaSP=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$MaLSP);
	$pdo_stm->bindParam(2,$TenSP);
	$pdo_stm->bindParam(3,$DonGia);
	$pdo_stm->bindParam(4,$SoLuong);
	$pdo_stm->bindParam(5,$HinhAnh);
	$pdo_stm->bindParam(6,$MaKH);
	$pdo_stm->bindParam(7,$Mota);
	$pdo_stm->bindParam(8,$SoSao);
	$pdo_stm->bindParam(9,$SoDanhGia);
	$pdo_stm->bindParam(10,$TrangThai);
	$pdo_stm->bindParam(11,$GhiChu);
    $pdo_stm->bindParam(12,$MaSP);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua==true)
		header("location: /DaWeb/admin1/sanpham.php");
	else
		echo "khong sửa duoc";	
}
	 
?>