<?php
/*
 * Template Name: FrontPage
 * Description: Front Page.
 */

get_header(); ?>

	<div class="hero hero-frontpage" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-frontpage.jpg');">

		<div class="hero-overlay hero-transparent">

			<div class="nav-blocker"></div><!-- nav blocker -->

			<div class="hero-container">

				<div class="content-wrapper sidepad hero-content-pad">

					
					<!--<div class="hero-content-snipe" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/hero-frontpage.jpg');">
					</div><!-- hero content snipe -->

					<div class="hero-content-innerpad">

						<!--<div class="hero-content-bg">
						</div><!-- hero content bg -->

						<img src="<?php bloginfo('template_url'); ?>/assets/images/landing-bars.gif" ?>

						<?php 
							$pageheadline = get_post_meta( get_the_ID(), 'headliner', true);
							if( ! empty( $pageheadline ) ) {
								echo '<h1>' . $pageheadline . '</h1>';
							}
						?>

						<p>
							Machine Gun Studios is an intimate boutique studio to lay down all your recording dreams with a stunning gear list, a singular ear to facilitate the process, and crazy amounts of atmospheric charm.
						</p>

					</div><!-- hero content rightpad -->

				</div><!-- hero content wrapper -->

			</div><!-- hero background -->

			<div class="hero-underbar">
			</div><!-- hero underbar -->

		</div><!-- hero overlay -->
	
	</div><!-- hero -->

	<div class="doubleside">

		<div class="content-wrapper">

			<div class="col-content">

				<div class="col-content-one">

					&nbsp;

				</div><!-- one -->

				<div class="col-content-two">

					<span class="header">About Machine Gun</span>

					<p>
						Welcome to Machine Gun Studios, a recording studio and mixing facility in Jamaica Plain, Massachusetts, just outside of Boston. My name&rsquo;s Mike Irwin. I&rsquo;m a professional recording and mixing engineer, teacher and musician with more than 30 years&rsquo; experience in music. I started Machine Gun in 2003.
					</p>


					<p>
						Machine Gun also offers mixing as part of your recording session, or as a standalone service.
					</p>

					<p>
						Let&rsquo;s talk soon. I&rsquo;d love to hear more about your project and chat with you about how I can help.
					</p>

				</div><!-- two -->

				<div class="col-content-three">

					<span class="header">The Lastest:</span>

					<!-- start right column post list -->
					<?php query_posts('showposts=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="col-post-wrapper">

						<div class="col-post-date">

							<div class="col-post-date-wrapper">

								<div class="col-post-date-top">

									<?php the_time('M'); ?>

								</div><!-- col post date top -->

								<div class="col-post-date-mid">

									<?php the_time('d'); ?>

								</div><!-- col post date mid -->

								<div class="col-post-date-bottom">

									<?php the_time('Y'); ?>

								</div><!-- col pot date bottom -->

							</div><!-- col post date wrapper -->

						</div><!-- col post date -->

						<div class="col-post-content">

							<!--<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>-->

							<a href="<?php the_permalink(); ?>"><?php $trunctitle = get_the_title(); echo mb_strimwidth($trunctitle, 0, 50, '...');?></a>

							<br />

							<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 75, '...');?>

							<a href="<?php the_permalink(); ?>">more&raquo;</a>

						</div><!-- col post content -->

					</div><!-- col post wrapper -->

					<?php endwhile;?>
					<?php else : ?>
						Come back soon for more updates!
					<?php endif; wp_reset_query(); ?>
					<!-- end right column post list -->

				</div><!-- three -->

				<div class="clearfix"></div>

			</div><!-- rap -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

	<div style="width: 100%; margin: 100px 5%;">



	</div>

	<?php get_footer(); ?>