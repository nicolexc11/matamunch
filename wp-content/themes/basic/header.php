<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sidebar.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body>
  <div class="container">

  <div id="sidebar">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<li><a href="<?php bloginfo('url'); ?>/areas">Areas</a></li>
			<li><a href="<?php bloginfo('url'); ?>/directory">Directory</a></li>
			<li><a href="javascript:javascript:history.go()">Back</a>
		</ul>
	</div>

	<div class="main-content">
		<div class="swipe-area"></div>
		<a href="#" data-toggle=".container" id="sidebar-toggle">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
	
	<div class="header">
		<div class="logo"><h1>MataMunch</h1></div>
	</div>
	<div class="content row">
