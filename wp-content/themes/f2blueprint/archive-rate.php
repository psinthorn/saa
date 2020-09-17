<?php get_header(); ?>

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sa-bg.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"> Samui Arena Standard Rate

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



    <img src="<?php echo get_theme_file_uri('/images/samui-arena-rate-1536x865.jpg'); ?>" alt="Samui Arena Rate" style="width: 100%">


     


<?php get_footer(); ?>