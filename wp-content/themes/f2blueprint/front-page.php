<?php 
get_header(); 
homePageBanner();
?>

  <!-- <div class="page-banner"> 
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sa-bg.jpg'); ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We are the 1st professional turf on the Southern gulf island of Thailand since 2010.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out our <strong>rate</strong> you&rsquo;re interested in?</h3>
        <a href="/rates" class="btn btn--large btn--blue">Check Our Rate</a>
      </div>
  </div> -->

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php 
            showPostEventListByTypeQuery(array('posttype'=>'event', 'perpage'=>2))           
          ?>
           <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">View all event(s)</a></p>

        </div>
      </div>

      <?php wp_reset_postdata(); ?>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
            <?php 
             $twoPostsQuery = new WP_Query(array(
                'posts_per_page' => 2
            ));
            while ($twoPostsQuery->have_posts()) {
                    $twoPostsQuery->the_post()  
             ?>
              <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else { 
                    echo wp_trim_words(get_the_content(), 18);
                } 
                ?>
                    <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                </div>
            </div>

             
            <?php      
                }
                wp_reset_postdata();
            ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>

        </div>
      </div>
    </div>
    
    <?php 
      if(function_exists('spotlightSlide')){
        spotlightSlide(array('posttype'=>'spotlight'));
      }
    ?>

<?php get_footer(); ?>