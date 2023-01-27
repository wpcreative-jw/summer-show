<?php
/*
Template Name: Book
*/

get_header(); ?>

<?php get_template_part( 'parts/content', 'pageheader' ); ?>


<section class="book-content padding-100">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <h2>Book Now</h2>

                <div class="book-top">
                    <?php the_field( 'content_top' ); ?>
                </div>

                <div class="spektrix-wrap">
                    <iframe id="SpektrixIFrame" style="width: 100%; height: 1120px;" src="https://tickets.westcliffclacton.co.uk/westcliff/website/EventDetails.aspx?EventId=150704&amp;resize=true" name="SpektrixIFrame" width="320" height="240" frameborder="0"></iframe>                 
                </div>

                <?php the_field( 'content_bottom' ); ?>
            </div>
            <div class="large-4 cell">

                <div class="spacer hide-for-large" style="height: 100px;"></div>

                <div class="spacer show-for-large" style="height: 40px;"></div>
                <div class="grid-x grid-padding-x">

                    <div class="small-12 medium-4 large-12 cell">
                        <div class="book-cta black-opacity curve">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/icon-freechild.svg">
                            <h2>Child Goes free with every Adult</h2>
                        </div>
                    </div>


                    <div class="small-12 medium-4 large-12 cell">
                        <div class="book-cta black-opacity curve">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/icon-groupdiscount.svg">
                            <h2>Group discounts AVAILABLE</h2>
                        </div>
                    </div>

                    <div class="small-12 medium-4 large-12 cell">
                        <div class="book-cta black-opacity curve">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/icon-faq.svg">
                            <h2>CHECK OUR FAQs</h2>
                            <a href="/about#faqs" class="button">Read More</a>
                        </div>
                    </div>

                    

                    <div class="small-12 medium-6 large-12 cell">
                        <div class="spacer" style="height: 100px;"></div>
                        <div class="home-cta ss-cta curve shadow">
                            <img style="width: 300px;" class="logo"
                                src="<?php bloginfo('template_url') ?>/assets/images/xmas-show-logo.png">
                            <h3>
                                <div class="bulb-border bulb-top"></div>
                                2023
                                <div class="bulb-border bulb-bottom"></div>
                            </h3>
                            <div class="hcta-img">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/cta-xmasshow.jpg">
                            </div>
                            <a class="button" href="https://thechristmasshow.uk/" target="_blank">Visit Website</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>