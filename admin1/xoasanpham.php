<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["MaSP"])==false)
	echo "<p>CHƯA CÓ Mã</p>";
else
{
    $pdo_conn=KetNoiCSDL();
	$MaSP = $_REQUEST["MaSP"]; 
	//xóa nhân viên từ CSDL
	$sql = "DELETE FROM sanpham WHERE MaSP=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$MaSP);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		header("location: /DaWeb/admin1/sanpham.php");
	else
		echo "khong xóa duoc";	
} 
?>