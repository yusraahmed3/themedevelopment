
<?php

get_header();

if(have_posts())
{
    while(have_posts())
    {
        the_post();
        ?>
        <div class="container">
        <div class="row">
            <div class="col-md-9">
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <?php
        the_content();?>
            </div>
            <div class="col-md-3">
            <?php
            get_sidebar();?>
            </div>

        </div>
       
      <?php  
    }
}
?>
</div>
<?php
get_footer();

?>