
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo esc_url(home_url());?>"><?php echo get_bloginfo('name');?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
        </button>
    
                <?php
                 wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
        </nav>
        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img  src="<?php  header_image(); ?>" alt="makeup girl background " class="img-fluid logo">
                <div class="position-absolute feature-bg">
                    <p class="feature-text"><?php featureText(); ?></p>
                </div>
            </div>
        </section>
    </header>