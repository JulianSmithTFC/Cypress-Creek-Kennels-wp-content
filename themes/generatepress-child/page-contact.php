<?php
/*
Template Name: Contact Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"contact-page\"]");

?>

    <br/>
    <br/>
    <br/>

    <div class="container-fluid" align="center">
            <div class="row">
                <?php if ( have_rows( 'phone' ) ) : ?>
                    <?php while ( have_rows( 'phone' ) ) : the_row(); ?>
                        <div class="col-md contact-blockOne-containerInd" align="center">
                            <h2 class="contact-blockOne-headings"><i class="fas fa-phone contact-blockOne-icons"></i> <?php the_sub_field( 'header' ); ?></h2>
                            <?php if ( have_rows( 'phone_numbers' ) ) : ?>
                                <?php while ( have_rows( 'phone_numbers' ) ) : the_row(); ?>
                                    <a href="tel:<?php the_sub_field( 'phone_number' ); ?>" class="contact-blockOne-links">
                                        <h3 class="contact-blockOne-subheadings">
                                            <?php the_sub_field( 'name_' ); ?> - <?php the_sub_field( 'phone_number' ); ?>
                                        </h3>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <br/>
                <br/>
                <?php if ( have_rows( 'email' ) ) : ?>
                    <?php while ( have_rows( 'email' ) ) : the_row(); ?>
                        <div class="col-md contact-blockOne-containerInd" align="center">
                            <h2 class="contact-blockOne-headings"><i class="fas fa-envelope-open contact-blockOne-icons"></i> <?php the_sub_field( 'header' ); ?></h2>
                            <?php if ( have_rows( 'emails' ) ) : ?>
                                <?php while ( have_rows( 'emails' ) ) : the_row(); ?>
                                    <a href="mailto:<?php the_sub_field( 'email_address' ); ?>" target="_top" class="contact-blockOne-links">
                                        <h3 class="contact-blockOne-subheadings">
                                            <?php the_sub_field( 'name' ); ?> - <?php the_sub_field( 'email_address' ); ?>
                                        </h3>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <br/>
                <br/>
                <?php if ( have_rows( 'location' ) ) : ?>
                    <?php while ( have_rows( 'location' ) ) : the_row(); ?>
                        <div class="col-md contact-blockOne-containerInd" align="center">
                            <h2 class="contact-blockOne-headings"><i class="fas fa-map-marker-alt contact-blockOne-icons"></i> <?php the_sub_field( 'header' ); ?></h2>
                            <a class="contact-blockOne-links" href="<?php the_sub_field( 'address_link' ); ?>" target="_blank">
                                <h3 class="contact-blockOne-subheadings">
                                    <?php the_sub_field( 'address' ); ?>
                                </h3>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'hours_of_operation' ) ) : ?>
                    <?php while ( have_rows( 'hours_of_operation' ) ) : the_row(); ?>
                        <div class="col-md contact-blockOne-containerInd" align="center">
                            <h2 class="contact-blockOne-headings"><i class="fas fa-clock contact-blockOne-icons"></i> <?php the_sub_field( 'header' ); ?></h2>
                            <?php if ( have_rows( 'hours' ) ) : ?>
                                <?php while ( have_rows( 'hours' ) ) : the_row(); ?>
                                    <h3 class="contact-blockOne-subheadings">
                                        <?php the_sub_field( 'day' ); ?> - <?php the_sub_field( 'hours' ); ?>
                                    </h3>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
    </div>


    <br/>
    <br/>

    <div class="container-fluid contact-blockTwo-container">
        <br/>
        <br/>
        <div class="container" align="center">
            <?php if ( have_rows( 'contact_form' ) ) : ?>
                <?php while ( have_rows( 'contact_form' ) ) : the_row(); ?>
                    <h2 class="contact-blockTwo-heading"><?php the_sub_field( 'header' ); ?></h2>
                    <h3 class="contact-blockTwo-subheading"><?php the_sub_field( 'subheader' ); ?></h3>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php get_template_part( 'contactFormCode' ); ?>
        </div>
        <br/>
        <br/>
        <br/>
    </div>



<?php
get_footer();