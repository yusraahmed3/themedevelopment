<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php/* bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <title><?php bloginfo('name')?></title>
    <?php wp_head();?>
</head>
<body <?php/* body_class()?>>
<div class="heading">
<h1 class = "title1"><a href="<?php /*echo home_url()?>"> <?php bloginfo('name')?></a></h1>
<p class="title2"><?php/* bloginfo('description')*/?></p>

<hr class="line1">
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
  <div class="container">
     Brand and toggle get grouped for better mobile display 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><?php /* bloginfo('name')?></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-nav',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
       */ ?>
    </div>
</nav> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/custom.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Theme name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img src="assets/images/lake.jpg" alt="lake background " class="header_img">
                <div class="position-absolute feature-bg">
                    <p class="feature-text">FULLY RESPONSIVE <br> PREMIUM SPA THEME <br> FOR WORDPRESS</p>
                </div>
            </div>
        </section>
    </header>