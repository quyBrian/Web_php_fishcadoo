<?php
        session_start();
        $TaiKhoan = $_REQUEST["TaiKhoan"];
        $MatKhau = $_REQUEST["MatKhau"];
        require("DungChung.php");
        $conn = KetnoiCSDL();
        //thực thi câu lệnh sql
        $sql = "SELECT * FROM nguoidung WHERE TaiKhoan= ? AND MatKhau = md5(?) AND MaQuyen=1 ";
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
            $_SESSION["MaND"]=$row["MaND"];
            $_SESSION["Ho"] = $row["Ho"]; //lấy giá trị cột username
            $_SESSION["Ten"] = $row["Ten"];  //lấy giá trị cột hoten
            
            header("location: /DaWeb/admin1/admin.php");
           
        }
            
        else
        {
            $_SESSION["logined"] = "";
            header("location: /DaWeb/admin1/loginadmin.php");
        }
    ?>