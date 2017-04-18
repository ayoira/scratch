<!doctype html>
<html lang="en">

<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/main.css">
</head>

<body>
	<header>
		<h1><?php echo get_bloginfo( 'name' ); ?></h1>
		<nav>
			<a href="<?php echo home_url(); ?>">Blog</a>
			<a href="<?php echo home_url(); ?>/sample-page">Sample Page</a>
		</nav>
	</header>
