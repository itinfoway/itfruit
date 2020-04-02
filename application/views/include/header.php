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
	<!-- stylesheet ends -->
</head>


<body>
	<!-- Nav bar begins -->
	<div class="top-nav">
		<div class="container">
			<a href="<?= base_url(); ?>">
				<img class="img-responsive logo" src="<?= base_url("assert/fontend/img/logo.png") ?>">
			</a>
			<div class="user">
				<img class="img-responsive" src="<?= base_url("assert/fontend/img/wallet-01.svg") ?>">
				<?php
				if ($this->session->has_userdata("user_login")) {
				?>
					<div>
						<h1> WELCOME <?= ($this->session->has_userdata("user_login")) ? $this->session->userdata("user")->username : ""; ?> </h1>
					</div>
					
				
						<img class="img-responsive" src="<?= base_url("assert/fontend/img/user-01.svg") ?>">
					
					<img class="img-responsive dd-icon" src="<?= base_url("assert/fontend/img/dd_icon.png") ?>">
					<div class="dd-text">
						<ul>
							<li><a class="menu-link" href="<?= base_url("address"); ?>">MANAGE ADDRESS</a></li>
							<li><a class="menu-link" href="<?= base_url("subscription"); ?>">SUBSCRIPTION</a></li>
							<li><a class="menu-link" href="<?= base_url("orderhistory"); ?>">MANAGE ORDER</a></li>
							<li><a class="menu-link" href="<?= base_url("orderhistory"); ?>">COMPLATE ORDER</a></li>
							<li><a class="menu-link" href="<?= base_url("payments"); ?>">PAYMENTS</a></li>
							<li><a class="menu-link" href="<?= base_url("favourites"); ?>">FAVOURITES</a></li>
							<li><a class="menu-link" href="<?= base_url("logout"); ?>">LOGOUT</a></li>
						</ul>
					</div>
				<?php
				} else {
				?>
					<img class="img-responsive dd-icon" src="<?= base_url("assert/fontend/img/dd_icon.png") ?>">
					<div class="dd-text">
						<ul>
							<li><a class="menu-link" href="<?= base_url("login"); ?>">Login</a></li>
							<li><a class="menu-link" href="<?= base_url("signup"); ?>">Sign Up</a></li>
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
						<a class="nav-item nav-link" href="<?= base_url("aboutus") ?>"><?=$this->lang->line("fn_about_us"); ?></a>
						<a class="nav-item nav-link" href="<?= base_url("learn") ?>">LEARN</a>
						<a class="nav-item nav-link" href="<?= base_url("ordernow") ?>">ORDER NOW</a>
						<a class="nav-item nav-link" href="<?= base_url("faq") ?>">FAQ</a>
						<a class="nav-item nav-link" href="<?= base_url("contactus") ?>">CONTACT US</a>
						<a class="nav-item nav-link" href="<?= base_url("blog") ?>">BLOG</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Nav bar over -->