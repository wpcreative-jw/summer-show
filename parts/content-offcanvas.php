<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

	<img class="mm-logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/summer-show-logo.png">

	<?php joints_off_canvas_nav(); ?>

	<div class="spacer" style="height: 20px;"></div>

	<ul class="menu">
		<li class="mm-book">
			<a class="book-btn" href="/book-tickets/">Book Tickets</a>
		</li>
		<li>
			<a class="mm-tel" href="tel:01255433344">Tel: 01255 43 33 44</a>
		</li>
	</ul>

	<?php get_template_part( 'parts/content', 'socialicons' ); ?>


</div>
