<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"  lang="en"> <![endif]-->
<!--[if IE 7 ]> <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- meta begins -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!--fev-->
        <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assert/fontend/fev/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assert/fontend/fev/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assert/fontend/fev/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assert/fontend/fev/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assert/fontend/fev/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assert/fontend/fev/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assert/fontend/fev/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assert/fontend/fev/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assert/fontend/fev/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url() ?>assert/fontend/fev/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assert/fontend/fev/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assert/fontend/fev/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assert/fontend/fev/favicon-16x16.png">
        <link rel="manifest" href="<?= base_url() ?>assert/fontend/fev/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= base_url() ?>assert/fontend/fev/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- meta ends -->
        <!-- title begins -->
        <title></title>
        <!-- title ends -->
        <!-- stylesheet begins -->
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url("assert/fontend/fontawesome/web-fonts-with-css/css/fontawesome-all.css") ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url("assert/fontend/css/bootstrap.css") ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url("assert/fontend/css/style.css") ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url("assert/fontend/css/public.css") ?>" type="text/css" />
        <script type="text/javascript" src="<?= base_url("assert/fontend/jquery/jquery-3.3.1.js"); ?>"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>assert/fontend/toastr/toastr.min.css">
        <!-- Toastr -->
        <script src="<?= base_url(); ?>assert/fontend/toastr/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?= base_url("assert/fontend/js/bootstrap.js"); ?>"></script>
        <script src="<?= base_url(); ?>assert/fontend/js/bootbox.all.min.js"></script>

        <!-- stylesheet ends -->
    </head>


    <body>
        <div id="sliced-loading">
            <div class="loading">
                <img src="<?= base_url("assert/fontend/img/logo.png") ?>">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- Nav bar begins -->
        <div class="top-nav">
            <div class="container">
                <a href="<?= base_url(); ?>">
                    <img class="img-responsive logo" src="<?= base_url("assert/fontend/img/logo.png") ?>">
                </a>
                <div class="user">
                    <?php
                    if ($this->session->has_userdata("user_login")) {
                        if (!empty($wallet)) {
                            ?>
                            <a href="<?= base_url("wallet") ?>">
                                <div class="wallet carte-notification">
                                    <img class="img-responsive" src="<?= base_url("assert/fontend/img/wallet-01.svg") ?>">
                                    <?php
                                    if ($wallet[0]->cr > 0) {
                                        ?>
                                        <div class="notification">
                                            <?= $wallet[0]->cr ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </a>
                            <?php
                        }
                    }
                    ?>
                    <a href="<?= base_url("ala-cart-sliced") ?>">
                        <div class="carte-notification">
                            <img class="img-responsive" src="<?= base_url("assert/fontend/img/carte.svg") ?>">
                            <div class="notification" id="cart-notification">
                                0
                            </div>
                        </div>
                    </a>
                    <?php
                    if ($this->session->has_userdata("user_login")) {
                        ?>
                        <div class="btn-group">    
                            <img class="img-responsive" src="<?= base_url("assert/fontend/img/user-01.svg") ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-menu dropdown-menu-right dd-bg">
                                <h6 class="dropdown-header"><?= ($this->session->has_userdata("user_login")) ? $this->session->userdata("user")->username : ""; ?></h6>
                                <a class="dropdown-item" href="<?= base_url("profile") ?>"><?= $this->lang->line("fn_profile"); ?></a>
                                <a class="dropdown-item" href="<?= base_url("profile/changepassword") ?>"><?= $this->lang->line("fn_chnage_password"); ?></a>
                                <a class="dropdown-item" href="<?= base_url("logout"); ?>"><?= $this->lang->line("fn_logout"); ?></a>
                            </div>
                        </div>
                        <img class="img-responsive dd-icon" src="<?= base_url("assert/fontend/img/dd_icon.png") ?>">
                        <div class="dd-text">
                            <ul>
                                <li><a class="menu-link" href="<?= base_url("address"); ?>"><?= $this->lang->line("fn_manage_add"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("subscription/manaage"); ?>"><?= $this->lang->line("fn_subscription_manaage"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("orderhistory"); ?>"><?= $this->lang->line("fn_manage_order"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("orderhistory"); ?>"><?= $this->lang->line("fn_com_order"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("wallet/subscription"); ?>"><?= $this->lang->line("fn_payment"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("wallet/add-to-cart"); ?>"><?= $this->lang->line("fn_add_credit"); ?></a></li>
                            </ul>
                            
                        </div>
                        <?php
                    } else {
                        ?>
                        <img class="img-responsive dd-icon" src="<?= base_url("assert/fontend/img/dd_icon.png") ?>">
                        <div class="dd-text">
                            <ul>
                                <li><a class="menu-link" href="<?= base_url("login"); ?>"><?= $this->lang->line("fn_login"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("signup"); ?>"><?= $this->lang->line("fn_sign"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("wallet/add-to-cart"); ?>"><?= $this->lang->line("fn_add_credit"); ?></a></li>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="<?= base_url("about-us") ?>"><?= $this->lang->line("fn_about_us"); ?></a>
                            <a class="nav-item nav-link" href="<?= base_url("learn") ?>"><?= $this->lang->line("fn_learn"); ?></a>
                            <a class="nav-item nav-link" href="<?= base_url("ordernow") ?>"><?= $this->lang->line("fn_order_now"); ?></a>
                            <a class="nav-item nav-link" href="<?= base_url("faq") ?>"><?= $this->lang->line("fn_faq"); ?></a>
                            <a class="nav-item nav-link" href="<?= base_url("contactus") ?>"><?= $this->lang->line("fn_contact_us"); ?></a>
                            <a class="nav-item nav-link" href="<?= base_url("blog") ?>"><?= $this->lang->line("fn_blog"); ?></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Nav bar over -->