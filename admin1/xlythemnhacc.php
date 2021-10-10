<?php
	require("Dungchung.php");
	//lấy thông tin từ form
		if(isset($_REQUEST["b1"])==false)
			die("chưa submit form");
		//$id= $_REQUEST["id"];// lấy id từ form
		$tenncc= $_REQUEST["tenncc"];
		$diachi=$_REQUEST["diachi"];
		$email=$_REQUEST["email"];
        $sdt=$_REQUEST["sdt"];
        $ghichu=$_REQUEST["ghichu"];
		//kết nối CSDL và thực hien lenh SQL
		$conn= KetNoiCSDL();
		$sql="INSERT INTO  tbnhacungcap VALUES(NULL,?,?,?,?,NULL,?)";
		//Sql "update "
		$pdo_stm=$conn->prepare($sql);
		$pdo_stm->bindParam(1,$tenncc);
		$pdo_stm->bindParam(2,$diachi);
		$pdo_stm->bindParam(3,$email);
        $pdo_stm->bindParam(4,$sdt);
        $pdo_stm->bindParam(5,$ghichu);
		//$pdo_stm->bindParam(4,$id);
//thuc thi truy van
		$ketqua =$pdo_stm->execute();
		if ($ketqua==false)
		{
			echo"<h3> LỖI THÊM DỮ LIỆU </h3>";
		}
		else
		{
			header("location: /DaWeb/admin1/nhacungcap.php");
		}
?>

