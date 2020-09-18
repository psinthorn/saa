<?php get_header(); ?>

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sa-bg.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Facilities

      <!-- Traditional way to show category or author -->
          <!-- <?php
            if (is_category()) {
                single_cat_title();
            }
            if (is_author()) {
                echo 'Post by: '; the_author();
            }
          ?> -->
      </h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>  
</div>

<!--samui-arena-facilities.html-->
<div class="container container--narrow page-section">
<div id="Facilities"></div>
<div class="container">
    <div class="text-center mt-5 mb-5">
        <h1 class="text-center mt-3">We provide full and clean facilities</h1>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block" style="width: 30%;">
    </div>
    <div class="row mb-5">

            <?php 
            showPostListByTypeQuery(array('posttype'=>'facility', 'perpage'=>4)); 
            wp_reset_postdata();
            ?>       
    </div>
</div>
</div>


<?php get_footer(); ?>
