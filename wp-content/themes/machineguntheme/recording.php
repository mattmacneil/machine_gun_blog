<?php
/*
 * Template Name: Recording
 * Description: Page template without sidebar
 */

get_header(); ?>


<?php 
 
	$my_book_title = get_post_meta( get_the_ID(), 'headliner', true);
 
	if( ! empty( $my_book_title ) ) {
		echo '<h3>The Headline: ' . $my_book_title . '<h3>';
	}
 
?>


<div style="background-color: orange;">HLLO</div>

<?php get_footer(); ?>