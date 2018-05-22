<?php get_header(); ?>

	<section class="top-bar"></section>
	<section class="bottom-bar"></section>

	<div class="crosser"></div>

	<main role="main">

		<section class="page-wrap">

		<?php while (have_posts()) : the_post(); ?>

			<article class="page-content">

				<?php the_content(); ?>

				<?php
					if( have_rows('capabilities') ):
						echo '<section class="capabilities">';
				    while ( have_rows('capabilities') ) : the_row();
							echo '<div>';
				        echo '<span class="title">';
									the_sub_field('title');
								echo '</span><br>';
								echo the_sub_field('list');
							echo '</div>';
				    endwhile;
						echo '</section>';
					endif;

				?>

				<p>Developed by <a href="http://ericandren.com" target="_blank">Eric 'Oz' Andren</a>.</p>

			</article>

		<?php endwhile; ?>

		</section>

	</main>

<?php get_footer(); ?>
