<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<!-- Link framework CSS files here -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/boilerplate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frameworks/bootstrap-3.3.7/css/bootstrap.min.css">

		<!-- Link all external fonts here -->

    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,700,200' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

		<!-- Link the main style.css here -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comments.css">

		<!-- Link additional CSS files here -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">



		<?php wp_head(); ?>

	</head>


	<body <?php body_class(); ?>>
