<?php 
    get_header();
?>

<div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3><?php the_title(); ?></h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/divider-purple.png" alt="divider" class="w-25">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <form class="text-left">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email...">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </form>
            </div>
        </div>
    </div>


 

<?php get_footer(); ?>