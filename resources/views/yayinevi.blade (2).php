    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/morris.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <!--Morris Chart-->
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/raphael.min.js"></script>
        <script src="assets/js/dashboard.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    <body>
    <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo">
                        <span class="logo-light">
                                <i class="mdi mdi-camera-control"></i> furkan.com
                            </span>
                        <span class="logo-sm">
                                <i class="mdi mdi-camera-control"></i>
                            </span>
                    </a>
                </div>
                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        <!-- language-->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/us_flag.jpg" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                                <a class="dropdown-item" href="#"><img src="assets/images/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                            </div>
                        </li>
                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                            </a>
                        </li>
                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                        Notifications
                                    </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                            </div>
                        </li>
                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="/" class="waves-effect">
                                    <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right">9+</span> <span> Giri?? Sayfas??
                                     </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Telefon Rehberi <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="kisilistesi">Ki??i Listesi</a></li>
                                    <li><a href="kisiekle">Ki??i Ekle</a></li>
                                    <li><a href="kisibul">Kisi Bul</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href+="calendar.html" class="waves-effect"><i class="icon-calendar"></i><span> Takvim </span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Sayfalar <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="rehberhakkinda">Rehber Hakk??nda</a></li>
                                    <li><a href="faydal??bilgiler">Faydal?? Bilgiler</a></li>
                                    <li><a href="tan??t??m">Tan??t??m</a></li>
                                    <li><a href="/iletisim">??leti??im</a></li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Ana Sayfa</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Jassa</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end page-title -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Reber Kay??t Say??s??</h5>
                                        </div>
                                        <h3 class="mt-4">12345</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Toplam gelir</h5>
                                        </div>
                                        <h3 class="mt-4">$73,265</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Average Price</h5>
                                        </div>
                                        <h3 class="mt-4">447</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-heading p-4">
                                        <div class="mini-stat-icon float-right">
                                            <i class="mdi mdi-buffer bg-danger text-white"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-16">Add to Card</h5>
                                        </div>
                                        <h3 class="mt-4">86%</h3>
                                        <div class="progress mt-4" style="height: 4px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">


                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Son 5 Kay??t</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Ad?? Soyad??</th>
                                                        <th scope="col">Durum</th>
                                                        <th scope="col">Telefon Numaras??</th>
                                                        <th scope="col">Mail Adresi</th>
                                                        <th scope="col">Adresi</th>
                                                        <th scope="col" colspan="2">Do??um Tarihi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mustafacan ya??ar</td>
                                                        <td><span class="badge badge-success">TRY</span></td>
                                                        <td>$9,420,000</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Mustafacan@27e-Mail
                                                            </div>
                                                        </td>
                                                        <td>Gaziantep ??ahinbey akp??nar mahalle</td>
                                                        <td>12/15/2021</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mustafa</td>
                                                        <td><span class="badge badge-warning">??evri</span></td>
                                                        <td>$3,120,000</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2"> Mustafa@27e-Mail
                                                            </div>
                                                        </td>
                                                        <td>Gaziantep ??ahinbey kaleboynu mahalle</td>
                                                        <td>12/15/2021</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ahmet</td>
                                                        <td><span class="badge badge-success">yaz??l??m</span></td>
                                                        <td>$6,360,000</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2"> Ahmet@27e-Mail
                                                            </div>
                                                        </td>
                                                        <td>Gaziantep ??ahinbey bur?? mahallesi</td>
                                                        <td>12/15/2021</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ABDsamet</td>
                                                        <td><span class="badge badge-danger">aktif</span></td>
                                                        <td>$5,200,000</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> ABDsamet27@e-Mail
                                                            </div>
                                                        </td>
                                                        <td>Gaziantep ??ahinbey bur?? mahallesi</td>
                                                        <td>12/15/2021</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Furkan</td>
                                                        <td><span class="badge badge-success">TRY</span></td>
                                                        <td>$7,250,000</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2"> Furkan27@e-mail
                                                            </div>
                                                        </td>
                                                        <td>Gaziantep ??ahinbey Belen k??y mahallesi</td>
                                                        <td>19/1/2021</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- content -->
                <footer class="footer">
                    ??2021 Jassa <span class="d-none d-sm-inline-block"> - Love <i class="mdi mdi-heart text-danger"></i> by Therichpost.com</span>.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
    </body>
    </html>
