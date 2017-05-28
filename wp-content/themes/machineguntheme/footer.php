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

		</div><!-- footer wrap -->

		<?php wp_footer(); ?> 

  </body>
</html>