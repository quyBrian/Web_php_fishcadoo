<?php
function KetNoiCSDL()
{
    try{
        $conn= new PDO("mysql:host=localhost;dbname=web2","root","");
		$conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
		// echo "<h3> KẾT NỐI CSDL THÀNH CÔNG </h3>";
    }
    catch(PDOException $ex)
    {
        echo"<h3>".$ex->getMessage()."<\h3>";
		die("<h3>Lỗi kết nối SQL<\h3>");
    }
	return $conn;
}


function UploadFile($inputName, $Folder)
{
	if($_FILES[$inputName]["error"] != 0)
	{
		return ""; //trả về rỗng là lỗi
	}
	$filename = "";
	$tmp_name = "";
	$filename = $_FILES[$inputName]["name"]; //lấy tên tệp gốc của file upload
	$tmp_name = $_FILES[$inputName]["tmp_name"];
	//kiểm tra đuôi tệp phải là jpg, png, gif
	$arr = explode(".",$filename); //tách chuỗi thành mảng các chuỗi con với dấu chấm
	$file_ext = strtolower(end($arr)); //lấy phần tử cuối chính là đuôi tệp và chuyển thành chữ thường
	$list_anh = array("jpg","png","gif","jpeg");
	if(in_array($file_ext, $list_anh) == false) //nếu đuôi tệp không có trong danh sách tệp ảnh
	{
		return "";
	}
	move_uploaded_file($tmp_name, "$Folder/$filename");
	return $filename;
}

?>