<?php
/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= basename(substr(base_url(), 0, strrpos(base_url(), '.'))); ?> | <?= $this->router->class ?> | <?= $this->router->method ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url(); ?>assert/admin/plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="<?= base_url(); ?>assert/admin/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assert/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= base_url(); ?>assert/admin/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assert/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Select2 -->
        <!-- jQuery -->
        <script src="<?= base_url(); ?>assert/admin/plugins/jquery/jquery.min.js"></script>

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-oreange navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("logout") ?>">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <span class="brand-text font-weight-light">Sliced</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                      <div class="image">
                        <img src="<?= base_url(); ?>assert/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                              </div>
                              <div class="info">
                                <a href="#" class="d-block">Alexander Pierce</a>
                              </div>
                            </div> -->

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" id="lSideMenu" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                                 with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="<?= base_url("admin/"); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Users
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="display: none;">
                                    <li class="nav-item">
                                        <a href="<?= base_url("admin/users"); ?>" class="nav-link">
                                            <i class="far fa-eye nav-icon"></i>
                                            <p>View</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url("admin/users/add"); ?>" class="nav-link">
                                            <i class="far fa-save nav-icon"></i>
                                            <p>Add</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--                            <li class="nav-item has-treeview">
                                                            <a href="#" class="nav-link">
                                                                <i class="nav-icon fas fa-address-book"></i>
                                                                <p>
                                                                    Contacts
                                                                    <i class="right fas fa-angle-left"></i>
                                                                </p>
                                                            </a>
                                                            <ul class="nav nav-treeview" style="display: none;">-->
                            <li class="nav-item">
                                <a href="<?= base_url("admin/contacts"); ?>" class="nav-link">
                                    <i class="fas fa-address-book nav-icon"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                              <a href="<?= base_url("admin/contacts/add"); ?>" class="nav-link">
                        <i class="far fa-save nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                        </ul>
                    </li> -->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas  fa-cart-plus"></i>
                                    <p>
                                        Products
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-luggage-cart nav-icon"></i>
                                            <p>
                                                Subscription
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/product/subscription"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/product/subscription/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-shopping-cart nav-icon"></i>
                                            <p>
                                                Ala Carte
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/product/ala-carte"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/product/ala-carte/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Setting
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-comments nav-icon"></i>
                                            <p>
                                                FAQ
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/faq"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/faq/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-capsules nav-icon"></i>
                                            <p>
                                                Vitamin
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/vitamin"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/vitamin/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-apple-alt nav-icon"></i>
                                            <p>
                                                Fruit
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/fruit"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/fruit/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-handshake nav-icon"></i>
                                            <p>
                                                Partner
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/partner"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/partner/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-person-booth nav-icon"></i>
                                            <p>
                                                What people say
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/people"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/people/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-sliders-h nav-icon"></i>
                                            <p>
                                                Sliders
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/slidermain"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/slidermain/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-calendar-day nav-icon"></i>
                                            <p>
                                                Day of loading
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/order-loading"); ?>" class="nav-link">
                                                    <i class="far fa-eye nav-icon"></i>
                                                    <p>View</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?= base_url("admin/setting/order-loading/add"); ?>" class="nav-link">
                                                    <i class="far fa-save nav-icon"></i>
                                                    <p>Add</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <script>
                $(document).ready(function () {
                    var url = '<?= str_replace("_", "-", $this->router->directory . (($this->router->class != "") ? $this->router->class : "") . (($this->router->method != "" && $this->router->method != "index") ? "/" . $this->router->method : "")) ?>';
                    $("a[href$='" + url + "']").addClass("active");
                    $(".active").parents("ul").show();
                    $(".active").parents("li").addClass("menu-open");
                    $(".menu-open").children("a").addClass("active");
                });
            </script>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">

                    <br>