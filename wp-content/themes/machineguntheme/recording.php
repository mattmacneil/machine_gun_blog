<?php
/*
 * Template Name: Recording
 * Description: Page template without sidebar
 */

get_header(); ?>


<?php 
 
	$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
 
	if( ! empty( $pageheadline ) ) {
		echo '<h3>The Headline: ' . $pageheadline . '</h3>';
	}
 
?>


<div style="background-color: orange;">HLLO</div>

<?php get_footer(); ?>