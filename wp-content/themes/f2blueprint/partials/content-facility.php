<div class="col-sm-12 col-md-4 col-lg-4 mt-3">
            <div class="card mb-5" style="height: 30rem;">
                <img class="card-img-top" src="<?php echo get_field('feature_image')['sizes']['featureImage']; ?>"
                alt="Samui Arena Facilities">

                <div class="card-body" style="background: lightgrey;">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>