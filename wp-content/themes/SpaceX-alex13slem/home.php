<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<main class="main">
	<div class="main__wrap">
		<div class="main__proposal">
			<?php
			global $post;

			$myposts = get_posts([
				'numberposts' => 1,
				'category_name' => 'pageTitle'
			]);


			if ($myposts) {
				foreach ($myposts as $post) {
					setup_postdata($post);
			?>

					<?php the_content() ?>

			<?php }
			}
			wp_reset_postdata(); ?>
			<form class="proposal__form">
				<!-- <?php echo do_shortcode('[contact-form-7 id="15" title="Контактная форма"]') ?> -->
				<button class="proposal__btn" type="submit">
					Начать путешествие
					<div></div>
				</button>
			</form>
		</div>
		<div class="main__cards main-cards">

			<?php
			global $post;

			$myposts = get_posts([
				'numberposts' => 4,
				'category_name' => 'cards'
			]);


			if ($myposts) {
				foreach ($myposts as $post) {
					setup_postdata($post);
			?>

					<article class="main-cards__article article">
						<?php the_content() ?>
					</article>

			<?php }
			}
			wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>