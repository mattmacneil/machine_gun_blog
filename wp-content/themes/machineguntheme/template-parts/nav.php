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

					<div class="nav-mobile-button" onclick="openNav()">

						&nbsp;

					</div><!-- nav mobile button -->

					<div class="clearfix"></div>

				</div><!-- nav inner -->

			</nav><!-- nav -->

		</div><!-- content wrapper -->

	</div><!-- new nav -->

</div><!-- nav container -->

<!-- The overlay -->
<div id="myNav" class="overlay">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">CLOSE</a>

  <span class="title" onclick="location.href='index.php';">Machine Gun<br />Studios ///</span>

  <!-- Overlay content -->
  <div class="overlay-content">
    
  	<div class="overlay-content-row">

  		<div class="overlay-content-cell">
  			<a href="recording.php" class="noline">
  			<div class="overlay-content-cell-inner">

  				<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-recording.png" alt="Go to Recording Page" />

  				recording

  			</div><!-- overlay content cell inner -->
  			</a>
  		</div><!-- overlay content cell -->

   		<div class="overlay-content-cell">
   			<a href="mixing.php" class="noline">
   			<div class="overlay-content-cell-inner">

					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mixing.png" alt="Go to Mixing Page" />

   				mixing

   			</div><!-- overlay content cell inner -->
   			</a>
  		</div><!-- overlay content cell -->

  		<div class="overlay-content-cell">
  			<a href="studio.php" class="noline">
  			<div class="overlay-content-cell-inner">

  			<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-studio.png" alt="Go to Studio Page" />

  				studio

  			</div><!-- overlay content cell inner -->
  			</a>
  		</div><!-- overlay content cell -->

  		<div class="overlay-content-cell">
  			<a href="gear.php" class="noline">
  			<div class="overlay-content-cell-inner">

  				<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-gear.png" alt="Go to Gear Page" />

  				gear

  			</div><!-- overlay content cell inner -->
  			</a>
  		</div><!-- overlay content cell -->

  		<div class="overlay-content-cell">
  			<a href="blog.php" class="noline">
  			<div class="overlay-content-cell-inner">

  			<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-news.png" alt="Go to News Page" />

  				blog

  			</div><!-- overlay content cell inner -->
  			</a>
  		</div><!-- overlay content cell -->

   		<div class="overlay-content-cell">
   			<a href="contact.php" class="noline">
  			<div class="overlay-content-cell-inner">

  			<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-contact.png" alt="Go to Contact Page" />

  				contact

  			</div><!-- overlay content cell inner -->
  			</a>
  		</div><!-- overlay content cell -->

  	</div><!-- overlay content row -->

  </div><!-- overlay content -->

</div><!-- overlay nav -->
