<?php
/*
Template Name: Dogs Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"dog-page\"]");

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
                    'post_type'   => 'dog',
                    'meta_key'		=> 'gender',
                    'meta_value'	=> 'female',
                    'post_status' => 'publish',
                    'orderby' => 'title',

                );

                $puppies = new WP_Query( $args );
                if( $puppies->have_posts() ){
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="litters-blockOne-heading">Female Adult Dogs</h1>
                        <br/>
                    </div>
                    <?php
                    while( $puppies->have_posts() ) : $puppies->the_post();

                        $name = get_the_title();
                        $gender = get_field('gender');
                        $color = get_field('color');
                        $dob = get_field('date_of_birth');
                        $image = get_field('image');
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 litters-blockOne-container-puppy" align="center">

                            <h2 class="litters-blockOne-title"><?php echo $name ?> - <?php echo $color ?></h2>
                            <a href="<?php echo get_permalink(); ?>">
                                <img class="litters-blockOne-image" src="<?php echo $image ?>" alt="Picture of <?php echo $name ?> the Lab">
                            </a>
                            <br/>
                            <br/>
                            <br/>
                        </div>
                    <?php
                    endwhile;
                }
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <br/>
    <br/>


    <div class="container-fluid litters-blockOne-container">
        <div class="container">
            <div class="row">
                <?php

                $currentID = get_the_ID();

                $args = array(
                    'post_type'   => 'dog',
                    'meta_key'		=> 'gender',
                    'meta_value'	=> 'male',
                    'post_status' => 'publish',
                    'orderby' => 'title',

                );

                $puppies = new WP_Query( $args );
                if( $puppies->have_posts() ){
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="litters-blockOne-heading">Male Adult Dogs</h1>
                        <br/>
                    </div>
                    <?php
                    while( $puppies->have_posts() ) : $puppies->the_post();

                        $name = get_the_title();
                        $gender = get_field('gender');
                        $color = get_field('color');
                        $dob = get_field('date_of_birth');
                        $image = get_field('image');
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 litters-blockOne-container-puppy" align="center">

                            <h2 class="litters-blockOne-title"><?php echo $name ?> - <?php echo $color ?></h2>
                            <a href="<?php echo get_permalink(); ?>">
                                <img class="litters-blockOne-image" src="<?php echo $image ?>" alt="Picture of <?php echo $name ?> the Lab">
                            </a>
                            <br/>
                            <br/>
                            <br/>
                        </div>
                    <?php
                    endwhile;
                }
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

<br/>
<br/>

<?php if ( have_rows( 'block_two' ) ) : ?>
    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
    <div class="container-fluid litters-blockTwo-container" align="center">
        <div class="container">
            <br/>
            <br/>
            <h2 class="litters-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h2>
            <p class="litters-blockTwo-bodyText">
                <?php the_sub_field( 'body_text' ); ?>
            </p>
            <?php $button = get_sub_field( 'button' ); ?>
            <?php if ( $button ) { ?>
                <a href="<?php echo $button['url']; ?>" class="btn btn-primary litters-blockTwo-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php } ?>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
    <?php endwhile; ?>
<?php endif; ?>



<?php
get_footer();