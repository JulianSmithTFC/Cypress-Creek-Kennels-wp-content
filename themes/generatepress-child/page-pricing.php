<?php
/*
Template Name: Pricing Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"pricing-page\"]");

?>

    <br/>
    <br/>
    <br/>

<?php if ( have_rows( 'block_one' ) ) : ?>
    <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
        <div class="container-fluid pricing-blockOne-container">
            <div class="container">
                <h1 class="pricing-blockOne-heading"><?php the_sub_field( 'heading' ); ?></h1>
                <?php if ( have_rows( 'body_text' ) ) : ?>
                    <?php while ( have_rows( 'body_text' ) ) : the_row(); ?>
                        <p class="pricing-blockOne-bodyText"><?php the_sub_field( 'paragraph' ); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'ordered_list' ) ) : ?>
                    <ul class="fa-ul">
                        <?php while ( have_rows( 'ordered_list' ) ) : the_row(); ?>
                            <li class="pricing-blockThree-listText"><span class="fa-li"><i class="far fa-square pricing-blockThree-listIcons"></i></span><?php the_sub_field( 'list_text' ); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <br/>
    <br/>

<?php if ( have_rows( 'block_two' ) ) : ?>
    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
        <div class="container-fluid pricing-blockTwo-container">
            <div class="container">
                <div class="row display-flex">
                    <?php if ( have_rows( 'pricing_block_one' ) ) : ?>
                        <?php while ( have_rows( 'pricing_block_one' ) ) : the_row(); ?>
                            <div class="col-md pricing-blockTwo-containers" align="center">
                                <div class="featured-fix pricing-blockTwo-innerContainers shadow-lg" align="center">
                                    <div class="pricing-blockTwo-headingContainer">
                                        <h3 class="pricing-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h3>
                                    </div>
                                    <div class="pricing-blockTwo-pricingContainer">
                                        <p class="pricing-blockTwo-pricing"><?php the_sub_field( 'pricing' ); ?></p>
                                    </div>
                                    <div class="pricing-blockTwo-infoContainer">
                                        <p class="pricing-blockTwo-info"><?php the_sub_field( 'subheading' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'pricing_block_two' ) ) : ?>
                        <?php while ( have_rows( 'pricing_block_two' ) ) : the_row(); ?>
                            <div class="col-md pricing-blockTwo-containers" align="center">
                                <div class="featured-fix pricing-blockTwo-innerContainers shadow-lg" align="center">
                                    <div class="pricing-blockTwo-headingContainer">
                                        <h3 class="pricing-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h3>
                                    </div>
                                    <div class="pricing-blockTwo-pricingContainer">
                                        <p class="pricing-blockTwo-pricing"><?php the_sub_field( 'pricing' ); ?></p>
                                    </div>
                                    <div class="pricing-blockTwo-infoContainer">
                                        <p align="pricing-blockTwo-info"><?php the_sub_field( 'subheading' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <br/>
    <br/>
    <br/>

<?php if ( have_rows( 'block_three' ) ) : ?>
    <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
        <div class="container-fluid pricing-blockThree-container">
            <div class="container">
                <h2 class="pricing-blockThree-heading"><?php the_sub_field( 'heading' ); ?></h2>
                <hr/>
                <?php if ( have_rows( 'list' ) ) : ?>
                    <ul class="fa-ul">
                        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                            <li class="pricing-blockThree-listText"><span class="fa-li"><i class="far fa-square pricing-blockThree-listIcons"></i></span><?php the_sub_field( 'list_text' ); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <br/>
    <br/>
    <br/>

    <div class="container-fluid pricing-blockFour-container">
        <div class="container" align="center">

            <br/>
            <br/>
            <?php if ( have_rows( 'block_four' ) ) : ?>
                <?php while ( have_rows( 'block_four' ) ) : the_row(); ?>
                    <h2 class="pricing-blockFour-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <h3 class="pricing-blockFour-subheading"><?php the_sub_field( 'subheading' ); ?></h3>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php get_template_part( 'contactFormCode' ); ?>

            <br/>
            <br/>
            <br/>

        </div>
    </div>


<?php
get_footer();