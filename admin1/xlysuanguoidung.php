<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["b1"])==false)
	echo "<p><a href='themnguoidung.php'> Mời nhập từ form</a></p>";
else
{
	$pdo_conn=KetNoiCSDL();
	$MaND =$_REQUEST["MaND"];
	$Ho   =$_REQUEST["Ho"];
	$Ten  =$_REQUEST["Ten"];
	$GioiTinh =0;
	if(isset($_REQUEST["rGioitinh"]))//nếu 1 trong 2 radio được chọn
		$GioiTinh = $_REQUEST["rGioitinh"];
    $SDT  =$_REQUEST["SDT"];
	
	//$hinhanh = $_REQUEST["tHinhanh"];
    $Email= $_REQUEST["Email"];
    $DiaChi = $_REQUEST["DiaChi"];
	$TaiKhoan = $_REQUEST["TaiKhoan"];
	$MaQuyen=$_REQUEST["MaQuyen"];
	$TrangThai=0;
		if(isset($_REQUEST["TrangThai"])==false)// kiểm tra trạng thái trong request
			$TrangThai=1;
	$HinhAnh = UploadFile("fHinhanh","img");
		if($HinhAnh == "") //nếu không có ảnh mới thì lấy ảnh hiện tại
		{
			$HinhAnh = $_REQUEST["anhHientai"];
		}
	//thêm nhân viên vào CSDL
	$sql = "UPDATE nguoidung SET Ho=?,  Ten=?,GioiTinh=?,
				SDT=?,Email=?, DiaChi=? ,HinhAnh=?, TaiKhoan=?, MatKhau =?,MaQuyen=?,TrangThai=? WHERE MaND=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$Ho);
	$pdo_stm->bindParam(2,$Ten);
	$pdo_stm->bindParam(3,$GioiTinh);
	$pdo_stm->bindParam(4,$SDT);
	$pdo_stm->bindParam(5,$Email);
	$pdo_stm->bindParam(6,$DiaChi);
	$pdo_stm->bindParam(7,$HinhAnh);
	$pdo_stm->bindParam(8,$TaiKhoan);
	$pdo_stm->bindParam(9,$MatKhau);
	$pdo_stm->bindParam(10,$MaQuyen);
	$pdo_stm->bindParam(11,$TrangThai);
	$pdo_stm->bindParam(12,$MaND);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua==true)
		header("location: /DaWeb/admin1/nguoidung.php");
	else
		echo "khong sửa duoc";	
}
	 
?>