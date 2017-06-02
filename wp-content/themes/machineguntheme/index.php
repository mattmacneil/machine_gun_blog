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

					<div class="col-content-one-ad">

						<span class="secondary">This is a thing by Machine Gun Studios.</span><br />

						<p>
							MGS is a full-service studio in Jamaica Plain, Massachusetts. Check out more of my stuff, take a look at the studio, and get in touch to work with me in-house.
						</p>

						<a href="blog">See More Posts</a><br />
						<a href="<?php echo home_url(); ?>">Check Out MGS</a>

					</div><!-- col content one ad -->

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