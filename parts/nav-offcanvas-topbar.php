<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>



<div class="site-header show-for-large">

	<div class="header-top">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">

				<div class="medium-6 cell">
					<a style="padding: 0; line-height: 50px; padding-bottom: 5px;">5TH - 26TH AUGUST 2023</a>
				</div>

				<div class="medium-6 cell">
					<ul class="header-social menu align-right">
						<li class="social-icon"><a href="https://www.facebook.com/summerchristmasshowsclacton" target="_blank"><img
									src="<?php bloginfo('template_url') ?>/assets/images/social/social-facebook.png"></a>
						</li>
						<li class="social-icon"><a href="https://www.instagram.com/thescshowclacton/" target="_blank"><img
									src="<?php bloginfo('template_url') ?>/assets/images/social/social-instagram.png"></a>
						</li>
						<li class="social-icon"><a href="https://twitter.com/scshowclacton" target="_blank"><img
							src="<?php bloginfo('template_url') ?>/assets/images/social/social-twitter.png"></a>
				</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!--Header top-->

	<div class="header-bottom">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">

				<div class="medium-3 cell">
					<a href="<?php echo home_url(); ?>">
						<img class="logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/summer-show-logo.png">
					</a>
				</div>

				<div class="medium-9 cell">
					<div class="flex-container align-right" style="height: 100%;">
						<?php joints_top_nav(); ?>
						<ul class="menu align-right">
							<li style="padding: 0;"><a class="book-btn" href="/book-tickets/">Book Tickets</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div><!--Header bottom-->

	<div class="bulb-border"></div>



</div>

<div class="spacer hide-for-large" style="height:113px;"></div>
<div class="mob-header hide-for-large">
	<div class="grid-x">
		<div class="medium-12 cell" style="position: relative;">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img class="logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/summer-show-logo.png">
				</a>
			</div>
			<button class="menu-icon" type="button" data-toggle="off-canvas"></button>
		</div>
	</div>
	<div class="bulb-border"></div>
</div>
