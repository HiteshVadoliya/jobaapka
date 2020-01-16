<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('public/front/images/logo/'.$site_favicon );?>">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo ADMIN_CSS_JS; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <link href="<?php echo ADMIN_CSS_JS; ?>custom.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="<?php echo ADMIN_CSS_JS; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo ADMIN_CSS_JS; ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
        folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo ADMIN_CSS_JS; ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <style>
            .error{
                color:red;
                font-weight: normal;
            }
        </style>
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo ADMIN_CSS_JS; ?>/js/jQuery-2.1.4.min.js"></script>
        <script type="text/javascript">
            var baseURL = "<?php echo base_url(); ?>";
        </script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <a href="<?php echo base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>M</b>G</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b><?=$site_name;?></b></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">

                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-history"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo ADMIN_CSS_JS; ?>/dist/img/avatar.png" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?php echo $name; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo ADMIN_CSS_JS; ?>/dist/img/avatar.png" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $name; ?>
                                            <small><?php echo $role_text; ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url(); ?>admin/loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url(); ?>admin/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">
                    
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="<?php echo ADMIN_LINK; ?>dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Jobseeker & Employer</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>jobseeker"><i class="fa fa-circle-o"></i>Manage Jobseeker</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>employer"><i class="fa fa-circle-o"></i>Manage Employer</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Slider</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>slider"><i class="fa fa-circle-o"></i>Manage Slider</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>slider/add"><i class="fa fa-circle-o"></i>Add Slider</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Our Clients</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>our_clients"><i class="fa fa-circle-o"></i>Manage Our Client</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>our_clients/add"><i class="fa fa-circle-o"></i>Add Our Client</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Industry</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>industry"><i class="fa fa-circle-o"></i>Manage Industry</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>industry/add"><i class="fa fa-circle-o"></i>Add Industry</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Testimonial</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>testimonial"><i class="fa fa-circle-o"></i>Manage Testimonial</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>testimonial/add"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Inquiry</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>inquiry"><i class="fa fa-circle-o"></i>Manage Inquiry</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Job Function</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>job_function"><i class="fa fa-circle-o"></i>Manage Job Function</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>job_function/add"><i class="fa fa-circle-o"></i>Add Job Function</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Location</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>location"><i class="fa fa-circle-o"></i>Manage Location</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>location/add"><i class="fa fa-circle-o"></i>Add Location</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Education</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>education"><i class="fa fa-circle-o"></i>Manage Education</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>education/add"><i class="fa fa-circle-o"></i>Add Education</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Designation Level</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>designation_level"><i class="fa fa-circle-o"></i>Manage Designation Level</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>designation_level/add"><i class="fa fa-circle-o"></i>Add Designation Level</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Job Type</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>jobtype"><i class="fa fa-circle-o"></i>Manage Job Type</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>jobtype/add"><i class="fa fa-circle-o"></i>Add Job Type</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Salary</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>salary"><i class="fa fa-circle-o"></i>Manage Salary</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>salary/add"><i class="fa fa-circle-o"></i>Add Salary</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Category</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>category"><i class="fa fa-circle-o"></i>Manage Category</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>category/add"><i class="fa fa-circle-o"></i>Add Category</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Newsletter</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>newsletter"><i class="fa fa-circle-o"></i>Manage Newsletter</a></li>
                            </ul>
                        </li>


                        <!--
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>Watch</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>watch"><i class="fa fa-circle-o"></i>Manage Watch Product</a></li>
                                <li><a href="<?php echo ADMIN_LINK; ?>watch/add"><i class="fa fa-circle-o"></i>Add Watch</a></li>
                            </ul>
                        </li>

                         -->

                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i> <span>CMS</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK."whyus/1"; ?>"><i class="fa fa-circle-o"></i> <span>Why Us</span></a></li>
                                <li><a href="<?php echo ADMIN_LINK."about/2"; ?>"><i class="fa fa-circle-o"></i> <span>About Us</span></a></li>
                                <li><a href="<?php echo ADMIN_LINK."privacy-policy/2"; ?>"><i class="fa fa-circle-o"></i> <span>Privacy Policy</span></a></li>
                                <li><a href="<?php echo ADMIN_LINK."terms/3"; ?>"><i class="fa fa-circle-o"></i> <span>Terms</span></a></li>
                            </ul>
                        </li>
                        

                        
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Settings</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo ADMIN_LINK; ?>loadChangePass"><i class="fa fa-circle-o"></i>Change Password</a></li>
                                <li><a href="<?php echo ADMIN_LINK."plan"; ?>"><i class="fa fa-circle-o"></i> <span>plan</span></a></li>

                            </ul>
                        </li>
                        
                    </ul>
                    
                </section>
            </aside>