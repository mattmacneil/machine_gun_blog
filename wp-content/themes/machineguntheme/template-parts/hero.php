


	<div class="hero hero-frontpage" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">


		<div class="hero-overlay hero-transparent">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<div class="hero-container">

				<div class="content-wrapper sidepad hero-content-pad">

						<?php 

							if ( !is_front_page() ) {

								echo '<div class="hero-content-snipe" style="background-image: url(';
								echo kdmfi_get_featured_image_src('featured-image-2');
								echo ');"></div><!-- hero content snipe -->';	

							}
						?>			

					<div class="hero-content-innerpad">

						<?php 

							if ( !is_front_page() ) {
								echo '<div class="hero-content-bg"></div><!-- hero content bg -->';
							}

							if ( is_front_page() ) {	
								echo '<img src="';
								echo bloginfo('template_url');
								echo '/assets/images/landing-bars.gif">'; 
   						}

							$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
							if( ! empty( $pageheadline ) ) {
								echo '<h1>' . $pageheadline . '</h1>';
							}

							$herotext = get_post_meta( get_the_ID(), 'herotext', true);
							if( ! empty( $herotext ) ) {
								echo '<p>' . $herotext . '</p>';
							}
						?>

					</div><!-- hero content rightpad -->

				</div><!-- hero content wrapper -->

			</div><!-- hero background -->

			<div class="hero-underbar">
			</div><!-- hero underbar -->

		</div><!-- hero overlay -->
	
	</div><!-- hero -->
