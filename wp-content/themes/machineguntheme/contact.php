<?php
/*
 * Template Name: ContactPage
 * Description: MG Contact Page.
 */

	get_header();

	get_template_part( 'template-parts/hero' );

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

		get_footer();

?>