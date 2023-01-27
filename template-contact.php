<?php
/*
Template Name: Contact
*/

get_header(); ?>

<?php get_template_part( 'parts/content', 'pageheader' ); ?>


<section class="contact-top padding-100">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 large-8 cell">
                <h2>Get in Touch</h2>
                <?php the_field( 'contact_top' ); ?>

                <div class="contact-dets">
                    <a href="mailto:info@thesummershow.uk">info@thesummershow.uk</a><br>
                    <a href="tel:01255433344">01255 43 33 44</a>
                </div>

                <div class="contact-form">     
                    <?php echo do_shortcode('[wpforms id="105" title="false"]'); ?>
                </div>
            </div>
            <div class="medium-6 large-4 cell">
                <?php get_template_part( 'parts/content', 'performances' ); ?>
            </div>
        </div>
    </div>
</section>


<section class="contact-bottom padding-100">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-7 large-6 cell">
                <h2>How to find us</h2>
                <?php the_field( 'contact_bottom' ); ?>
            </div>
            <div class="medium-5 large-6 cell">
                <div class="spacer" style="height: 135px;"></div>
                <h3>West Cliff Theatre, Tower Road, Clacton-On-Sea, Essex, CO15 1LE</h3>
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>