<?php
    session_start();

    include('includes/functions.php');

    confirm_login();
?>

<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Ever Green Forever</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/excelgreenLOGO.png">

    <!--==== DataTable ===-->
        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!--====  End DataTable ====-->

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="dashboard.php" class="logo"><img src="assets/images/excelgreenLOGO.png" height="24" alt="logo"></a>
                        <br>
                        <h4 class="font-16"><?php echo $_SESSION['username'];?></h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>

                    </div><br>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="dashboard.php" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="user_details.php" class="waves-effect">
                                    <i class="fa fa-users"></i>
                                    <span> View Users </span>
                                </a>
                            </li>

                            <li>
                                <a href="account_details.php" class="waves-effect">
                                    <i class="fa fa-id-card-o"></i>
                                    <span> View Accounts </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i> <span> Manage Admin </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_admin.php">Add Admin</a></li>
                                    <li><a href="admin_details.php">View Admin</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-qrcode"></i> <span> Epin Management </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="generate_code.php">Generate Epin</a></li>
                                    <li><a href="reg_code_details.php">View Epin</a></li>
                                    <li><a href="reg_code_batch.php">View Batches</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="stages.php" class="waves-effect">
                                    <i class="fa fa-sort-amount-desc"></i>
                                    <span> Stages </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-line-chart"></i> <span> Transactions </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="transaction_details.php">Transfer History</a></li>
                                    <li><a href="referral_bonus.php">Referral Bonus</a></li>
                                    <li><a href="signup_allowance.php">Signup Allowance</a></li>
                                    <li><a href="stage_exit_bonus.php">Stage Exit Bonus</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-money"></i> <span> Bonus Managment</span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="general_bonus.php">General Bonus</a></li>
                                    <li><a href="add_bonus.php">Investment Bonus</a></li>
                                    <li><a href="other_bonus.php">Other Bonus</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li>
                                <a href="bank_list.php" class="waves-effect">
                                    <i class="fa fa-bank"></i>
                                    <span> Bank List </span>
                                </a>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-handshake-o"></i> <span> Pay-out Managment</span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="payout.php">Payout Requests</a></li>
                                    <li><a href="spooled_request.php">Spooled Request</a></li>
                                    <li><a href="approved_payout.php">Approved Payout</a></li>
                                    
                                </ul>
                            </li>
                            
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-support"></i> <span> Support Tickets</span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Pending </a></li>
                                    <li><a href="#">Closed </a></li>
                                    
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-bag"></i> <span> Shop Management</span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="view_product.php">View Product</a></li>
                                    <li><a href="add_product.php">Add product</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="maintenance.php" class="waves-effect">
                                    <i class="fa fa-gear"></i>
                                    <span> Maintenance </span>
                                </a>
                            </li>


                            <!-- empty -->
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="fa fa"></i>
                                    <span>  </span>
                                </a>
                            </li>
                            <br><br>
                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                             

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/excel-executive.png" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        
                                        <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Admin Dashboard</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->