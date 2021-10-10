<?php
require("Dungchung.php");
//lấy dữ liệu từ form
if(isset($_REQUEST["s1"])==false)
	echo "<p><a href='themnhomsanpham.php'> Mời nhập từ form</a></p>";
else
{
	$MaLSP = $_REQUEST["MaLSP"];
	$TenLSP = $_REQUEST["TenLSP"];  
    $HinhAnh = $_REQUEST["HinhAnh"];
    $Mota = $_REQUEST["Mota"];
    // $trangthai=0;
	// 	if(isset($_REQUEST["trangthai"]) == true)// kiểm tra trạng thái trong request
	// 		//nếu chekbox name ="trang thai " duoc check
	// 		$trangthai=1;
    $pdo_conn=KetNoiCSDL();
    $sql = "UPDATE loaisanpham SET 
				TenLSP=?, HinhAnh=?,Mota=? WHERE MaLSP=?";
	$pdo_stm = $pdo_conn->prepare($sql);
	//gán dữ liệu vào các dấu ? theo thứ tự
	$pdo_stm->bindParam(1,$TenLSP);
	$pdo_stm->bindParam(2,$HinhAnh);
	$pdo_stm->bindParam(3,$Mota);
    $pdo_stm->bindParam(4,$MaLSP);
	$ketqua = $pdo_stm->execute();//thực thi câu lệnh sql trả về true/false
	
	if($ketqua==false)
        echo "khong sửa duoc";	
	else
	header("location: /DaWeb/admin1/nhomsanpham.php");
}
	 
?>