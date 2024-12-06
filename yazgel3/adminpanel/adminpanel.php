<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>VD -Admin Panel</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gentelella/1.3.0/css/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/adminpanel.css" />
</head>

<body>
    <!-- partial:index.partial.html -->

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0">
                            <a href="adminpanel.html" class="site_title"><i class="fa fa-dashboard"></i>
                                <span>Admin</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="img/VD.png" alt="..." class="img-circle profile_img" />
                            </div>
                            <div class="profile_info">
                                <span>Hoşgeldin,</span>
                                <h2>Veli DAŞAN</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li>
                                        <a><i class="fa fa-home"></i> Anasayfa
                                            <span class="fa fa-chevron-down"></span></a>
                                    </li>

                                    <ul>
                                        <li>
                                            <a href="otobüsbilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Otobüs Bilgileri

                                            </a>


                                        </li>
                                        <li>
                                            <a href="seferbilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Sefer Bilgileri

                                            </a>


                                        </li>
                                        <li>
                                            <a href="rezarvasyonbilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Rezarvasyon Bilgileri

                                            </a>


                                        </li>
                                        <li>
                                            </a>
                                            <a href="müşteribilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Müşteri Bilgileri

                                            </a>


                                        </li>
                                        <li>

                                            <a href="koltukbilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Koltuk Bilgileri

                                            </a>


                                        </li>
                                        <li>

                                            <a href="firmabilgileri.php" target="bilgiler">
                                                <i class="fa fa-desktop"></i> Firma Bilgileri

                                            </a>


                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu-->

                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="img/VD.png" alt="" />Veli DAŞAN
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profil</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right"></span>
                                                <span>Ayarlar</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Yardım</a></li>
                                        <li>
                                            <a href="login.html"><i class="fa fa-sign-out pull-right"></i> Çıkış</a>
                                        </li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg"
                                                        alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for
                                                    movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg"
                                                        alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for
                                                    movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg"
                                                        alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for
                                                    movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="images/img.jpg"
                                                        alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for
                                                    movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>Daha Fazla Gör</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    <iframe name="bilgiler" scrolling="no" frameborder="1" width="1300" height="1200"></iframe>
                </div>
                <!-- /page content -->
            </div>
        </div>



    </body>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="adminpanel.js"></script>
</body>

</html>