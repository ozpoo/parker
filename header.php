<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<?php if(is_page("Home")){ ?>
			<section class="intro">
				<section class="top-left">
					<p>Flint</p>
				</section>
				<section class="board"></section>
			</section>
		<?php } ?>

		<header class="header" role="banner">

				<nav class="nav" role="navigation">
					<section class="top-left">
						<p><a href="/">Flint</a></p>
					</section>
					<section class="top-right">
						<p><?php if(is_page("Studio")){echo '<a href="/">Close';}else{echo '<a href="/studio">Studio';} ?></a></p>
					</section>
					<section class="bottom-left">
						<p><a href="/news"><?php if(is_page("News")){echo '<a href="/">Close';}else{echo '<a href="/news">News';} ?></a></p>
					</section>
					<section class="bottom-right">
						<p><a href="/contact"><?php if(is_page("Contact")){echo '<a href="/">Close';}else{echo '<a href="/contact">Contact';} ?></a></p>
					</section>
				</nav>

		</header>