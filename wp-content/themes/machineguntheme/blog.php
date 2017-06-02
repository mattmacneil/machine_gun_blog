<?php
/*
 * Template Name: BlogList
 * Description: Listing Page for Blog Articles.
 */

	get_header(); ?>

	<?php get_template_part( 'template-parts/hero' ); ?>

	<div class="blog-card-container">

		<a href="xxxx" class="noline">
		<div class="blog-card">

			<div class="blog-card-left">

				<div class="blog-card-left-inner">

					<div class="blog-card-image">

						hi

					</div><!-- blog card image -->

					<div class="blog-card-date">

						hi

					</div><!-- blog card date -->

				</div><!-- blog card left-inner -->

			</div><!-- blog card left -->

			<div class="blog-card-right">

				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</div><!-- blog card right -->

		</div><!-- blog card -->

	</div><!-- blog card container -->
	</a>


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