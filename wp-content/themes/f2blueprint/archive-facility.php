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
        <div class="col-sm-12 col-md-4 col-lg-4 mt-3">
            <div class="card mb-5" style="height: 30rem;">
                <img class="card-img-top" src="<?php echo get_theme_file_uri('/images/samui_arena_facilities_changing_room_02.jpg'); ?>"
                    alt="Samui Arena Facilities">
                <div class="card-body" style="background: lightgrey;">
                    <h5 class="card-title">Reception</h5>
                    <p class="card-text">Samui Arena has spacious reception right at the main entrance include of non
                        alcohol drinks sell.
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-3 ">
            <div class="card mb-5" style="height: 30rem;">
                <img class="card-img-top" src="<?php echo get_theme_file_uri('/images/samui_arena_facilities_changing_room_03.jpg'); ?>" alt="Samui Arena Facilities" >
                <div class="card-body" style="background: lightgrey;">
                    <h5 class="card-title">Bath Room</h5>
                    <p class="card-text">Our service include of hot & cold shower are provides within male and female
                        bathroom.
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-3 ">
            <div class="card mb-5" style="height: 30rem;">
                <img class="card-img-top" src="<?php echo get_theme_file_uri('/images/samui_arena_facilities_changing_room_01.jpg'); ?>"
                    alt="Samui Arena Facilities">
                <div class="card-body" style="background: lightgrey;">
                    <h5 class="card-title">Changing Room</h5>
                    <p class="card-text">On Samui Arena ground changing room is provides within male and female
                        bathroom.
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>
