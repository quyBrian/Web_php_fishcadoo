
<?php
	require("Dungchung.php");
	//lấy thông tin từ form
		if(isset($_REQUEST["n1"])==false)
		{
			die("chưa submit form");
		}
		//$id= $_REQUEST["id"];// lấy id từ form
		$Ho=$_REQUEST["Ho"];
		$Ten=$_REQUEST["Ten"];
		$GioiTinh =0;
		if(isset($_REQUEST["rGioitinh"])==true)
		{//nếu 1 trong 2 radio được chọn
			$GioiTinh = $_REQUEST["rGioitinh"];
		}
		$SDT = $_REQUEST["SDT"];
		$Email = $_REQUEST["Email"];
		$DiaChi = $_REQUEST["DiaChi"];
		$HinhAnh = UploadFile("fHinhanh","HinhAnh");
		$TaiKhoan=$_REQUEST["TaiKhoan"];
		$MatKhau=$_REQUEST["MatKhau"];
		$MaQuyen=$_REQUEST["MaQuyen"];
		$TrangThai=0;
			if(isset($_REQUEST["TrangThai"])==true)
			{
				$TrangThai=1;
			}
		$pdo_conn= KetNoiCSDL();
		$sql = "INSERT INTO nguoidung VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?)";
		//Sql "update "
		$pdo_stm = $pdo_conn->prepare($sql);
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
		//$pdo_stm->bindParam(4,$id);
//thuc thi truy van
		$ketqua =$pdo_stm->execute();
		if ($ketqua==false)
		{
			echo"<h3> LỖI THÊM DỮ LIỆU </h3>";
		}
		else
		{
			header("location: /DaWeb/admin1/nguoidung.php");
		}
?>