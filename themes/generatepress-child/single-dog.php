<?php

get_header();

echo do_shortcode("[rev_slider alias=\"dog-page\"]");

?>

    <div class="container-fluid puppy-blockOne-container">
        <div class="container">
            <br/>
            <br/>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">

                    <?php

                    $currentID = get_the_ID();

                    $args = array(
                        'post_type'   => 'dog',
                        'post_status' => 'publish',
                        'orderby' => 'title',

                    );

                    $puppies = new WP_Query( $args );
                    if( $puppies->have_posts() ){
                        ?>
                        <?php
                        while( $puppies->have_posts() ) : $puppies->the_post();

                            $name = get_the_title();
                            $gender = get_field('gender');
                            $color = get_field('color');
                            $dob = get_field('date_of_birth');
                            $image = get_field('image');
                            ?>
                            <nav class="navbar navbar-light bg-light">
                                <a class="navbar-brand hvr-grow" href="<?php echo get_permalink(); ?>">
                                    <h4 class="litters-blockOne-title"><?php echo $name ?> - <?php echo $color ?></h4>
                                </a>
                            </nav>
                        <?php
                        endwhile;
                    }
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <?php the_title( '<h1 class="puppy-blockOne-heading">', '</h1>' ); ?>
                    <img class="puppy-blockOne-image" src="<?php the_field('image'); ?>" alt="Image of <?php the_title(); ?>">
                </div>
            </div>
            <br/>
            <br/>
            <br/>
        </div>
    </div>

<?php
get_footer();
