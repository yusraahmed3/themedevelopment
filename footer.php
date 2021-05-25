

<hr>
<footer class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-4">
                <h5>Stay connected:</h5>
                <form>
                    <div class="form-row form-group">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Sign Up
                        
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h5>Our setting:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, voluptates, dolorem tempora inventore veritatis ut magnam dolor nulla quos, recusandae labore quibusdam quae sunt doloremque error praesentium numquam? Ab, tempora?</p>
            </div>
            <div class="col-sm-4">
                <h5>Navigation</h5>
                <!-- <ul class="list-group">
                    <li class="list-group-item"><a href="blog.html">Blog</a></li>
                    <li class="list-group-item"><a href="contact.html">Contact Us</a></li>
                    <li class="list-group-item"><a href="privacy.html">Privacy Policy</a></li>
                </ul> -->
                <?php
                 wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'ul',
                    'container_class' => 'list-group',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
            </div>
        </div>
    </footer>


<?php wp_footer(); ?>
</body>

</html>