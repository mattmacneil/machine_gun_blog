<?php
/*
 * Template Name: BlogList
 * Description: Listing Page for Blog Articles.
 */

	get_header(); ?>

	<?php get_template_part( 'template-parts/hero' ); ?>

	<div class="blog-card-container">

		<div class="blog-card">

			<div class="blog-card-left">

				hi

			</div><!-- blog card left -->

			<div class="blog-card-right">

				<p class="pslug">hi</p>

			</div><!-- blog card right -->

		</div><!-- blog card -->

	</div><!-- blog card container -->


	<div style="height: 100px;"></div>

	<?php $custom_query = new WP_Query('cat=-42069');
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
	<div style="height: 100px;"></div>

	<?php get_footer(); ?>