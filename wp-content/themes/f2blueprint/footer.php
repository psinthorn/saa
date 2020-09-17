 <div>
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3934.8205635867666!2d100.04506601479038!3d9.524313943178239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3054f1b029c008d7%3A0x1fdd68bec9d29de5!2sSamui%20Arena!5e0!3m2!1sen!2sth!4v1592099424782!5m2!1sen!2sth"
    width="100%" height="450" frameborder="0" style="border: 0; margin: 0;" allowfullscreen="" aria-hidden="false"
    tabindex="0">
  </iframe>
</div>
 <footer class="site-footer">
   <!--maps.html-->


      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <p>
            <img src="<?php echo get_theme_file_uri('/images/sa-logo-with-thai-text.png'); ?>" alt="Samui Arena Sportsmanship Performance" style="width: 11rem">
          </p>

          
            <!-- <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url(); ?>"><strong>SAMUI</strong>ARENA</a>
            </h1>
            <p><a class="site-footer__link" href="tel:66857958000" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> 085.795.8000</a>
            <br/>
          <a class="site-footer__link" href="tel:668ๅต/ๅตต/จ" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i> 081.921.9920</a></p>
          <p> -->


            <img src="<?php echo get_theme_file_uri('/images/sportmanship-performance.png'); ?>" alt="Samui Arena Sportsmanship Performance" style="width: 11rem">
          </p>
            
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two pt-3">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">

                <!-- 
                <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksOne'
                        ));
                    ?>
                -->

                 <ul>
                    <li <?php 
                    if (is_page('about-us') or wp_get_post_parent_id(0) == 12) { 
                    echo 'class="current-menu-item"'; }?>>
                    <a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>

                    <li <?php if (get_post_type() == 'field') echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('field'); ?>"><a href="<?php echo get_post_type_archive_link('field'); ?>">Fields</a></li>

                      <li <?php if (get_post_type() == 'facility' OR is_page('facility')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('facility'); ?>">Facilities</a></li>
                    
                    <!-- <li <?php 
                    if (is_page('rate')) { 
                    echo 'class="current-menu-item"'; }?>>
                    <a href="<?php echo site_url('/rates'); ?>">Rate</a></li>

                    <li <?php 
                    if (is_page('co-space')) { 
                    echo 'class="current-menu-item"'; }?>>
                    <a href="<?php echo site_url('/co-spaces'); ?>">Co-Space</a></li> -->


                      <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>

                    <!-- <li <?php if (get_post_type() == 'type') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('type'); ?>">Competition Type(s)</a></li> -->

                    <!-- <li <?php if (get_post_type() == 'teamwork') echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('teamwork'); ?>">Teamwork</a></li> -->

                    <li <?php 
                    if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>>
                    <a href="<?php echo site_url('/blog'); ?>">Blog</a></li>

                    <li <?php 
                    if (is_page('contact-us')) { 
                    echo 'class="current-menu-item"'; }?>>
                    <a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>

            </ul>

                <!-- 
                    <ul>
                  <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul>
                -->
              </nav>
            </div>

            <div class="site-footer__col-three pt-3">
              <h3 class="headline headline--small">Commercial</h3>
              <nav class="nav-list">
                   <!-- <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksTwo'
                        ));
                    ?> -->
                <ul>
                   <li><a href="/rates">Rate</a></li>
                  <li><a href="/co-space">Co-Space</a></li>
                  
                 
                  <!-- <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy</a></li> -->
                  <!-- <li><a href="#">Careers</a></li> -->
                </ul>
               
              </nav>
            </div>
          </div>         

          <div class="site-footer__col-four pt-3">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="//www.facebook.com/samuiarena" class="social-color-facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <!-- <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li> -->
                <li>
                  <a href="target="_blank"" class="social-color-instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>