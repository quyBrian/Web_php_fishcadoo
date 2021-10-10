<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán hóa đơn</title>
</head>
<body>
    <?php
        session_start();
        require("Dungchung.php");
        // lấy thông tin từ form và chèn hóa đơn mới
        
        if(isset($_REQUEST["dathang"]) == false)
        {
            die("Lỗi submit form!");
        }
		$nguoidung = $_REQUEST["MaND"];
        $nguoinhan = $_REQUEST["NguoiNhan"];
        $sdt = $_REQUEST["SDT"];
		$diachi = $_REQUEST["DiaChi"];
		$phuongthuctt=$_REQUEST["PhuongThucTT"];
        $TongTien=$_REQUEST["TongTien"];
		
        $pdo_conn = KetNoiCSDL();
        $strSQL = "INSERT INTO hoadon( MaND, NgayLap, NguoiNhan, SDT, DiaChi,PhuongThucTT,TongTien) VALUES (?,NULL,?,?,?,?,?)";
        $pdo_stm = $pdo_conn->prepare($strSQL);
        $pdo_stm->bindParam(1, $nguoidung);
        $pdo_stm->bindParam(2,$nguoinhan);
        $pdo_stm->bindParam(3,$sdt);
		$pdo_stm->bindParam(4,$diachi);
		$pdo_stm->bindParam(5,$phuongthuctt);
        $pdo_stm->bindParam(6,$TongTien);
		
        $ketqua = $pdo_stm->execute();
        if($ketqua == false)
        {
            die("<p>Lỗi thêm hóa đơn!</p>");
        }
        //lấy mã hóa đơn tự động sinh từ lệnh insert trên
        $mahd = $pdo_conn->lastInsertId();
        echo("<p>MÃ HÓA ĐƠN: $mahd</p>");
        //duyệt giỏ hàng và lưu các sản phẩm vào chi tiết hóa đơn gắn với mahd mới
        $ok = TRUE;
        foreach($_SESSION["cart"] as $id=>$soluong)
        {
            $giasp = layGiaSP($id); //kết nối csdl lấy giá của sản phẩm từ books
            $strSQL = "INSERT INTO chitiethoadon VALUES (?,?,?,?)";
            $pdo_stm = $pdo_conn->prepare($strSQL);
            $pdo_stm->bindParam(1,$mahd);
            $pdo_stm->bindParam(2,$id);
            $pdo_stm->bindParam(3,$soluong);
            $pdo_stm->bindParam(4,$giasp);
            $ketqua = $pdo_stm->execute();
            if($ketqua == false)
            {
                $ok = false;
                die("<p>Lỗi thêm chi tiết hóa đơn!</p>");
            }
        }
        if($ok)
        {
            echo("<h3>CẢM ƠN BẠN ĐÃ MUA HÀNG, CHÚNG TÔI SẼ LIÊN HỆ SỚM NHẤT !!!</h3>");
        }
    ?>
</body>
</html>