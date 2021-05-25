<?php get_header() ?>

<main class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-12">
               <div class="row">
                   <div class="col-md-3">
                       <?php the_widget('WP_Widget_Pages') ?></div>
<div class="col-md-3">
<?php the_widget('WP_Widget_Categories') ?>
</div>
<div class="col-md-3">
<?php the_widget('WP_Widget_Recent_Posts') ?>
</div>
<div class="col-md-3">
<?php the_widget('WP_Widget_Tag_Cloud') ?>
</div>
</div>

        </div>
</div>

</main>


<?php get_footer() ?>