<?php if(empty(session()->get('email')) ) : ?>
<?php echo "<script>
										alert('Please Login First !!');
										window.location.href='/';
										</script>";
								?>
<?php else : ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title; ?> </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/tmp_home/images/1.png">
    <link href="assets/tmp_dashboard/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/tmp_dashboard/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="assets/tmp_dashboard/css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="assets/tmp_dashboard/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
     <!-- Daterange picker -->
     <link href="assets/tmp_dashboard/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="assets/tmp_dashboard/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="assets/tmp_dashboard/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="assets/tmp_dashboard/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="assets/tmp_dashboard/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="assets/tmp_dashboard/vendor/pickadate/themes/default.date.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="home" class="brand-logo">
                <img class="logo-abbr" src="assets/tmp_home/images/1.png" alt="">
                <img class="logo-compact" src="assets/tmp_dashboard/images/logo-text.png" alt="">
                <span class="brand-title"><?=setting()->nama_cam ?></span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                               
                               
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/profil" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="/logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard">Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-check-square-11"></i><span class="nav-text">Registration Form</span></a>
                        <ul aria-expanded="false">
                            <li><a href="/form">Form</a></li>
                           
                        </ul>
                    </li>
                    <?php if(session()->get('form') == 1) : ?>
                    <li class="nav-label">Profile</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-users-mm"></i><span class="nav-text"><?php echo session()->get('nama'); ?></span></a>
                        <ul aria-expanded="false">
                        <li><a href="/profil">Account</a></li>
                        </ul>
                    </li>
                    <?php else : ?>
                    <?php endif; ?>
                    
                               </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        
        @yield('content')
                 
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © <?=setting()->nama_cam ?> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/tmp_dashboard/vendor/global/global.min.js"></script>
    <script src="assets/tmp_dashboard/js/quixnav-init.js"></script>
    <script src="assets/tmp_dashboard/js/custom.min.js"></script>

    <script src="assets/tmp_dashboard/vendor/chartist/js/chartist.min.js"></script>

    <script src="assets/tmp_dashboard/vendor/moment/moment.min.js"></script>
    <script src="assets/tmp_dashboard/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="assets/tmp_dashboard/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->
     <!-- Datatable -->
     <script src="assets/tmp_dashboard/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/tmp_dashboard/js/plugins-init/datatables.init.js"></script>
     <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="assets/tmp_dashboard/vendor/moment/moment.min.js"></script>
    <script src="assets/tmp_dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="assets/tmp_dashboard/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="assets/tmp_dashboard/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="assets/tmp_dashboard/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="assets/tmp_dashboard/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="assets/tmp_dashboard/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="assets/tmp_dashboard/vendor/pickadate/picker.js"></script>
    <script src="assets/tmp_dashboard/vendor/pickadate/picker.time.js"></script>
    <script src="assets/tmp_dashboard/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="assets/tmp_dashboard/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="assets/tmp_dashboard/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="assets/tmp_dashboard/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="assets/tmp_dashboard/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="assets/tmp_dashboard/js/plugins-init/pickadate-init.js"></script>

</body>

</html>
<?php endif; ?>