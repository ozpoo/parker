<?php get_header(); ?>

	<main role="main">

		<section id="mycursor">
			<div class="left">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.06 51.06" height="51.06" width="76.06"><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><line x1="76.06" y1="25.53" x2="1.06" y2="25.53" style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:1.5px"/><polyline points="26.06 50.53 1.06 25.53 26.06 0.53" style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:1.5px"/></g></g></svg>
			</div>
			<div class="right">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.06 51.06" height="51.06" width="76.06"><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><line y1="25.53" x2="75" y2="25.53" style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:1.5px"/><polyline points="50 0.53 75 25.53 50 50.53" style="fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:1.5px"/></g></g></svg>
			</div>
		</section>
 
		<section class="slideshow">

			<?php while (have_posts()) : the_post(); ?>

				<?php if( have_rows('slides') ): ?>

					<section class="slides">

						<section class="slides-navigation">
							<div class="navigate-left"></div>
							<div class="navigate-right"></div>
						</section>

						<?php $slideCount = 0; ?>

						<?php while( have_rows('slides') ): the_row(); ?>

							<section class="slide" data-slide=<?php echo $slideCount++; ?>>

								<?php if( have_rows('layers') ): ?>

							   <?php while ( have_rows('layers') ) : the_row(); ?>

							        <?php if( get_row_layout() == 'image' ): ?>
												<?php
													$image = get_sub_field('image');
													$mobile = get_sub_field('mobile');
													$sizing = get_sub_field('sizing');
													$padding = get_sub_field('padding');
													$background = get_sub_field('background');
													$color = get_sub_field('color');
												?>
												<section class="frame" <?php if($background) echo 'style="background-color:'.$color.'"'; ?>>
													<figure class="image <?php if($padding) echo ' padded'; ?>" >
														<?php
															$img_atts = wp_get_attachment_image_src( $image['id'], 'small' );
															$img_src_low_res = $img_atts[0];

															$img_atts = wp_get_attachment_image_src( $image['id'], 'slideshow' );
															$img_src_high_res = $img_atts[0];

															$img_atts = wp_get_attachment_image_src( $image['id'], 'full' );
															$img_src_full = $img_atts[0];

															$img_atts = wp_get_attachment_image_src( $mobile['id'], 'full' );
															$img_src_mobile = $img_atts[0];
														 ?>
														 <!-- <?php if($slideCount == 1): ?>
															<img src="<?php echo $img_src_high_res; ?>" style="object-fit:<?php echo $sizing; ?>;" />
														<?php else: ?>
															<img src="<?php echo $img_src_low_res; ?>" data-high="<?php echo $img_src_high_res; ?>"  style="object-fit:<?php echo $sizing; ?>;" class="low_res" />
														<?php endif; ?> -->

														<?php if($mobile): ?>
															<picture>
																<source media="(max-width: 568px)"
														      srcset="<?php echo $img_src_mobile; ?>" />
																<img src="<?php echo $img_src_full; ?>" style="object-fit:<?php echo $sizing; ?>;" />
																<!-- <img
																	alt=""
																	src="<?php echo wp_get_attachment_image_src($image, 'h01')[0]; ?>"
																	data-size="<?php echo $size; ?>"
																	data-src="<?php echo wp_get_attachment_image_src($image, $sizes[$size])[0]; ?>"
																	class="lazyload" /> -->
															</picture>
														<?php else: ?>
															<img src="<?php echo $img_src_full; ?>" style="object-fit:<?php echo $sizing; ?>;" />
														<?php endif; ?>
													</figure>
												</section>


							        <?php elseif( get_row_layout() == 'video' ): ?>
												<?php
												$image = get_sub_field('image');
												$sizing = get_sub_field('sizing');
												$padding = get_sub_field('padding');
												$background = get_sub_field('background');
												$color = get_sub_field('color');
												?>
												<section class="frame" <?php if($background) echo 'style="background-color:'.$color.'"'; ?>>
													<figure class="video<?php if($padding) echo ' padded'; ?>">
														<video src="<?php echo $video['url']; ?>" style="object-fit:<?php echo $sizing; ?>;"></video>
													</figure>
												</section>

						        <?php endif; ?>

							    <?php endwhile; ?>

								<?php endif; ?>

							</section>

						<?php endwhile; ?>

					</section>

				<?php endif; ?>

			<?php endwhile; ?>

		</section>

	</main>

<?php get_footer(); ?>
