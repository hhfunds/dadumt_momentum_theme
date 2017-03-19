<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="fb:app_id" content="<?php echo of_get_option('FBComments_AppID'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<title>
			<?php
			if (is_home()) {
			bloginfo('name');
			bloginfo('description');
			} else {
			wp_title(' - ', true, 'right');
			bloginfo('name');
			} ?>
		</title>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory') ?>/assets/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.dropotron.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.slidertron.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/skel.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/skel-layers.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/init.js"></script>
		<?php if (momentum_ckan_status()): ?>
		<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-numerator.js"></script>
		<?php endif; ?>
		
		<noscript>
			<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/skel.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/ie/v8.css" /><![endif]-->
		<?php wp_site_icon() ?>
		<?php wp_head(); ?>
	</head>