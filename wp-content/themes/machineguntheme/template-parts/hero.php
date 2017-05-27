
	<div class="hero hero-frontpage" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-frontpage.jpg');">

		<div class="hero-overlay hero-transparent">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<div class="hero-container">

				<div class="content-wrapper sidepad hero-content-pad">
					
					<!--<div class="hero-content-snipe" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-frontpage.jpg');">
					</div><!-- hero content snipe -->

					<div class="hero-content-innerpad">

						<!--<div class="hero-content-bg">
						</div><!-- hero content bg -->

						<img src="<?php bloginfo('template_url'); ?>/assets/images/landing-bars.gif" ?>

						<?php 
							$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
							if( ! empty( $pageheadline ) ) {
								echo '<h1>' . $pageheadline . '</h1>';
							}
						?>

						<p>
							Machine Gun Studios is an intimate boutique studio to lay down all your recording dreams with a stunning gear list, a singular ear to facilitate the process, and crazy amounts of atmospheric charm.
						</p>

					</div><!-- hero content rightpad -->

				</div><!-- hero content wrapper -->

			</div><!-- hero background -->

			<div class="hero-underbar">
			</div><!-- hero underbar -->

		</div><!-- hero overlay -->
	
	</div><!-- hero -->