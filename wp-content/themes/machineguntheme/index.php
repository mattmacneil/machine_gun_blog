<?php 

	get_header();
	get_template_part( 'template-parts/hero' );

?>


	<div class="doubleside">

		<div class="content-wrapper">

			<div class="col-content">

				<div class="col-content-one">

					<span>&raquo;</span>

				</div><!-- one -->

				<div class="col-content-two">

					<?php if (have_posts()) : while (have_posts()) : the_post();

							the_content();

						endwhile;
						endif;
					?>

				</div><!-- two -->

				<div class="col-content-three">

					<?php get_sidebar(); ?>

				</div><!-- three -->

				<div class="clearfix"></div>

			</div><!-- rap -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

	<?php wp_footer(); ?>

<?php get_footer(); ?>