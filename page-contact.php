<?php get_header(); ?>

	<section class="top-bar"></section>
	<section class="bottom-bar"></section>

	<div class="crosser"></div>
	
	<main role="main">

		<section class="page-wrap">

		<?php while (have_posts()) : the_post(); ?>

			<article class="page-content">

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

		</section>

	</main>

<?php get_footer(); ?>
