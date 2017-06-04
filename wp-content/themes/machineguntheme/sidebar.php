					<span class="header">The Latest:</span>

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