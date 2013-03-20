<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<?php // Meta tags ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
	
	<?php // Stylesheets ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	
	<?php // Wordpress hook ?>
	<?php wp_head(); ?>
</head>
<body>