<?php
/*
 * Template Name: RecordingMixing
 * Description: Recording & Mixing pages.
 */

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

					<?php

						$recordmixcontent = get_post_meta( get_the_ID(), 'recordmixcontent', true);
						if( ! empty( $recordmixcontent ) ) {
							echo $recordmixcontent;
						}
							else {
								echo '<h1>All The Latest From Machine Gun Studios.</h1>';
							}
							
					?>

				</div><!-- two -->

				<div class="col-content-three">

					<?php get_sidebar(); ?>

				</div><!-- three -->

				<div class="clearfix"></div>

			</div><!-- rap -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

<?php
	get_footer(); 
?>