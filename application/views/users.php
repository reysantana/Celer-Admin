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
    <title>Users</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/images/favicon.png">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/css/pages/data-list-view.css">
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
                <li class="active nav-item"><a href="<?=base_url()?>users"><i class="feather icon-users"></i><span class="menu-title" data-i18n="JSON">Users</span></a>
                </li>
                <li class=" nav-item"><a href="<?=base_url()?>settings"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Settings">Settings</span></a>
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
                            <h2 class="content-header-title float-left mb-0">Users List</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:deleteMultipleCols('<?=base_url()?>index.php/Users/deleteMultiple');">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>LICENSE</th>
                                    <th>STATUS</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) { 
                                $st = array(
                                    'PENDING' => '#7367F0', 
                                    'ACTIVE' => '#28C76F', 
                                    'INACTIVE' => '#EA5455'
                                )
                            ?>
                                <?php foreach($data_users as $key => $value) { ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $value->id ?></td>
                                        <td><?= $value->name ?></td>
                                        <td><?= $value->email ?></td>
                                        <td><?= $value->license ?></td>
                                        <td>
                                            <div class="con-vs-chip product-order-status vs-chip-primary con-color text-center" style="max-width: 100px; font-size: 12px; background-color: <?= $st[$value->status] ?>; padding: 5px 10px; border-radius: 20px;">
                                                <?= $value->status ?>
                                            </div>
                                        </td>
                                        <td style="padding: 0">
                                            <button type="button" class="btn" style="padding: 0" data-toggle="modal" data-target="#inlineForm" onclick="javascript:editCol('<?=$value->id?>', 
                                            '<?=$value->name?>', '<?=$value->email?>', '<?=$value->license?>', '<?=$value->status?>');">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn" style="padding: 0" onclick="javascript:deleteSingleCol('<?=base_url()?>index.php/Users/deleteSingle', <?=$value->id?>);">
                                                <i class="feather icon-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4>ADD NEW USER</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="new_name"> Name </label>
                                            <input type="text" class="form-control" id="new_name" name="new_name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="new_name"> Email </label>
                                            <input type="email" class="form-control" id="new_email" name="new_email">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="new_status"> Status </label>
                                            <select class="form-control" id="new_status" name="new_status">
                                                <option value="PENDING">Set User as PENDING</option>
                                                <option value="ACTIVE">Set User as ACTIVE</option>
                                                <option value="INACTIVE">Set User as INACTIVE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button postUrl="<?=base_url()?>index.php/Users/add" id="add-data-button" class="btn btn-primary">Add User</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Edit JSON</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <fieldset class="form-group d-none">
                                            <input type="text" class="form-control" placeholder="ID" id="edit_id">
                                        </fieldset>
                                        <label for="edit_name"> Name </label>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" id="edit_name">
                                        </fieldset>
                                        <label for="edit_email"> Email </label>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" id="edit_email">
                                        </fieldset>
                                        <label for="edit_license"> License </label>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" placeholder="License" id="edit_license" disabled>
                                        </fieldset>
                                        <label for="edit_status"> Status </label>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="edit_status">
                                                <option value="PENDING">Set User As PENDING</option>
                                                <option value="ACTIVE">Set User As ACTIVE</option>
                                                <option value="INACTIVE">Set User As INACTIVE</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                <span class="alert-text"></span>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:updateCol('<?=base_url()?>index.php/Users/edit', document.getElementById('edit_id').value);">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Data list view end -->

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
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url()?>app-assets/js/core/app-menu.js"></script>
    <script src="<?=base_url()?>app-assets/js/core/app.js"></script>
    <script src="<?=base_url()?>app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url()?>app-assets/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->
    <script>
        function editCol(id, name, email, license, status) {
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            $('#edit_email').val(email);
            $('#edit_license').val(license);
            $('#edit_status').val(status);
        }

        function updateCol(url, id) {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    id: $('#edit_id').val(), 
                    name: $('#edit_name').val(), 
                    email: $('#edit_email').val(), 
                    license: $('#edit_license').val(), 
                    status: $('#edit_status').val()
                },
                success: function(data, status, xhr) {
                    console.log(data + " " + status);
                    location.reload();
                },
                error: function(xhr, status, err) {
                    console.log(status + " " + err);
                }, 
                dataType: 'json'
            });
        }

        function deleteMultipleCols(url) {
            let table = $('table.data-list-view');
            let idsArr = new Array();
            table.find('.field_id').each(function() {
                let obj = $(this);
                if ($(obj).parent().hasClass('selected') == true) {
                    idsArr.push($(obj).text());
                }
            });

            if (idsArr.length > 0) {
                let ids = idsArr.join(",");

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        ids: ids
                    },
                    success: function(data, status, xhr) {
                        console.log(data + " " + status);
                        location.reload();
                    },
                    error: function(xhr, status, err) {
                        console.log(status + " " + err);
                    }, 
                    dataType: 'json'
                });
            }
        }

        function deleteSingleCol(url, id) {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    id: id
                },
                success: function(data, status, xhr) {
                    console.log(data + " " + status);
                    location.reload();
                },
                error: function(xhr, status, err) {
                    console.log(status + " " + err);
                }, 
                dataType: 'json'
            });
        }
    </script>
</body>
<!-- END: Body-->

</html>