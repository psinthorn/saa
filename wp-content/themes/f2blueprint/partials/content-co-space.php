<div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card" style="width: 95%; height: 25rem">
                <div class="img-fluid card-img-top co-space-bg text-center font-weight-bold pt-5 pb-5" style="background-image: url(<?php echo get_field('page_banner_background_image')['sizes']['PageBanner'];  ?>)">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <?php echo get_the_content() ?>
                    </p>
                    <br />
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
</div>
