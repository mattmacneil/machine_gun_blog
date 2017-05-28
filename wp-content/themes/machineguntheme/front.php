<?php
/*
 * Template Name: FrontPage
 * Description: Front Page.
 */

	get_header(); ?>

	<?php get_template_part( 'template-parts/hero' ); ?>

	<div class="doubleside">

		<div class="content-wrapper">

			<div class="col-content">

				<div class="col-content-one">

					<span>&raquo;</span>

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

	<div class="doubleside">

		<div class="content-wrapper">

			<div class="col-content">

				<div class="col-content-one no-top-pad">

					<span>&raquo;</span>

					<div class="col-content-burst-snipe">
					</div><!-- col content burst snipe -->

				</div><!-- one -->

				<div class="col-content-two no-top-pad">

					<span class="header">Services:</span>

					<div class="front-services-container">

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-recording">
								</div><!-- front services icon -->

								Record

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-mixing">
								</div><!-- front services icon -->

								Mix

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-consulting">
								</div><!-- front services icon -->

								Consult

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->

					</div><!-- front services container -->

					<div class="front-services-container">

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-pics">
								</div><!-- front services icon -->

								Pics

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-gear">
								</div><!-- front services icon -->

								Gear

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->

						<div class="front-services-cell">
							<a href="RAP" class="noline">
							<div class="front-services-cell-inner">

								<div class="front-services-icon front-services-blog">
								</div><!-- front services icon -->

								Blog

							</div><!-- front services cell inner -->
							</a>
						</div><!-- front services cell -->


					</div><!-- front services container -->

				</div><!-- col content two -->

				<div class="col-content-three front-right-pic">

					<div class="front-right-pic-inner">

						<div class="front-right-pic-inner-overlay">
						</div><!-- front right pic inner overlay -->

					</div><!-- front right pic inner -->

				</div><!-- col content three -->

			</div><!-- col content -->

		</div><!-- content wrapper -->

	</div><!-- doubleside -->

	<div style="width: 100%; margin: 100px 5%;">



	</div>

	<?php get_footer(); ?>