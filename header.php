<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
		
	<title><?php wp_title('@',true,'right'); ?><?php bloginfo('name'); ?></title>
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/png" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body class="<?php if(is_home()) {echo 'home ';} if(!is_home()) {echo 'not-home ';} ?>">