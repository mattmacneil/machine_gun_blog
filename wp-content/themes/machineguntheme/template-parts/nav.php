<div class="nav-container">

	<div class="content-wrapper">

		<nav>

			<a href="<?php echo home_url(); ?>">
			<div class="nav-logo" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/nav-logo.png');">

					<em>Machine Gun Studios</em>

			</div><!-- nav logo -->
			</a>

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

			<div class="clearfix"></div>

		</nav><!-- nav -->

	</div><!-- content wrapper -->

</div><!-- nav container -->