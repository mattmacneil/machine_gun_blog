<?php
/*
 * Template Name: BlogList
 * Description: Listing Page for Blog Articles.
 */

	get_header(); ?>

	<?php get_template_part( 'template-parts/hero' ); ?>

	<div class="content-wrapper">

		<div class="blog-card-container">

<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged
  );
  $the_query = new WP_Query( $query_args );
?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

			<div class="blog-card">

				<div class="blog-card-left">

					<div class="blog-card-left-inner">

						<div class="blog-card-image-container">

							<div class="blog-card-image" style="background-image: url('<?php 

								if ( has_post_thumbnail() ) {
									the_post_thumbnail_url(); }
										else {
											echo bloginfo('template_directory');
											echo '/assets/images/blog-card-image-default.jpg';
										}

									?>');">

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

	<?php if ($the_query->max_num_pages > 1) {   ?>

	    <div class="blog-page-links">

	      <span class="newer">
	      <?php echo get_previous_posts_link( '&laquo; newer shit' ); link ?>
	      </span>

	      <span class="older">
	      	<?php echo get_next_posts_link( 'older shit &raquo;', $the_query->max_num_pages ); ?>
	      </span>

	      <div class="clearfix"></div>

	    </div><!-- blog page links -->

	<?php } ?>

	<?php else: ?>
	  <article>
	    <p>Sorry...</p><br />
	    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  </article>
	<?php endif; ?>

		</div><!-- blog card container -->

	</div><!-- content wrapper -->

	<?php get_footer(); ?>