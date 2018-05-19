<?php get_header(); ?>

	<section class="top-bar"></section>
	<section class="bottom-bar"></section>

	<main role="main">

		<section class="page-wrap">

			<section class="page-content">

				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>

			</section>

		</section>

	</main>

<?php get_footer(); ?>
