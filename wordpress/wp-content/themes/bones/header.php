<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>	

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i" rel="stylesheet">

		<!-- Menu FullScreenOverlay -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/fullscreenoverlay/css/normalize.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/fullscreenoverlay/css/style1.css"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/animate.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/fullscreenoverlay/css/demo.css" />

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<!-- Boostrap -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css"/>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- BX SLIDER -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/bxslider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="<?php echo get_template_directory_uri(); ?>/library/bxslider/jquery.bxslider.css" rel="stylesheet" />

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">
			<header id="header">
				<div class="wrap">
					<div class="m-all t-all d-all center">
						<a href="<?php echo get_template_directory_uri(); ?>" class="animated fadeInDown" id="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"/>
						</a>
					</div>
					<div class="d40">
						<div class="text-left animated fadeInLeft">
							<span class="legend">SUAS HISTÓRIAS EM QUADRINHOS...</span>
						</div>
						<div class="text-right animated fadeInRight">
							<span class="legend">...REUNIDAS EM UM SÓ LUGAR!</span>
						</div>
						<div class="center">
							<a href="#last-comics" id="button-down"><span class="glyphicon">&#xe259;</span></a>
						</div>
					</div>
					<button id="trigger-overlay" type="button">
						<span class="glyphicon glyphicon-option-horizontal"></span>
					</button>
				</div>
			</header>
