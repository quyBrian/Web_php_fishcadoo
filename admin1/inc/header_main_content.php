<div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area">
                            <!-- <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div> -->
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                            <!-- ?php
                                require("Dungchung.php");
                                $pdo_conn=KetNoiCSDL();
                                $MaND = $_REQUEST["MaND"]; 
                                $sql = "SELECT * FROM nguoidung WHERE MaSP=$MaND";
                                $pdo_stm = $pdo_conn->query($sql);
                                $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
                            ?> -->
                                <p>Welcome Admin!</p>
                                <h5></h5>
                                <div class="profile_info_details">
                                    <!-- <a href="#">Hồ sơ <i class="ti-user"></i></a> -->
                                    <a href="logoutadmin.php">Đăng xuất <i class="ti-shift-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>