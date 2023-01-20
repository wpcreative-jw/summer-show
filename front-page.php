<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
 
<?php get_template_part( 'parts/content', 'heroslider' ); ?>

<section class="home-top padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-4 large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>
                        <div class="bulb-border bulb-top"></div>
                        About the show
                        <div class="bulb-border bulb-bottom"></div>
                    </h3>
                   
                    <div class="hcta-img">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/home-cta1.jpg">
                    </div>
                    <a class="button" href="/about/">Read More</a>
                </div>
            </div>
            <div class="medium-4 large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>
                        <div class="bulb-border bulb-top"></div>
                        Summer in Clacton
                        <div class="bulb-border bulb-bottom"></div>
                    </h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/home-cta2.jpg">
                    </div>
                    <a class="button" href="/summer-in-clacton/">Read More</a>
                </div>
            </div>
            <div class="medium-4 large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>
                        <div class="bulb-border bulb-top"></div>
                        Box Office
                        <div class="bulb-border bulb-bottom"></div>
                    </h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/home-cta3.jpg">
                    </div>
                    <a class="book-btn" href="/book-tickets/">Book Tickets</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-intro padding-150">
    <div class="bulb-border bulb-top"></div>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 large-7 cell">
                <?php the_field( 'home_intro' ); ?>
                <div class="spacer" style="height: 30px;"></div>
                <a href="/about/" class="button">Read More</a>
            </div>
            <div class="medium-6 large-4 large-offset-1 cell">
                <?php get_template_part( 'parts/content', 'performances' ); ?>
            </div>
        </div>
    </div>
    <div class="bulb-border bulb-bottom"></div>
</section>


<section class="home-insta text-center">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
                <h2>@thescshowclacton</h2>
                <div class="insta-wrap">
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </div>
                <h4>Follow Us</h4>
                <?php get_template_part( 'parts/content', 'socialicons' ); ?>
            </div>
            
            
        </div>
    </div>
</section>



<?php get_footer(); ?>