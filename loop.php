<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class("loop-post"); ?>>

		<p>
			<a href="<?php the_field('external_url'); ?>" title="<?php the_title(); ?>" target="_blank">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail("large"); ?>
			<?php endif; ?>
			<?php the_title(); ?><br><?php the_time('m.d.y'); ?></a>
		</p>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<p>Nothing yet!</p>
	</article>

<?php endif; ?>
