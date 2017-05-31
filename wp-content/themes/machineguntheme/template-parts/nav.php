<div class="nav-container">

	<div class="newnav">

		<div class="content-wrapper">

			<nav>

				<div class="nav-inner">

					<div class="nav-logo">

						<div class="nav-logo-text">
						
							<div class="nav-logo-text-row">

								<span>&equiv;</span><span>M</span><span>A</span><span>C</span><span>H</span>

							</div><!-- nav logo text row -->	

							<div class="nav-logo-text-row">

								<span>I</span><span>N</span><span>E</span><span>&equiv;</span><span>&equiv;</span>

							</div><!-- nav logo text row -->	

							<div class="nav-logo-text-row">

								<span>G</span><span>U</span><span>N</span><span>&equiv;</span><span>&equiv;</span>

							</div><!-- nav logo text row -->	

							<div class="nav-logo-text-row">

								<span>S</span><span>T</span><span>U</span><span>&equiv;</span><span>&equiv;</span>

							</div><!-- nav logo text row -->	

							<div class="nav-logo-text-row">

								<span>&equiv;</span><span>D</span><span>I</span><span>O</span><span>S</span>

							</div><!-- nav logo text row -->	

						</div><!-- nav logo text -->

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

					<div class="nav-mobile-button">

						&nbsp;

					</div><!-- nav mobile button -->

					<div class="clearfix"></div>

				</div><!-- nav inner -->

			</nav><!-- nav -->

		</div><!-- content wrapper -->

	</div><!-- new nav -->

</div><!-- nav container -->