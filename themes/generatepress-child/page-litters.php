<?php
/*
Template Name: Our Litters Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"our-litters-page\"]");

?>

    <br/>
    <br/>
    <br/>

    <div class="container-fluid litters-blockOne-container">
        <div class="container">
            <div class="row">
                <?php

                $currentID = get_the_ID();

                $args = array(
                    'post_type'   => 'puppies',
                    'post_status' => 'publish',
                    'orderby' => 'title',

                );

                $puppies = new WP_Query( $args );
                if( $puppies->have_posts() ){
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="litters-blockOne-heading">Available Puppies</h1>
                        <br/>
                    </div>
                    <?php
                    while( $puppies->have_posts() ) : $puppies->the_post();

                        $name = get_the_title();
                        $gender = get_field('gender');
                        $color = get_field('color');
                        $dob = get_field('date_of_birth');
                        $image = get_field('puppy_photo');
                        ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 litters-blockOne-container-puppy">
                        <a href="<?php echo get_permalink(); ?>">
                            <img class="litters-blockOne-image" src="<?php echo $image ?>" alt="Picture of <?php echo $name ?> the Lab">
                        </a>
                        <br/>
                        <br/>
                        <h2 class="litters-blockOne-title"><?php echo $name ?> - <?php echo $color ?></h2>
                        <a href="<?php echo get_permalink(); ?>">
                            <button type="button" class="btn btn-primary litters-blockOne-button">Learn More</button>
                        </a>
                    </div>
                    <?php
                    endwhile;
                }
                else{
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                        <?php if ( have_rows( 'no_puppies_available' ) ) : ?>
                            <?php while ( have_rows( 'no_puppies_available' ) ) : the_row(); ?>
                                <h2 class="litters-blockOne-heading"><?php the_sub_field( 'heading' ); ?></h2>
                                <br/>
                                <h3 class="litters-blockOne-title"><?php the_sub_field( 'title' ); ?></h3>
                                <br/>
                                <?php $button = get_sub_field( 'button' ); ?>
                                <?php if ( $button ) { ?>
                                    <a href="<?php echo $button['url']; ?>" class="btn btn-primary litters-blockOne-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php
                }
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <div class="container-fluid litters-blockTwo-container" align="center">
        <div class="container">
            <br/>
            <br/>
            <?php if ( have_rows( 'litters_block_two' ) ) : ?>
                <?php while ( have_rows( 'litters_block_two' ) ) : the_row(); ?>
                    <h2 class="litters-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <?php if ( have_rows( 'body_text' ) ) : ?>
                        <?php while ( have_rows( 'body_text' ) ) : the_row(); ?>
                            <p class="litters-blockTwo-bodyText"><?php the_sub_field( 'paragraph' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <a href="<?php echo $button['url']; ?>" class="btn btn-primary litters-blockTwo-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <br/>
        <br/>
        <br/>
    </div>



<?php
get_footer();