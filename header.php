<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>


</head>

<body>
    <header class="header">
        <!--Складывающийся Navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="logo" href="/">
                    <img src="<?= assets('images/logo.png'); ?>" alt="Spotlight icon">
                    <h2>Spotlight</h2>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                        'link_class' => 'nav-link'
                    ]);
                    ?>
                </div>
                <!--Ползунок-->
                <div class="slide-switch">
                    <div class="slide-track">
                        <div class="slide-thumb"><i class="icon-sun"></i></div>
                        <span class="slide-state off">
                        </span>
                        <span class="slide-state on"><i class="icon-moon"></i></span>
                    </div>
                </div>
                <!--Пооисковик-->
                <div class="search-container">
                    <input type="search" class="form-control search-input" placeholder="Search..." aria-label="Search">
                    <i class="icon-zoom-in-outline"></i>
                </div>
                <!--Кнопка Sign-In-->
                <button type="button" class="btn btn-dark">Sign-up</button>
            </div>
        </nav>
    </header>


    <main class="main-content padding-top-100">