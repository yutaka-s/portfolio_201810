<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-title" content="PORTFOLIO">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<!--meta/titleEnd-->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="apple-mobile-web-app-title" content="PORTFOLIO">
		<meta name="application-name" content="PORTFOLIO">
		<meta name="msapplication-TileColor" content="#00aba9">
		<meta name="theme-color" content="#ffffff">
		<!--faviconEnd-->
		<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/import.less">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.8.1/less.min.js"></script>
		<!--font/css/jsEnd-->
		<?php wp_head(); ?>
	</head><!--headEnd-->
	<body <?php body_class(); ?>>
		<header>
			<div id="spHeader">
				<a class="siteTitle" href="/">PORTFOLIO</a>
				<i class="toggleOpen fas fa-bars"></i>
			</div><!--spHeaderEnd-->
			<div id="mv">
				<div class="mvSlider">
					<div class="pcMv">
						<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
					</div>
					<div class="spMv">
						<?php echo do_shortcode('[smartslider3 slider=3]'); ?>
					</div>
				</div>
				<h1>
					<a href="/">
						<span class="mainTitle">PORTFOLIO</span>
						<span class="subTitle">〜佐藤豊のポートフォリオ用Webサイト〜</span>
					</a>
				</h1>
				<nav id="globalNav">
					<?php get_nav('header_nav'); ?>
				</nav><!--navEnd-->
			</div><!--mvEnd-->
		</header><!--headerEnd-->
