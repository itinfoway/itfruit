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
                    <div class="wallet carte-notification">
                        <img class="img-responsive" src="<?= base_url("assert/fontend/img/wallet-01.svg") ?>">
                        <div class="notification">
                            2000
                        </div>
                    </div>
                    <div class="carte-notification">
                        <img class="img-responsive" src="<?= base_url("assert/fontend/img/carte.svg") ?>">
                        <div class="notification" id="cart-notification">
                            25
                        </div>
                    </div>
                    <?php
                    if ($this->session->has_userdata("user_login")) {
                        ?>
                        <div>
                            <a href="<?= base_url("profile") ?>"><h1><?= $this->lang->line("fn_welcome"); ?> <?= ($this->session->has_userdata("user_login")) ? $this->session->userdata("user")->username : ""; ?> </h1></a>
                        </div>


                        <img class="img-responsive" src="<?= base_url("assert/fontend/img/user-01.svg") ?>">

                        <img class="img-responsive dd-icon" src="<?= base_url("assert/fontend/img/dd_icon.png") ?>">
                        <div class="dd-text">
                            <ul>
                                <li><a class="menu-link" href="<?= base_url("address"); ?>"><?= $this->lang->line("fn_manage_add"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("subscription"); ?>"><?= $this->lang->line("fn_sub"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("orderhistory"); ?>"><?= $this->lang->line("fn_manage_order"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("orderhistory"); ?>"><?= $this->lang->line("fn_com_order"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("payments"); ?>"><?= $this->lang->line("fn_payment"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("favourites"); ?>"><?= $this->lang->line("fn_fav"); ?></a></li>
                                <li><a class="menu-link" href="<?= base_url("logout"); ?>"><?= $this->lang->line("fn_logout"); ?></a></li>
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
                            <a class="nav-item nav-link" href="<?= base_url("aboutus") ?>"><?= $this->lang->line("fn_about_us"); ?></a>
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