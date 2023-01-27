<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

<footer class="footer" role="contentinfo">

	<div class="footer-ml padding-100">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="medium-12 large-8 large-offset-2 cell">
					<span>Get the latest news and updates
						sent straight to your inbox</span>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="medium-12 cell">
					<?php echo do_shortcode('[wpforms id="45" title="false"]'); ?>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-top">
		<div class="bulb-border bulb-top"></div>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="medium-4 cell text-center large-text-left">
					<img class="footer-logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/summer-show-logo.png">
				</div>
				
				<div class="medium-4 cell text-center">
					<h4>IN ASSOCIATION WITH</h4>
					<div class="grid-x grid-padding-x">
						<div class="small-6 cell">
							<a target="_blank" href="https://www.westcliffclacton.co.uk/"><img style="width: 110px;" class="logo" src="<?php bloginfo('template_url') ?>/assets/images/logo-westcliff.png"></a>
						</div>
						<div class="small-6 cell">
							<a target="_blank" href="https://www.ajltheatrical.com/"><img style="width: 120px;" class="logo" src="<?php bloginfo('template_url') ?>/assets/images/logo-ajl.png"></a>
						</div>
					</div>
				</div>

				<div class="medium-4 cell text-center">
					<h4>CHECK OUT THE CHRISTMAS SHOW</h4>
					<a href="https://thechristmasshow.uk/" target="_blank"><img style="width: 170px;" class="logo" src="<?php bloginfo('template_url') ?>/assets/images/xmas-show-logo.png"></a>
				</div>
			</div>
		</div>
		<div class="bulb-border bulb-bottom"></div>
	</div>
	<!--Closing footer top-->

	<div class="footer-middle">
		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-3 large-5 cell">
					<h4>Follow Us</h4>
					<?php get_template_part( 'parts/content', 'socialicons' ); ?>
				</div>

				<div class="medium-5 large-3 cell">
					<h4>Contact	Us</h4>
					<p class="footer-contact">
						<a href="mailto:info@thesummershow.uk">info@thesummershow.uk</a><br>
						<a class="ftel" href="tel:01255433344">01255 43 33 44</a>
					</p>
				</div>

				<div class="medium-4 large-4 cell large-text-right">
					<h4>Find Us</h4>
					<p>West Cliff Theatre, Tower Road<br>
						Clacton-on-Sea, CO15 1LE</p>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom">


		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-4 cell">
					<ul class="menu align-left">
						<li>
							<a href="tel:08005878003">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></a>
						</li>
					</ul>
				</div>

				<div class="medium-4 cell">
					<ul class="menu align-center">
						<li>
							<a href="/terms-conditions/">Terms &amp; Conditions</a>
						</li>
						<li>
							<a href="/privacy-policy/">Privacy Policy</a>
						</li>
					</ul>
				</div>

				<div class="medium-4 cell">
					<ul class="menu align-right">
						<li>
							<a href="https://wpcreative.uk/">Website by WP Creative</a>
						</li>
					</ul>
				</div>
			</div>


		</div>


	</div>


</footer> <!-- end .footer -->

</div> <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->


<?php wp_footer(); ?>

</body>

</html> <!-- end page -->