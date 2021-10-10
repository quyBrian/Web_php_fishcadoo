<?php
        session_start();
        $TaiKhoan = $_REQUEST["TaiKhoan"];
        $MatKhau = $_REQUEST["MatKhau"];
        require("Dungchung.php");
        $conn = KetnoiCSDL();
        //thực thi câu lệnh sql
        $sql = "SELECT * FROM nguoidung WHERE TaiKhoan= ? AND MatKhau = md5(?) ";
        $pdo_stm = $conn->prepare($sql); //gán câu lệnh sql cho đối tượng PDOStatement
        $pdo_stm->bindParam(1,$TaiKhoan);
        $pdo_stm->bindParam(2,$MatKhau);
        $ketqua = $pdo_stm->execute(); //thực thi sql, trả về TRUE/FALSE;
        if($ketqua == FALSE)
        {
            die("<h3>Lỗi sql</h3>");
        } 
        //kiểm tra số kết quả trả về > 0 là thành công
        if($pdo_stm->rowCount() > 0) //thành công
        {
            //lấy bản ghi kết quả và lấy các cột lưu vào biến Session
            $row = $pdo_stm->fetch();
            $_SESSION["logined"] = "OK"; //thiết lập trạng thái login thành công
            $_SESSION["TaiKhoan"] = $row["TaiKhoan"];
            $mand=$row["MaND"];
            $_SESSION["Ho"] = $row["Ho"]; //lấy giá trị cột username
            $_SESSION["Ten"] = $row["Ten"];  //lấy giá trị cột hoten
            
            // header("location: /DaWeb/eshopper/index.php");
            echo "<h3> ĐĂNG NHẬP THÀNH CÔNG (Mã Người dùng của bạn là : $mand)</h3>";
	        echo "<a href=\"index.php\"> Vào Trang Nhóm sản phẩm</a>";
        }
        else
        {
            $_SESSION["logined"] = "";
            header("location: /DaWeb/eshopper/login.php");
        }
    ?>