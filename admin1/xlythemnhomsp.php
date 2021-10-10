<?php
	require("Dungchung.php");
	//lấy thông tin từ form
		if(isset($_REQUEST["b1"])==false)
			die("chưa submit form");
		//$id= $_REQUEST["id"];// lấy id từ form
		
		$TenLSP=$_REQUEST["TenLSP"];
		$HinhAnh= $_REQUEST["HinhAnh"];
		$Mota= $_REQUEST["Mota"];
		// $trangthai=0;
		// if(isset($_REQUEST["trangthai"])==true)// kiểm tra trạng thái trong request
		// 	//nếu chekbox name ="trang thai " duoc check
		// 	$trangthai=1;
		//kết nối CSDL và thực hien lenh SQL
		$conn= KetNoiCSDL();
		$sql="INSERT INTO  loaisanpham VALUES(NULL, ?,?,?)";
		//Sql "update "
		$pdo_stm=$conn->prepare($sql);
		$pdo_stm->bindParam(1,$TenLSP);
		$pdo_stm->bindParam(2,$HinhAnh);
		$pdo_stm->bindParam(3,$Mota);
		//$pdo_stm->bindParam(4,$id);
//thuc thi truy van
		$ketqua =$pdo_stm->execute();
		if ($ketqua==false)
		{
			echo"<h3> LỖI THÊM DỮ LIỆU </h3>";
		}
		else
		{
			header("location: /DaWeb/admin1/nhomsanpham.php");
		}
?>
