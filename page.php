<?php

get_header();

if(have_posts())
{
    while(have_posts())
    {
        the_post();
        ?>
        <div class="container">
        <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <?php
        the_excerpt();?>
        </div>
        <?php
    }
}

get_footer();

?>