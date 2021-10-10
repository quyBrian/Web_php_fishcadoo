<?php
//nếu chưa có biến $_SESSION["logined"] thì cho như chưa đăng nhập
if(isset($_SESSION["logined"])==false || $_SESSION["logined"]="")
{
    header("location: /DaWeb/admin1/loginadmin.php");
?>
	<h3 style="color:red"> BẠN CHƯA ĐĂNG NHẬP</h3>
    
<?php
	die("<h2>Kết thúc</h2>");
}
?>