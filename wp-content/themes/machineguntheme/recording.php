<?php
/*
 * Template Name: RecordingMixing
 * Description: Recording & Mixing pages.
 */

get_header(); ?>
<div class="nav-blocker"></div><!-- nav blocker -->


<?php 
 
	$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
 
	if( ! empty( $pageheadline ) ) {
		echo '<h3>The Headline: ' . $pageheadline . '</h3>';
	}
 
?>


<div style="background-color: orange; margin: 100px 0;">HELLO</div>

	

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

	hi

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

<?php get_footer(); ?>