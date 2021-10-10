<?PHP
session_start();
require("kiemtradangnhap.php");
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:17:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title></title>

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
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <div class="single_quick_activity">
                                            <h4>Tổng người Dùng</h4>
                                            <h3>$ <span class="counter">
                                                <?php
                                                require("Dungchung.php");
                                                $conn = KetNoiCSDL();
                                                $sql= "SELECT COUNT(MaND) FROM nguoidung ";
                                               // $pdo_stm = $conn->query($sql);
                                               $result = $conn->prepare($sql); 
                                                $result->execute(); 
                                               $number_of_rows = $result->fetchColumn();
                                               echo "<h1> ". $number_of_rows. "</h1>";
                                                ?>
                                            </span> </h3>
                                            <p>người dùng</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Tổng Sản Phẩm</h4>
                                        
                                            <h3> 
                                            <span class="counter">
                                                <?php
                                               // require("Dungchung.php");
                                               // $conn = KetNoiCSDL();
                                                $sql = "SELECT COUNT(MaND) FROM nguoidung" ;
                                              //  $pdo_stm = $conn->query($sql);
                                                 $pdo_stm = $conn->prepare($sql);
                                                $pdo_stm->execute();
                                                $number_of_rows=$pdo_stm->fetchColumn();
                                                //db=new PDO($database, $user, $password);
                                                // $results=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                              echo "<h1> ". $number_of_rows. "</h1>";
                                        
                                                ?>
                                            </span>
                                            </h3>
                                            <p>sản phẩm</p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Tổng Đơn Hàng</h4>
                                            <h3>$ <span class="counter">
                                                <?php
                                                    $sql = "SELECT COUNT(MaLSP) FROM loaisanpham" ;
                                                    $pdo_stm = $conn->prepare($sql);
                                                    $pdo_stm->execute();
                                                    $number_of_rows=$pdo_stm->fetchColumn();
                                                    echo "<h1> ". $number_of_rows. "</h1>";
                                                ?>
                                            </span> </h3>
                                            <p>đơn hàng </p>
                                        </div>
                                        <div class="single_quick_activity">
                                            <h4>Tổng Nhóm hàng</h4>
                                            <h3>$ <span class="counter">
                                            <?php
                                                $sql = "SELECT COUNT(MaHD) FROM hoadon" ;
                                                $pdo_stm = $conn->prepare($sql);
                                                $pdo_stm->execute();
                                                $number_of_rows=$pdo_stm->fetchColumn();
                                                echo "<h1> ". $number_of_rows. "</h1>";
                                            ?>
                                            </span> </h3>
                                            <p>nhóm hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<script src="vendors/apex_chart/apexcharts.js"></script>

<!-- custom js -->
<script src="js/custom.js"></script>

<!-- active_chart js -->
<script src="js/active_chart.js"></script>
<script src="vendors/apex_chart/radial_active.js"></script>
<script src="vendors/apex_chart/stackbar.js"></script>
<script src="vendors/apex_chart/area_chart.js"></script>
<!-- <script src="vendors/apex_chart/pie.js"></script> -->
<script src="vendors/apex_chart/bar_active_1.js"></script>
<script src="vendors/chartjs/chartjs_active.js"></script>
<!--  -->

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:18:22 GMT -->
</html>