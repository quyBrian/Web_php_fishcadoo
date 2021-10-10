<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["MaLSP"])==false)
	echo "<p>CHƯA CÓ manhom</p>";
else
{
    $pdo_conn=KetNoiCSDL();
	$MaLSP = $_REQUEST["MaLSP"]; 
	//xóa nhân viên từ CSDL
	$sql = "DELETE FROM loaisanpham WHERE MaLSP=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$MaLSP);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
		header("location: /DaWeb/admin1/nhomsanpham.php");
	else
		echo "khong xóa duoc";	
} 
?>