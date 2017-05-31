		<div class="contact-wrap">

			<div class="content-wrapper">

				<div class="col-content">

					<div class="col-content-one">

						<img src="<?php bloginfo('template_url'); ?>/assets/images/contact-envelope.png" alt="Contact Machine Gun." /> 

					</div><!-- col content one -->

					<div class="col-content-two">

						<span class="header">Contact Machine Gun:</span>

						<div class="contact-form-wrapper">

							<form method="POST" action="http://formspree.io/mike@machinegunstudios.com">

								<input type="text" name="name" placeholder="Name:" />

								<input type="email" name="email" placeholder="Email:" />

								<textarea name="message" placeholder="Your Message:"></textarea>

								<input type="submit" value="Send Msg" />

							</form>

						</div><!-- contact form wrapper -->

					</div><!-- col content two -->

					<div class="col-content-three no-pad">

						<div class="contact-side">
						</div><!-- contact side -->

					</div><!-- col content three -->

				</div><!-- col content -->

			</div><!-- content wrapper -->

		</div><!-- contact wrap -->

		<div class="footer-wrap">

			<footer class="content-wrapper">

				<div class="footer-container">

					<div class="footer-logo">

							<img src="<?php bloginfo('template_url'); ?>/assets/images/footer-logo.png" alt="Contact Machine Gun." /> 

					</div><!-- footer logo -->

					<div class="footer-left-content">

						<div class="footer-copy">

							&copy;2003&ndash;<?php the_time('Y'); ?><br />
							<span>MGS / M. Irwin</span>

						</div><!-- footer copy -->

						<div class="footer-mail">

							Taking Clients Now:<br />
							<span>info&#64;&#109;a&#99;hinegu&#110;&#115;tu&#100;&#105;os&#46;com</span>

						</div><!-- footer mail -->

						<div class="clearfix"></div>

					</div><!-- footer left content -->

					<div class="footer-right-content">

						&ldquo;&hellip;the name only <span>implies</span> that I&rsquo;m armed&hellip;&rdquo;

					</div><!-- footer right content -->

					<div class="clearfix"></div>

				</div><!-- footer container -->

			</footer><!-- content wrapper -->

		</div><!-- footer wrap -->

		<div class="grave">
			machine gun studios - jamaica plain, massachusetts.
		</div><!-- grave -->

		<script type="text/javascript">

			function openNav() {
			    document.getElementById("myNav").style.width = "100%";
			}

			function closeNav() {
			    document.getElementById("myNav").style.width = "0%";
			}	

		</script>

		<?php wp_footer(); ?> 

  </body>
</html>