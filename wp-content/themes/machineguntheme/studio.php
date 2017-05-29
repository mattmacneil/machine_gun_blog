<?php
/*
 * Template Name: StudioPage
 * Description: Page for MG studio pics & info.
 */

	get_header();

	get_template_part( 'template-parts/hero' );

?>

	<div class="studio-wrapper">

		<div class="content-wrapper studio-padding">

			<div class="studio-pic-container">

				<div class="studio-pic studio-pic-1">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-1.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							From Drum Area
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-2">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-2.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Strings
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-3">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-3.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Ludwig Kit
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-4">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-4.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Central
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-text">

					<a href="" class="noline">
					<div class="studio-pic-overlay studio-pic-overlay-text">

						Pictures can only say so much - the spirit and soul of Machine Gun Studios must be experienced live. <a href="contact">Contact me</a> to set up a time.

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-5">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-5.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Lounge Act
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-6">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-6.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Live Room
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-7">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-7.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							Drum Area Right
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

				<div class="studio-pic studio-pic-8">

					<a href="<?php echo bloginfo('template_url'); ?>/assets/images/studio-pic-8.jpg" class="noline">
					<div class="studio-pic-overlay">

						<div class="studio-pic-icon">
						</div><!-- studio pic icon -->

						<div class="studio-pic-title">
							The Helm
						</div><!-- studio pic title -->

					</div><!-- studio pic overlay -->
					</a>

				</div><!-- studio pic -->

			</div><!-- studio pic container -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

	<div class="studio-map-wrap">

		<div class="content-wrapper">

			<div class="col-content">

				<div class="col-content-one no-top-pad">

					<span>&raquo;</span>

				</div><!-- one -->

				<div class="col-content-two no-top-pad">

					<span class="header">About the Studio:</span><br />

					<span class="secondary">Location:</span>

					<p>
						Machine Gun Studios is located in beautiful Jamaica Plain, a distinct neighborhood located within the City of Boston, Massachusetts.
					</p>

					<p>
					<span class="secondary">Transportation:</span><br />

					By car, we're located within 15 minutes of a handful of Boston-area interstates. Guest parking spots are available on the street. When coming by rail and most bus lines, Forest Hills is a walkable nearby transportation hub. The studio is located ~5 miles from Downtown Boston.
					</p>

					<p>
					<span class="secondary">Availability & Hours:</span><br />

					Your recording time will be split into multiple tracking sessions in most cases. To accomodate all of those who are contributing, we have flexible scheduling with slots available weekday mornings and afternoons. At this time there are no "drop-in" hours for mixing or any other services (sorry!) - all times are arranged and agreed upon 5+ days prior to a session.
					</p>

				</div><!-- col content two -->

				<div class="col-content-three front-right-pic">

					<div class="front-right-pic-inner">

						<div id="gmaps" class="front-right-pic-inner-overlay">
						</div><!-- front right pic inner overlay -->

					</div><!-- front right pic inner -->

				</div><!-- col content three -->

			</div><!-- col content -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

 	<script>
      function initMap() {
        var uluru = {lat: 42.309396, lng: -71.115771};
        var map = new google.maps.Map(document.getElementById('gmaps'), {
          zoom: 15,
          mapTypeControl: false,
          zoomControl: false,
          scaleControl: true,
          streetViewControl: false,
          fullscreenControl: false,

          center: uluru,
					styles: [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKNOrEi9N-L2RrZAgITHaKIyJlj5BjouU&callback=initMap">
    </script>

<?php
	get_footer(); 
?>
