<?php

get_header();

echo do_shortcode("[rev_slider alias=\"our-litters-page\"]");

?>

<div class="container-fluid puppy-blockOne-container">
    <div class="container">
        <br/>
        <br/>
        <br/>
        <?php the_title( '<h1 class="puppy-blockOne-heading">', '</h1>' ); ?>
        <div class="row">
            <div class="col-md puppy-blockOne-container-left">
                <div class="puppy-blockOne-bodyText">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                    endif;
                    ?>
                </div>
                <?php
                $color = get_field('color');
                if (($color == 'chocolate') || ($color == 'yellow') || ($color == 'black')){
                  ?>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UEZ8Z4QZHSXB2" target="_blank">
                        <button type="button" class="btn btn-primary puppy-blockOne-button"><i class="fab fa-paypal fa-lg"></i> $100 Nonrefundable Deposit</button>
                    </a>
                    <?php
                }
                else if (($color == 'silver') || ($color == 'charcoal') || ($color == 'red')){
                    ?>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SUF2G538R883A" target="_blank">
                        <button type="button" class="btn btn-primary puppy-blockOne-button"><i class="fab fa-paypal fa-lg"></i> $200 Nonrefundable Deposit</button>
                    </a>
                    <?php
                }
                ?>
                <br/>
                <br/>
            </div>
            <div class="col-md puppy-blockOne-container-right" align="center">

                <div><img class="puppy-blockOne-image" src="<?php the_field('puppy_photo'); ?>" alt="Image of <?php the_title(); ?>"></div>

                <br/>
                <br/>
                <?php the_title( '<h3 class="puppy-blockOne-title">', '</h3>' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid puppy-blockTwo-container">
    <div class="container">
        <br/>
        <br/>
        <div class="row">
            <div class="col-md puppy-blockTwo-container-left" align="center">
                <?php
                $momID = get_field('mom');
                $args = array(
                    'post_type'   => 'dog',
                    'post_status' => 'publish',
                    'post__in' => $momID,

                );
                $mom = new WP_Query( $args );
                if( $mom->have_posts() ) :

                    ?>
                    <?php
                    while( $mom->have_posts() ) : $mom->the_post();
                        $name = get_the_title();
                        $gender = get_field('gender');
                        $color = get_field('color');
                        $dob = get_field('date_of_birth');
                        $image = get_field('image');
                        ?>


                        <h2 class="puppy-blockTwo-headings">Mom</h2>
                        <img class="puppy-blockTwo-images" src="<?php echo $image ?>" alt="">
                        <br/>
                        <br/>
                        <h2 class="puppy-blockTwo-titles"><?php echo $name ?> - <?php echo $color ?></h2>
                        <h3 class="puppy-blockTwo-subtitles"><i>DOB - <?php echo $dob ?></i></h3>

                    <?php
                    endwhile;
                endif;
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-md puppy-blockTwo-container-right" align="center">
                <?php
                $dadID = get_field('dad');
                $args = array(
                    'post_type'   => 'dog',
                    'post_status' => 'publish',
                    'post__in' => $dadID,

                );
                $dad = new WP_Query( $args );
                if( $dad->have_posts() ) :

                    ?>
                    <?php
                    while( $dad->have_posts() ) : $dad->the_post();
                        $name = get_the_title();
                        $gender = get_field('gender');
                        $color = get_field('color');
                        $dob = get_field('date_of_birth');
                        $image = get_field('image');
                        ?>


                        <h2 class="puppy-blockTwo-headings">Dad</h2>
                        <img class="puppy-blockTwo-images" src="<?php echo $image ?>" alt="">
                        <br/>
                        <br/>
                        <h2 class="puppy-blockTwo-titles"><?php echo $name ?> - <?php echo $color ?></h2>
                        <h3 class="puppy-blockTwo-subtitles"><i>DOB - <?php echo $dob ?></i></h3>

                    <?php
                    endwhile;
                endif;
                wp_reset_query();
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <br/>
        <br/>
    </div>
</div>

<div class="container-fluid puppy-blockThree-container">
    <br/>
    <br/>
    <div class="container" align="center">
        <a href="http://techfusionproject4.com/our-litters/">
            <button type="button" class="btn btn-primary puppy-blockThree-button">View Our Other Puppies</button>
        </a>
    </div>
    <br/>
    <br/>
</div>

<?php
get_footer();


