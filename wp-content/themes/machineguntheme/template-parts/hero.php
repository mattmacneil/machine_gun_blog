
<?php

	$checkstudio_slug = basename(get_permalink());
	$studio_trans = NULL;

	if ($checkstudio_slug == "studio") {
		$studio_trans = "background-color: rgba(34, 83, 120, 0.4);";
	}
			else $studio_trans = NULL;

?>

<div class="hero" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');">

	<?php

		$page_name_slug = basename(get_permalink());
		$hero_trans_class = NULL;

		if ($page_name_slug == "mgwp" || $page_name_slug == "studio" || $page_name_slug == "contact") {
				$hero_trans_class = "hero-transparent";
		}
			else $hero_trans_class = NULL;
	?>

	<div class="hero-overlay <?php echo $hero_trans_class; ?>" style="<?php echo $studio_trans; ?>">

		<div class="nav-blocker"></div><!-- nav blocker -->

		<div class="hero-content">

			<div class="content-wrapper">

				<div class="col-content">

					<div class="hero-col-content-one">

					</div><!-- col content one -->

					<div class="hero-col-content-two">

						<?php 

							if ( !is_front_page() ) {
								echo '<div class="hero-burst"></div><!-- hero content bg -->';
							}

							if ( !is_front_page() ) {

								echo '<div class="hero-snipe" style="background-image: url(';
								echo kdmfi_get_featured_image_src('featured-image-2');
								echo ');"></div><!-- hero content snipe -->';	

							}
						?>	

						<?php 

							if ( is_front_page() ) {	
								echo '<div class="landing-bars"><img src="';
								echo bloginfo('template_url');
								echo '/assets/images/landing-bars.gif"></div><!-- landing-bars -->'; 
   						}

							$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);

	   						if ( !is_page() ) {
	   							$pageheadline = get_the_title();
	   						}


							if( ! empty( $pageheadline ) ) {
								echo '<h1>' . $pageheadline . '</h1>';
							}
								else {
									echo '<h1>All The Latest From Machine Gun Studios.</h1>';
								}

							$herotext = get_post_meta( get_the_ID(), 'herotext', true);

								$author = get_the_author();

	   						if ( !is_page() ) {
	   							$herotext = "Posted: " . get_the_time('l F jS Y');
	   						}

							if( ! empty( $herotext ) ) {
								echo '<p>' . $herotext . '</p>';
							}
								else {
									echo 'Machine Gun Studios: The Name Only *Implies* That I&rsquo;m Armed...';
								}

						if (have_posts() && !is_page()) : while (have_posts()) : the_post();

							echo "Written by: ";
							the_author();

						endwhile;
						endif;
						?>

					</div><!-- col content two -->

				</div><!-- col content -->

			</div><!-- content wrapper -->

		</div><!-- hero stuff -->

		<div class="hero-underbar">

			<div class="content-wrapper">

				<div class="hero-underbar-color">
				</div><!-- hero underbar color -->

			</div><!-- content wrapper -->

		</div><!-- hero underbar -->

	</div><!-- hero overlay -->


</div><!-- hero -->