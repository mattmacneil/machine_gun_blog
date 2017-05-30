<div class="nav-container">

	<div class="newnav">

		<div class="content-wrapper">

			<nav>

				<div class="nav-inner">

					<div class="nav-logo">

						<a href="<?php echo home_url(); ?>">
						<div class="nav-logo-inner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/nav-logo.png');">
						</div><!-- nav logo inner -->
						</a>

					</div><!-- nav logo -->

					<div class="nav-links">

						<?php
						wp_nav_menu( array( 
						    'theme_location' 	=> 'mg-nav',
						    'items_wrap' 			=> '<div class="menu-aligner">%3$s</div>',
						    'menu_class' 			=> '',
						    'menu_id'         => FALSE,
						    'item_spacing' 		=> discard,
						    'depth'           => 1,
						    'container_class' => 'machine-gun-menu' ) ); 
						?>

					</div><!-- nav links -->

					<div class="nav-contact">

						<div class="nav-contact-align">

							<a href="contact">contact</a>

						</div><!-- nav contact align -->

					</div><!-- nav contact -->

					<div class="clearfix"></div>

				</div><!-- nav inner -->

			</nav><!-- nav -->

		</div><!-- content wrapper -->

	</div><!-- new nav -->

</div><!-- nav container -->