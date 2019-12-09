<?php
/*
Template Name: Home Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"Home page\"]");

?>

<br/>
<br/>
<br/>

    <div class="container-fluid home-blockOne-container">
        <div class="container">
            <div class="row">
                <div class="col-sm home-blockOne-containerLeft" align="left">
                    <h1 class="home-blockOne-heading"><?php the_field( 'heading' ); ?></h1>
                    <?php if ( have_rows( 'body_text' ) ) : ?>
                        <?php while ( have_rows( 'body_text' ) ) : the_row(); ?>
                            <p class="home-blockOne-bodyText"><?php the_sub_field( 'paragraph' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php $button = get_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <a href="<?php echo $button['url']; ?>" class="btn btn-primary home-blockOne-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="col-sm home-blockOne-containerRight">
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="container-fluid home-blockTwo-container">
        <br/>
        <br/>
        <div class="container" align="center">
            <h2 class="home-blockTwo-heading"><?php the_field( 'contact_form_heading' ); ?></h2>
            <h3 class="home-blockTwo-subheading"><?php the_field( 'contact_form_subheading' ); ?></h3>
            <?php get_template_part( 'contactFormCode' ); ?>
        </div>
        <br/>
        <br/>
        <br/>
    </div>

<?php
get_footer();