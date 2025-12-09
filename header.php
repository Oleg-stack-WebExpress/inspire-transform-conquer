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
        <!--Навигационная панель с переходом кнопки меню в "гамбургер" на телефоне-->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!--Логотип с назвнием-->
                <a class="logo" href="/">
                    <img src="<?= assets('images/logo.png'); ?>" alt="Spotlight icon">
                    <h2>Spotlight</h2>
                </a>
                <!--Кнопка для откр./закр. вкладок на телефоне-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Выкидные вкладки на телефоне-->
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
                <!--Ползунок ночь/день-->
                <div class="slide-switch d-none d-lg-block">
                    <div class="slide-track">
                        <div class="slide-thumb"><i class="icon-sun"></i></div>
                        <span class="slide-state off">
                        </span>
                        <span class="slide-state on"><i class="icon-moon"></i></span>
                    </div>
                </div>
                <!--Пооисковик-->
                <div class="search-container d-none d-lg-block">
                    <input type="search" class="form-control search-input" placeholder="Search..." aria-label="Search">
                    <i class="icon-zoom-in-outline"></i>
                </div>
                <!--Кнопка "Поиск"-->
                <button type="button" class="btn btn-dark d-none d-lg-block">Sign-up</button>
            </div>
        </nav>
    </header>


    <main class="main-content padding-top-150">