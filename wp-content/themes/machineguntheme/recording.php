<?php
/*
 * Template Name: RecordingMixing
 * Description: Recording & Mixing pages.
 */

get_header(); ?>
<div class="nav-blocker"></div><!-- nav blocker -->


	<?php

	$page_name_slug = basename(get_permalink());
	$hero_trans_class = " ";

		if ($page_name_slug == "mgwp") {
			$hero_trans_class = "hero-transparent";
		}
			elseif ($page_name_slug == "recording") {
				$hero_trans_class = "hero-transparent";
			}
				else $hero_trans_class = " ";

		echo $hero_trans_class;


	?>


<?php 
 
	$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
 
	if( ! empty( $pageheadline ) ) {
		echo '<h3>The Headline: ' . $pageheadline . '</h3>';
	}
 
?>

OI


<?php

	$slug = basename(get_permalink());

	echo $slug;

?>

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

	

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

	hi

<div style="background-color: orange; margin: 100px 0;">HELLO</div>

<?php get_footer(); ?>