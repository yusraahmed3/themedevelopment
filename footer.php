
<footer class="container-fluid bg-dark py-5">
        <div class="row">
            <div class="col-sm-4">
                <h5 class="text-light">Stay connected:</h5>
                <form>
                    <div class="form-row form-group form2">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary text-light">Sign Up
                        
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h5 class="text-light">Our setting:</h5>
                <p class="text-light">Lorem ipsum dolor this is sdjang consectetur adipisicing elit. Omnis, voluptates, dolorem tempora inventore veritatis ut magnam dolor nulla quos, recusandae labore quibusdam quae sunt doloremque error praesentium numquam? Ab, tempora?</p>
            </div>
            <div class="col-sm-4">
                <h5 class="text-light">Navigation</h5>
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