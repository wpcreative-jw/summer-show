<?php
/*
Template Name: About
*/
get_header(); ?>

<?php get_template_part( 'parts/content', 'pageheader' ); ?>



<section class="about-top padding-150">
    <div class="grid-container">

        <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <?php the_field( 'about_intro' ); ?>
                <div class="spacer" style="height: 30px;"></div>
                <?php if ( get_field( 'video' ) ) : ?>
                <img src="<?php the_field( 'video' ); ?>" />
            <?php endif ?>
            </div>
            <div class="large-4 cell">
                <?php get_template_part( 'parts/content', 'performances' ); ?>
            </div>
        </div>

    </div>
</section>


<?php get_template_part( 'parts/content', 'splitsections' ); ?>



<section class="about-performers padding-150">
    <div class="grid-container">

        <div class="grid-x grid-padding-x">
            <div class="large-4 cell">
              <h2>The Performers</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x" data-equalizer>

            <?php if ( have_rows( 'the_performers' ) ) : ?>
            <?php while ( have_rows( 'the_performers' ) ) : the_row(); ?>

            <div class="medium-6 large-6 cell">
                <div class="performer curve shadow">
                    <h3>
                        <div class="bulb-border bulb-top"></div>
                        <?php the_sub_field( 'performer_title' ); ?>
                        <div class="bulb-border bulb-bottom"></div>
                    </h3>
                    <img src="<?php the_sub_field( 'performer_image' ); ?>" />
                    <div data-equalizer-watch>
                        <?php the_sub_field( 'performer_text' ); ?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php // No rows found ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class="about-cta">
    <div class="grid-container">

        <div class="grid-x grid-padding-x">
            <div class="large-7 large-offset-1 cell">
             <span>Come & Enjoy The Summer Show</span>
            </div>
            <div class="large-3 cell">
                <a href="/book-tickets/" class="book-btn">Book Tickets</a>
              </div>
        </div>
    </div>
</section>


<?php get_template_part( 'parts/content', 'faqs' ); ?>




<?php get_footer(); ?>