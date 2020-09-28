
<!-- echo get_field('page_banner_background_image')['sizes']['pageBanner']; -->
<?php 
 if (get_field('page_banner_background_image')) {
                        $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner']; 
                        } else {
                            $args['photo'] = get_theme_file_uri('/images/sa-bg.jpg');
                        }

?>

<div class="hero-slider__slide" style="background-image: url(<?php echo $args['photo'] ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
                <p class="t-center" style="word-wrap: break-word;"><?php echo get_field('page_banner_sub_title'); ?></p>
                <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
</div>
