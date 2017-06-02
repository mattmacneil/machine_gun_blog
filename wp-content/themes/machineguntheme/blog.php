<?php
/*
 * Template Name: BlogList
 * Description: Listing Page for Blog Articles.
 */

	get_header(); ?>

	<?php get_template_part( 'template-parts/hero' ); ?>

	<div class="content-wrapper">

		<div class="blog-card-container">

			<?php $custom_query = new WP_Query('cat=-42069');
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<div class="blog-card">

				<div class="blog-card-left">

					<div class="blog-card-left-inner">

						<div class="blog-card-image-container">

							<div class="blog-card-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

								<div class="blog-card-image-overlay">
								</div><!-- blog card image overlay -->

							</div><!-- blog card image -->

						</div><!-- blog card image -->

						<div class="blog-card-date">

							<?php the_time('dMy'); ?>

						</div><!-- blog card date -->

					</div><!-- blog card left-inner -->

				</div><!-- blog card left -->

				<div class="blog-card-right">

					<a href="<?php the_permalink(); ?>" class="title">
						<?php the_title(); ?>
					</a>

					<em>By: <?php the_author(); ?></em>

					<?php $blog_card_content = get_the_content(); echo mb_strimwidth($blog_card_content, 0, 175, '...');?>

					<a href="<?php the_permalink(); ?>" class="noline blog-card-button">read it &raquo;</a>

				</div><!-- blog card right -->

			</div><!-- blog card -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div><!-- blog card container -->

</div><!-- content wrapper -->



	<div style="height: 100px;"></div>

	<?php $custom_query = new WP_Query('cat=-42069');
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<div style="height: 100px;"></div>

	<?php get_footer(); ?>