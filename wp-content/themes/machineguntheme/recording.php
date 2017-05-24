<?php
/*
 * Template Name: RecordingMixing
 * Description: Recording & Mixing pages.
 */

get_header(); ?>


<?php 
 
	$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
 
	if( ! empty( $pageheadline ) ) {
		echo '<h3>The Headline: ' . $pageheadline . '</h3>';
	}
 
?>


<div style="background-color: orange; margin: 100px 0;">HELLO</div>

<?php
wp_nav_menu( array( 
    'theme_location' 	=> 'mg-nav',
    'items_wrap' 			=> '%3$s',
    'menu_class' 			=> '',
    'menu_id'         => FALSE,
    'item_spacing' 		=> discard,
    'depth'           => 1,
    'container_class' => 'machine-gun-menu' ) ); 
?>

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

<?php get_footer(); ?>