<?PHP
session_start();
require("kiemtradangnhap.php");
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:18:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
 <!-- sidebar part here -->
 <?php
    include("inc/sidebar_left.php");
 ?>
<!-- sidebar part end -->
 <!--/ sidebar  -->


<section class="main_content dashboard_part">
        <!-- menu  -->
    <?php
        include("inc/header_main_content.php");
    ?>
    <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30" style="overflow-x: scroll;">
            <div class="row justify-content-center">
                <div class="col-12" style="overflow: croll;">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Danh sách người dùng</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="add_button ml-10">
                                    <a href="themnguoidung.php" class="btn_1">Thêm người dùng</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            require("DungChung.php");
                            $conn = KetnoiCSDL();//gọi hàm kết nối CSDL và lưu lại đối tượng PDO 
                            $sql = "SELECT * FROM nguoidung";
                            $pdo_stm = $conn->query($sql);//thực hiện lệnh sql trả về PDOStatement
                            if($pdo_stm==NULL)
                                die("<H3>LỖI SQL</H3>");
                            $n =$pdo_stm->rowCount();//lấy số bản ghi kết quả
                            // echo "<h3> số kết quả nhóm sản phẩm là $n </h3>";
                            //lấy mảng chứa các dòng và cột từ kết quả SELECT
                            $rows  = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
                            //PDO::FETCH_BOTH truy cập cả theo tên cột hoặc số thứ tự cột
                            //print_r($rows);//hiển thị cấu trúc mảng
                        ?>
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="moi" style="overflow: croll;">
                                <thead >
                                    <tr>
                                        <th scope="col">MaND</th>
                                        <th scope="col">Họ</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Sdt</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tài Khoản</th>
                                        <th scope="col">Mã quyền</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Xử lý</th>
                                    </tr>
                                </thead>
                                <?php
                                    foreach($rows as $row)//lặp từng dòng trong mảng $rows lưu vào mảng 1 chiều $row
                                    {//hiển thị từng dòng
                                        $HinhAnh = ($row["HinhAnh"]!="") ? $row["HinhAnh"] : "chung.jpg";
                                ?>
                                <tbody>
                                    <tr>
                                        <td > <?=$row["MaND"]?></td>
                                        <td > <?=$row["Ho"]?></td>
                                        <td > <?=$row["Ten"]?></td>
                                        <td><?=$row["GioiTinh"]==0?"Nam":"Nữ"?></td>
                                        <td > <?=$row["SDT"]?></td>
                                        <td > <?=$row["Email"]?></td>
                                        <td > <?=$row["DiaChi"]?></td>
                                        <td><img src="img/<?=$HinhAnh?>" width="80"></td>
                                        <td > <?=$row["TaiKhoan"]?></td>
                                        <td > <?=$row["MaQuyen"]?></td>
                                        <td > <?=$row["TrangThai"]?></td>
                                        <td>
                                            <a href="suanguoidung.php?MaND=<?=$row["MaND"]?>" class="status_btn">Sửa</a>
                                            <a href="xoanguoidung.php?MaND=<?=$row["MaND"]?>" class="status_btn" onClick="return confirm('chắc xóa không?');">Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                    }//kết thúc vòng lặp foreach
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<?php
    include("inc/footer.php");
?>
</section>
<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="js/metisMenu.js"></script>
<!-- waypoints js -->
<script src="vendors/count_up/jquery.waypoints.min.js"></script>
<!-- waypoints js -->
<script src="vendors/chartlist/Chart.min.js"></script>
<!-- counterup js -->
<script src="vendors/count_up/jquery.counterup.min.js"></script>
<!-- swiper slider js -->
<script src="vendors/swiper_slider/js/swiper.min.js"></script>
<!-- nice select -->
<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
<!-- owl carousel -->
<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
<!-- gijgo css -->
<script src="vendors/gijgo/gijgo.min.js"></script>
<!-- responsive table -->
<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>

<script src="js/chart.min.js"></script>
<!-- progressbar js -->
<script src="vendors/progressbar/jquery.barfiller.js"></script>
<!-- tag input -->
<script src="vendors/tagsinput/tagsinput.js"></script>
<!-- text editor js -->
<script src="vendors/text_editor/summernote-bs4.js"></script>


<!-- custom js -->
<script src="js/custom.js"></script>

<!-- active_chart js -->
<!-- <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {?> -->
<script src="js/active_chart.js"></script>
<!-- <?php }?> -->

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:18:39 GMT -->
</html>