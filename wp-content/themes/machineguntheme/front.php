<?php
/*
 * Template Name: FrontPage
 * Description: Front Page.
 */

get_header(); ?>

	<div class="hero">

		<div class="hero-overlay">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<div class="hero-container hero-content-transparent">

				<div class="content-wrapper sidepad hero-content-pad">

					<div class="hero-content-innerpad hero-content-transparent">

						<?php 
							$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
							if( ! empty( $pageheadline ) ) {
								echo '<h1>' . $pageheadline . '</h1>';
							}
						?>

						<p>
								Machine Gun Studios is an intimate and boutique studio to lay down all your recording dreams with a stunning gear list, a singular ear to facilitate the process, and crazy amounts of atmospheric charm.
						</p>

					</div><!-- hero content rightpad -->

				</div><!-- hero content wrapper -->

			</div><!-- hero background -->

			<div class="hero-underbar hero-content-transparent">
			</div><!-- hero underbar -->

		</div><!-- hero overlay -->
	
	</div><!-- hero -->

	<?php wp_list_pages( '&title_li=' ); ?>

	<?php get_footer(); ?>