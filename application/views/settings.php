<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>User Settings - Vuesax - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon.png">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/pages/user-settings.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/plugins/file-uploaders/dropzone.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url()?>dashboard">
                <img class="brand-logo" src="<?=base_url()?>assets/images/logo.png"><span style="font-size: 12px; font-weight: bold; color: #FECC00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CELER SOLUTIONS</span>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        <?php if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) { ?>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="<?=base_url()?>dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="<?=base_url()?>users"><i class="feather icon-users"></i><span class="menu-title" data-i18n="JSON">Users</span></a>
                </li>
                <li class="active nav-item"><a href="<?=base_url()?>settings"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Settings">Settings</span></a>
                </li>
            </ul>
        <?php } ?>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none">
                                        <span class="user-name text-bold-600">
                                            <?php echo $_SESSION['username'] ?>
                                        </span>
                                        <span class="user-status">Available</span>
                                    </div>
                                    <span>
                                        <img class="round" src="<?=base_url()?>app-assets/images/users/<?php echo $_SESSION['avatar'] ?>" alt="avatar" height="40" width="40" />
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?=base_url()?>settings"><i class="feather icon-user"></i>Edit Profile</a>
                                    <?php if ($this->session->userdata('username') != '' && $this->session->userdata('logged_in') === true) ?>
                                    <a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="feather icon-power"></i> Logout</a>
                                    <?php ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">User Settings</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!--Settings-begins -->
                <section>
                    <!-- Account-begins -->
                    <div class="settings-account">
                        <div class="card user-form">
                            <div class="card-header">
                                <h4 class="card-title">Account</h4>
                            </div>
                            <div class="card-body">
                                <div class="collapse-header">
                                    <div id="headingCollapse1">
                                        <div class="lead collapse-title" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img class="rounded-circle mr-2" src="<?=base_url()?>app-assets/images/users/<?php echo $_SESSION['avatar'] ?>" alt="avatar" height="64" width="64" />
                                                </a>
                                                <div class="media-body mt-1">
                                                    <h5 class="media-heading mb-0"><?php echo $_SESSION['username'] ?></h5>
                                                    <a class="text-muted" href="#"><small><?php echo $_SESSION['email'] ?></small></a>
                                                </div>
                                                <a class="text-muted mt-2" target="_blank" href="<?=base_url()?>logout">
                                                    <i class="fa fa-angle-right mr-1"></i>
                                                    <small class="text-capitalize">sign out</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse mt-2">
                                    <div class="card-content">
                                        <form class="form form-vertical">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Username</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="url-vertical">Email</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </div>
                                            </div>=
                                            <label for="basicInputFile">Profile picture</label>
                                            <div class="form-group">
                                                <div action="#" class="dropzone dropzone-area" id="profilePicUpload">
                                                    <div class="dz-message">Upload Profile Picture</div>
                                                </div>
                                            </div>
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" checked>
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Set Active</span>
                                                </div>
                                            </fieldset>
                                            <button type="button" class="btn btn-primary mt-1 mb-1">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Account-end -->
                    <!-- Notification-begins -->
                    <div class="settings-notification mb-2">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pb-2">Notification</h4>
                            </div>
                            <div class="card-content">
                                <ul class="list-group notification">
                                    <li class="list-group-item d-flex pt-1 pb-1">
                                        <span>Update</span>
                                        <div class="custom-control custom-switch custom-switch-primary ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch6" checked>
                                            <label class="custom-control-label" for="customSwitch6"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Notification-end -->
                    <!-- Emails-begins -->
                    <div class="settings-emails mb-2">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title pb-2">Emails</h4>
                            </div>
                            <div class="card-content">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex pt-1 pb-1">
                                        <span>Anyone can send me an email</span>
                                        <div class="custom-control custom-switch custom-switch-primary ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch8" checked>
                                            <label class="custom-control-label" for="customSwitch8"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Emails-end -->
                    <!-- Security-begins -->
                    <div class="settings-security">
                        <div class="card collapse-icon accordion-icon-rotate">
                            <div class="card-header">
                                <h4 class="card-title">Security</h4>
                            </div>
                            <div class="card-body">
                                <div class="card collapse-header">
                                    <div id="headingCollapse2" class="">
                                        <div class="lead collapse-title" data-toggle="collapse" role="button" data-target="#collapse2" aria-expanded="false" aria-controls="collapse1">
                                            <div class="change-password">
                                                <span>Change password</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                                    <div class="card-content">
                                        <form class="form form-vertical">
                                            <div class="form-group">
                                                <label for="password-vertical1">Old Password</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password-vertical2">New Password</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password-vertical3">New Password again</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary mr-1 mb-1">Update</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="delete-account border-top pt-1">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteForm">
                                        Delete Account ?
                                    </button>
                                    <div class="modal fade text-left" id="deleteForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Delete Account</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <h5>Are you sure to delete your account? </h5>
                                                        <button type="button" class="btn btn-danger mr-1 my-1" data-dismiss="modal">Yes</button>
                                                        <button type="button" class="btn btn-primary my-1" data-dismiss="modal">No</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Security-end -->
                </section>
                <!-- Settings-end -->


        </div>
      </div>
    </div>
    <!-- END: Content-->

                <div class="sidenav-overlay"></div>
                <div class="drag-target"></div>

                <!-- BEGIN: Footer-->
                <footer class="footer footer-static footer-light">
                    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://www.celersolutions.ca/" target="_blank">Celer Solutions,</a>All rights Reserved</span>
                        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
                    </p>
                </footer>
                <!-- END: Footer-->


                <!-- BEGIN: Vendor JS-->
                <script src="<?=base_url()?>app-assets/vendors/js/vendors.min.js"></script>
                <!-- BEGIN Vendor JS-->

                <!-- BEGIN: Page Vendor JS-->
                <script src="<?=base_url()?>app-assets/vendors/js/extensions/dropzone.min.js"></script>
                <!-- END: Page Vendor JS-->

                <!-- BEGIN: Theme JS-->
                <script src="<?=base_url()?>app-assets/js/core/app-menu.js"></script>
                <script src="<?=base_url()?>app-assets/js/core/app.js"></script>
                <script src="<?=base_url()?>app-assets/js/scripts/components.js"></script>
                <!-- END: Theme JS-->

                <!-- BEGIN: Page JS-->
                <!-- script(src=app_assets_path+'/js/scripts/extensions/dropzone.js')script(src=app_assets_path+'/js/scripts/pages/user-settings.js')
    -->
                <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>