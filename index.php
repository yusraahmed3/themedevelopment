<?php get_header() ?>

<main class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-8">
                <?php    if( have_posts()) : while( have_posts()): the_post();?>
                <div>
                    <h2><?php the_title();?></h2>
                    <p><?php echo get_the_date('F j, Y'); ?> by  <a href=""> <?php the_author();?></a></p>
                    <div class="pb-2">
                        <p class="d-inline">Tagged: news-offers</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsam dolorum perspiciatis aspernatur molestias sit quo vero, nam officiis ducimus assumenda dicta accusantium magni nihil modi, inventore, cum delectus quos.</p>
                </div>
                <?php
                        endwhile; else: ?>
                <nav>
                    <ul class="nav">
                        <li>Next Page</li>
                        &nbsp;
                        <li>Previous Page</li>
                    </ul>
                </nav>
            </div>
            <aside class="col-sm-4">
                <div class="py-3">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio laboriosam nostrum voluptate sapiente saepe totam culpa placeat, ipsa officiis illo facere alias temporibus ea corrupti aliquam autem sit error asperiores?
                        <hr>
                    </p>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="">June 2019</a></li>
                        <li><a href="">Oct 2019</a></li>
                        <li><a href="">May 2019</a></li>
                    </ol>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Categories</h4>
                    <ol class="list-unstyledmb-0">
                        <li><a href="">News</a></li>
                        <li><a href="">Offers</a></li>
                    </ol>
                </div>
                <div class="py-3">
                    <h4 class="font-italic">Followers</h4>
                    <p>icons</p>
                </div>
            </aside>
        </div>

    </main>

  

    <?php the_content()?>
 
    <p><?php _e('Sorry, no posts matchehd your criteria');?></p>
    <?php

        
    endif;
 
?>


    <?php get_footer() ?>