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
                                <h3 class="mb-0" >S???a ng?????i d??ng</h3>
                            </div>
                        </div>
                        <?php
                        require("Dungchung.php");
                        $pdo_conn=KetNoiCSDL();
                        $MaND = $_REQUEST["MaND"]; 
                        $sql = "SELECT * FROM nguoidung WHERE MaND=$MaND";
                        $pdo_stm = $pdo_conn->query($sql);
                        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
                        $check_nam = $row["GioiTinh"]==0?"checked":"";
                        $check_nu = $row["GioiTinh"]==1?"checked":"";
                        $radio=$row["TrangThai"]==1?"checked":"";
                        ?>
                          <form action="xlysuanguoidung.php" method="post" name="f1" id="f1" enctype="multipart/form-data">
                          <input type="hidden" name="MaND" id="MaND" value="<?=$MaND?>">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">N???i dung</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">H???</th>
                                    <td><input style="width:400px;" type="text" name="Ho" id="Ho" value="<?=$row["Ho"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">T??n<nav></nav></th>
                                    <td><input style="width:400px;" type="text" name="Ten" id="Ten" value="<?=$row["Ten"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Gi???i t??nh</th>
                                    <td>
                                      Nam <input type="radio" name="rGioitinh" id="r1" value="0" <?=$check_nam?>> &nbsp; &nbsp; &nbsp;
                                      N???  <input type="radio" name="rGioitinh" id="r2" value="1" <?=$check_nu?>>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Sdt</th>
                                    <td><input style="width:400px;" type="text" name="SDT" id="SDT" value="<?=$row["SDT"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Email</th>
                                    <td><input style="width:400px;" type="text" name="Email" id="Email" value="<?=$row["Email"]?>"></td>
                                  </tr>
                                  
                                  <tr>
                                    <th scope="row">?????a ch???</th>
                                    <td><input style="width:400px;" type="text" name="DiaChi" id="DiaChi" value="<?=$row["DiaChi"]?>"></td>
                                  </tr>
                                  <tr>
                                    <th width="100">???nh hi???n t???i:</th>
                                    <td width="300">
                                      <?php
                                        $HinhAnh = ($row["HinhAnh"] != "") ? $row["HinhAnh"] : "noimage.jpg";
                                      ?>
                                      <img width="100" src="img/<?= $HinhAnh ?>"><br>
                                      <input type="text" name="anhHientai" id="anhHientai" value="<?= $row["HinhAnh"] ?>">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th width="100">H??nh ???nh m???i:</th>
                                    <td width="300">
                                      <input type="file" name="fHinhanh" id="fHinhanh">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">T??i Kho???n</th>
                                    <td><input style="width:400px;" type="text" name="TaiKhoan" id="TaiKhoan" value="<?=$row["TaiKhoan"]?>"></td>
                                  </tr>
                                  <tr>
                                  <?php
                                      
                                      $conn = KetNoiCSDL();//g???i h??m k???t n???i CSDL v?? l??u l???i ?????i t?????ng PDO 
                                      $sql = "SELECT MaQuyen FROM phanquyen";
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
                                    <th scope="row">Ph??n Quy???n</th>
                                      <td>
                                        <select style="width:400px;" name="MaQuyen" id="MaQuyen" value="<?=$row["MaQuyen"]?>">
                                        <?php
                                          foreach($rows as $row)//l???p t???ng d??ng trong m???ng $rows l??u v??o m???ng 1 chi???u $row	
                                          {//hi???n th??? t???ng d??ng
                                        ?>
                                          <option><?=$row["MaQuyen"]?></option>
                                        <?php
                                        }//k???t th??c v??ng l???p foreach
                                        ?>
                                        </select>
                                    </td>
                                  </tr>
                                  <tr> 
                                    <th scope="row">Tr???ng th??i</th>
                                    <td ><input type="checkbox" name="Trangthai" id="Trangthai" value="1" <?=$radio?>></td>
                                  </tr>
                                  
                                  <tr>
                                    <th>&nbsp;</th>
                                    <td>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="submit" class="status_btn" name="b1" id="b1" value="?????ng ?? ">&nbsp; &nbsp; 
                                        <input type="reset" class="status_btn"name="b2" id="b2" value="Nh???p l???i ">
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