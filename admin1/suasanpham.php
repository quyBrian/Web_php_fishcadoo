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
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >Thêm sản phẩm</h3>
                            </div>
                        </div>
                        <?php
                        require("Dungchung.php");
                        $pdo_conn=KetNoiCSDL();
                        $MaSP = $_REQUEST["MaSP"]; 
                        $sql = "SELECT * FROM sanpham WHERE MaSP=$MaSP";
                        $pdo_stm = $pdo_conn->query($sql);
                        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
                        $radio=$row["TrangThai"]==1?"checked":"";
                        ?>
                          <form name="f1" id="f1" method="post" action="xlysuasanpham.php" enctype="multipart/form-data">
                          <input type="hidden" name="MaSP" id="MaSP" value="<?=$MaSP?>">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nội dung</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Mã Loại sản phẩm</th>
                                      <td>
                                      <input style="width:400px;" type="combobox" name="MaLSP" id="MaLSP" value="<?=$row["MaLSP"]?>">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Tên sản phẩm</th>
                                    <td><input style="width:400px;" type="combobox" name="TenSP" id="TenSP" value="<?=$row["TenSP"]?>"></td>
                                  </tr>
                                
                                  <tr>
                                    <th scope="row">Đơn giá </th>
                                    <td><input style="width:400px;" type="combobox" name="DonGia" id="DonGia" value="<?=$row["DonGia"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Số lượng</th>
                                    <td><input style="width:400px;" type="text" name="SoLuong" id="SoLuong" value="<?=$row["SoLuong"]?>"></td>
                                    </tr>
                                    <tr>
                                    <th width="100">Ảnh hiện tại:</th>
                                    <td width="300">
                                      <?php
                                        $HinhAnh = ($row["HinhAnh"] != "") ? $row["HinhAnh"] : "noimage.jpg";
                                      ?>
                                      <img width="100" src="img/<?= $HinhAnh ?>"><br>
                                      <input type="text" name="anhHientai1" id="anhHientai1" value="<?= $row["HinhAnh"] ?>">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th width="100">Hình ảnh mới:</th>
                                    <td width="300">
                                      <input type="file" name="sHinhanh" id="sHinhanh">
                                    </td>
                                  </tr>
                                  
                                    <th scope="row">Mã Khuyến mại</th>
                                      <td>
                                      <input style="width:400px;" type="combobox" name="MaKM" id="MaKM" value="<?=$row["MaKM"]?>">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Mô tả</th>
                                    <td><input style="width:400px; height:100px;" type="text" name="Mota" id="Mota" value="<?=$row["Mota"]?>"></td>
                                  </tr>
                                  <tr>
                                  <th scope="row">Số sao</th>
                                      <td>
                                      <input style="width:400px;" type="combobox" name="SoSao" id="SoSao" value="<?=$row["SoSao"]?>">
                                        </select>
                                  </tr>
                                  <tr>
                                    <th scope="row">Số đánh giá  </th>
                                    <td><input style="width:400px;" type="text" name="SoDanhGia" id="SoDanhGia" value="<?=$row["SoDanhGia"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Trạng thái</th>
                                    <td><input type="checkbox" name="TrangThai" id="TrangThai" value="1" <?=$radio?>></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Ghi chú  </th>
                                    <td><input style="width:400px;" type="text" name="GhiChu" id="GhiChu" value="<?=$row["GhiChu"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th>&nbsp;</th>
                                    <td>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="submit" class="status_btn" name="s1" id="s1" value="Đồng ý ">&nbsp; &nbsp; 
                                        <input type="reset" class="status_btn"name="b2" id="b2" value="Nhập lại ">
                                    </td>
                                  </tr>
                                </tbody>
                                
                            </table>
                          </form>
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