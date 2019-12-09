<?php
/*
Template Name: Our Story Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"our-story\"]");

?>

    <br/>
    <br/>
    <br/>

    <div class="container-fluid about-blockOne-container">
        <div class="container">
            <div class="row">
                <div class="col-sm about-blockOne-containerLeft" align="left">
                    <h1 class="about-blockOne-heading"><?php the_field( 'heading' ); ?></h1>
                    <p class="about-blockOne-bodyText"><?php the_field( 'body_text' ); ?></p>
                    <h2 class="about-blockOne-secondaryHeading"><?php the_field( 'second_heading' ); ?></h2>
                    <p class="about-blockOne-bodyText"><?php the_field( 'second_body_text' ); ?></p>
                    <?php $button = get_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <a href="<?php echo $button['url']; ?>" class="btn btn-primary about-blockOne-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="col-sm about-blockOne-containerRight" align="center">
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" class="about-blockOne-image" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="container-fluid about-blockTwo-container">
        <br/>
        <br/>
        <div class="container">
            <h2 class="about-blockTwo-heading"><?php the_field( 'our_staff_heading' ); ?></h2>
            <div class="row">
                <?php if ( have_rows( 'staff' ) ) : ?>
                    <?php while ( have_rows( 'staff' ) ) : the_row(); ?>
                        <div class="col-sm about-blockTwo-individualContainers">
                            <div class="">
                                <div class="card">
                                    <!--                            <img class="card-img-top about-blockTwo-images" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="">-->
                                    <div class="card-body about-blockTwo-bodyText" align="center">
                                        <h3 class="card-title about-blockTwo-names"><?php the_sub_field( 'staff_name' ); ?></h3>
                                        <h4 class="about-blockTwo-titles"><?php the_sub_field( 'staff_title' ); ?></h4>
                                    </div>
                                </div>
                                <br/>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <br/>
        <br/>
    </div>


    <br/>
    <br/>

    <div class="container-fluid about-blockThree-container">
        <div class="container">
            <div class="row">
                <div class="col-sm about-blockThree-containerLeft">
                    <?php $our_facility_image = get_field( 'our_facility_image' ); ?>
                    <?php if ( $our_facility_image ) { ?>
                        <img src="<?php echo $our_facility_image['url']; ?>" class="about-blockThree-image" alt="<?php echo $our_facility_image['alt']; ?>" />
                    <?php } ?>
                </div>
                <div class="col-sm about-blockThree-containerRight">
                    <h2 class="about-blockThree-heading"><?php the_field( 'our_facility_heading' ); ?></h2>
                    <p class="about-blockThree-bodyText"><?php the_field( 'our_facility_body_text' ); ?></p>
                    <?php $our_facility_button = get_field( 'our_facility_button' ); ?>
                    <?php if ( $our_facility_button ) { ?>
                        <a href="<?php echo $our_facility_button['url']; ?>" class="btn btn-primary about-blockThree-button" target="<?php echo $our_facility_button['target']; ?>"><?php echo $our_facility_button['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>

<?php
get_footer();