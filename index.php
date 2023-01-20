<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>


<div class="hero-image" style="background-image: url(<?php the_field( 'hero_image', 'option' ); ?>);">
    <h1 class="black-opacity">Summer in Clacton</h1>
</div>

<section class="blogs padding-100">
	<div class="grid-container">
	
		<div class="grid-x grid-padding-x" data-equalizer>
	

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

</section>

<?php get_footer(); ?>