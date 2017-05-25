<?php
/*
 * Template Name: FrontPage
 * Description: Front Page.
 */

get_header(); ?>

	<div class="hero">

		<div class="hero-overlay">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<div class="hero-container">

				<div class="content-wrapper sidepad hero-content-pad">

					<div class="hero-content-innerpad">

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

		</div><!-- hero overlay -->
	
	</div><!-- hero -->

	
	<div style="height: 400px;"></div>

	<div class="hero">

		<div class="hero-overlay">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<!-- for clear background, add class hero-transparent -->
			<div class="hero-content-bg hero-transparent">

			</div><!--hero content bg -->

			<div class="hero-content">
			
				<div class="content-wrapper">

					<div class="hero-content-inner">

						<!-- for clear background, add class hero-content-transparent -->
						<div class="hero-content-inner-pad hero-content-transparent">

							<?php 
								$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
								if( ! empty( $pageheadline ) ) {
									echo '<h1>' . $pageheadline . '</h1>';
								}
							?>

							<p>
								Machine Gun Studios is an intimate and boutique studio to lay down all your recording dreams with a stunning gear list, a singular ear to facilitate the process, and crazy amounts of atmospheric charm.
							</p>

						</div><!-- hero content inner pad -->

					</div><!-- hero content inner -->

				</div><!-- content wrapper -->

			</div><!-- hero content -->

		</div><!-- hero overlay -->
	
	</div><!-- hero -->

	<?php wp_list_pages( '&title_li=' ); ?>

	<?php get_footer(); ?>