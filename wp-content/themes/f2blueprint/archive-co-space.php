<?php get_header(); ?>

<div style="background: lightgrey;">
 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sa-bg.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Co-Spaces

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

<div class="container-fluid pb-5 pl-4 pr-4" style="background: lightgrey;">
    <h1 class="text-center mt-5 pt-5">Co-Space for lease</h1>
    <h1 class="lead text-center pb-5">Amazing working spaces • Great Location in Chaweng Beach main road.
    </h1>
    <div class="row mt-5 mb-5">

    <?php 
        showPostListByTypeQuery(array('posttype'=>'co-space', 'perpage'=>4));
    ?>
</div>   
</div>
<?php get_footer(); ?>