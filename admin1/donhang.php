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
                            <h4>Danh s??ch ????n h??ng</h4>
                            <!-- <div class="box_right d-flex lms_block">
                                <div class="add_button ml-10">
                                    <a href="themnguoidung.php" class="btn_1">Th??m ng?????i d??ng</a>
                                </div>
                            </div> -->
                        </div>
                        <?php
                            require("DungChung.php");
                            $conn = KetnoiCSDL();//g???i h??m k???t n???i CSDL v?? l??u l???i ?????i t?????ng PDO 
                            $sql = "SELECT * FROM hoadon";
                            $pdo_stm = $conn->query($sql);//th???c hi???n l???nh sql tr??? v??? PDOStatement
                            if($pdo_stm==NULL)
                                die("<H3>L???I SQL</H3>");
                            $n =$pdo_stm->rowCount();//l???y s??? b???n ghi k???t qu???
                            // echo "<h3> s??? k???t qu??? nh??m s???n ph???m l?? $n </h3>";
                            //l???y m???ng ch???a c??c d??ng v?? c???t t??? k???t qu??? SELECT
                            $rows  = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
                            //PDO::FETCH_BOTH truy c???p c??? theo t??n c???t ho???c s??? th??? t??? c???t
                            //print_r($rows);//hi???n th??? c???u tr??c m???ng
                        ?>
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="moi" style="overflow: croll;">
                                <thead >
                                    <tr>
                                        <th scope="col">M?? h??a ????n</th>
                                        <th scope="col">M?? Ng?????i d??ng</th>
                                        <th scope="col">Ng??y l???p</th>
                                        <th scope="col">Ng?????i nh???n</th>
                                        <th scope="col">Sdt</th>
                                        <th scope="col">?????a ch???</th>
                                        <th scope="col">Ph????ng Th???c thanh to??n</th>
                                        <th scope="col">T???ng ti???n</th>
                                        <th scope="col">Tr???ng th??i</th>
                                        <th scope="col">X??? l??</th>
                                    </tr>
                                </thead>
                                <?php
                                    foreach($rows as $row)//l???p t???ng d??ng trong m???ng $rows l??u v??o m???ng 1 chi???u $row	
                                    {//hi???n th??? t???ng d??ng
                                ?>
                                <tbody>
                                    <tr>
                                        <td > <?=$row["MaHD"]?></td>
                                        <td > <?=$row["MaND"]?></td>
                                        <td > <?=$row["NgayLap"]?></td>
                                        <td > <?=$row["NguoiNhan"]?></td>
                                        <td > <?=$row["SDT"]?></td>
                                        <td > <?=$row["DiaChi"]?></td>
                                        <td > <?=$row["PhuongThucTT"]?></td>
                                        <td > <?=$row["TongTien"]?></td>
                                        <td > <?=$row["TrangThai"]?></td>
                                        <td>
                                            <a href="xemchitietdonhang.php?MaHD=<?=$row["MaHD"]?>" class="status_btn">Xem</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                    }//k???t th??c v??ng l???p foreach
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