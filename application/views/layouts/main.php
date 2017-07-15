<!DOCTYPE html>
<?php //print_r($_SESSION['user']);exit; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FINMAN</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome --><?php //echo base_url('assets/css/font-awesome.min.css');                                    ?>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.tableTools.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweet-alert.css" />
        <script>
            var NAME_FIELD = <?php echo NAME_FIELD; ?>;
            var NAME_WITH_SPACE = <?php echo NAME_WITH_SPACE; ?>;
            var ALPHA_NUMERIC = <?php echo ALPHA_NUMERIC; ?>;
            var NUMERIC = <?php echo NUMERIC; ?>;
            var ZIPCODE_FIELD = <?php echo ZIPCODE_FIELD; ?>;
            var SITEURL = '<?php echo base_url(); ?>';
        </script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini" style="font-size:12px;">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">FINMAN</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">FINMAN</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('assets/img/user.png'); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo (isset($_SESSION['user'])) ? ucfirst($_SESSION['user']['LOGIN_USERNAME']) : 'GUEST'; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('assets/img/user.png'); ?>" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo (isset($_SESSION['user'])) ? ucfirst($_SESSION['user']['LOGIN_USERNAME']) : 'GUEST'; ?>
                                            <small>Member since <?php echo (isset($_SESSION['user']) && isset($_SESSION['user']['created_date'])) ? date('M', strtotime($_SESSION['user']['created_date'])) . ' ' . date('Y', strtotime($_SESSION['user']['created_date'])) : date("Y-m-d H:i:s"); ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('assets/img/user.png'); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo (isset($_SESSION['user'])) ? ucfirst($_SESSION['user']['LOGIN_USERNAME']) : 'GUEST'; ?>
                            </p><a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Administrator</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li>
                                    <a href="<?php echo site_url('administration_comp_profile/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Comp Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_designation/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Designation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_emp_branch_info/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Emp Branch Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_employee/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Employee</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_fundallocation/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Fundallocation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_login/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('administration_setting/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Administration Setting</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Client</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">

                                <li>
                                    <a href="<?php echo site_url('client_info/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Client Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Loan</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">

                                <li>
                                    <a href="<?php echo site_url('loan/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Loan </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Customer</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">

                                <li>
                                    <a href="<?php echo site_url('customers/customerUpload'); ?>">
                                        <i class="fa fa-th"></i> <span>Customers Upload</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customers/customerDetails'); ?>">
                                        <i class="fa fa-th"></i> <span>Customers Creation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customer_addres/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Customer Addres</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customer_detail/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Customer Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customer_doc_checklist/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Customer Doc Checklist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customer_reference/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Customer Reference</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('form/index'); ?>">
                                <i class="fa fa-th"></i> <span>Form</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Masters</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li>
                                    <a href="<?php echo site_url('masters_advertisement/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Advertisement</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_agent_info/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Agent Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_carat/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Carat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_cash_management/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Cash Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_cust_bank/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Cust Bank</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_cust_comp_info/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Cust Comp Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_daily_gold_price/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Daily Gold Price</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_document/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Document</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_holiday_info/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Holiday Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_housestatu/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Housestatu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_jobsector/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Jobsector</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_loan_pay_term/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Loan Pay Term</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_locker_detail/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Locker Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_locker_master/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Locker Master</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_orgtype/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Orgtype</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_ornament_desc/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Ornament Desc</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_ornament/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Ornament</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_race/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Race</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_state/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters State</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('masters_storage_fee/index'); ?>">
                                        <i class="fa fa-th"></i> <span>Masters Storage Fee</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('module/index'); ?>">
                                <i class="fa fa-th"></i> <span>Module</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('role/index'); ?>">
                                <i class="fa fa-th"></i> <span>Role</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('userrights_by_role/index'); ?>">
                                <i class="fa fa-th"></i> <span>Userrights By Role</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('userrights_by_user/index'); ?>">
                                <i class="fa fa-th"></i> <span>Userrights By User</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo (isset($title)) ? ucfirst($title) : 'Dashboard'; ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="#">Listing</a></li>
                        <li class="active"><?php echo (isset($title)) ? ucfirst($title) : 'View'; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php
                    if (isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyrights By <a href="http://www.crudigniter.com/">FINMAN</a> 1.0 Beta</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->

                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>

        <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js'); ?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js'); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js'); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js'); ?>"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sweet-alert.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/fileupload/bootstrap-filestyle.min.js"></script>
        <script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/select2/select2.full.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validations.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>

        <!-- ./wrapper -->
        <script type="text/javascript">
            $(document).ready(function () {
                $(".select2").select2();
                // $('#DataTables_Table_0').DataTable();
                // $('#DataTables_Table_0').DataTable();
                $('#example').DataTable({
                    'bSort': false,

                    "scrollY": "200px",
                    "scrollCollapse": false,
                    "info": true,
                    "paging": true
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#customer').change(function () {
                    //alert("hiii");
                    myform.submit();
                });
                $("#loan_type").change(function () {
                    var loan_type = this.value;
                    if (loan_type == '1') {
                        $(".applied_amount").hide();
                        $(".loan_duration").hide();
                    } else {
                        $(".applied_amount").show();
                        $(".loan_duration").show();
                    }
                });
            });
        </script>
    </body>
</html>
