<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<title>SpaceX</title>
</head>

<body class="body body-wrap">
	<header class="header">
		<div class="header__wrap">
			<div class="header__logo site-logo">
				<?php the_custom_logo(); ?>
			</div>
			<button class="header-nav__burger burger"></button>
			<nav class="header__nav header-nav">
				<?php
				global $post;

				$myposts = get_posts([
					'numberposts' => 1,
					'category_name' => 'headerMenu'
				]);


				if ($myposts) {
					foreach ($myposts as $post) {
						setup_postdata($post);
				?>

						<?php the_content() ?>

				<?php }
				}
				wp_reset_postdata(); ?>
			</nav>
		</div>
	</header>