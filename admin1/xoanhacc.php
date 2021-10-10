<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["id"])==false)
	echo "<p>CHƯA CÓ ID</p>";
else
{
    $pdo_conn=KetNoiCSDL();
	$id = $_REQUEST["id_ncc"]; 
	//xóa nhân viên từ CSDL
	$sql = "DELETE FROM tbnhacungcap WHERE id_ncc=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$id);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua)
        header("location: /DaWeb/admin1/nhacungcap.php");
	else
		echo "khong xóa duoc";	
} 
?>