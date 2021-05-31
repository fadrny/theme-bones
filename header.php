<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();
    ?>
</head>
<body>
<nav class="navbar">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggler" data-toggle="open-navbar1">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="/">
                <img class="logo-img" src="<?php
                if(has_custom_logo()){
                    $custom_logo_id = get_theme_mod('custom_logo');
                    echo(wp_get_attachment_image_src($custom_logo_id, 'full')[0]);
                }
                ?>" alt="logo">
            </a>
        </div>


        <div class="navbar-menu" id="open-navbar1">
            <ul class="navbar-nav">
                <li class="navbar-dropdown">
                    <a class="dropdown-toggler" data-dropdown="skola-vyber">
                        škola <i class="fa fa-angle-down"></i>
                    </a>

                    <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'school',
                            'container'=>'',
                            'theme_location'=>'school',
                            'items_wrap' => '<ul class="dropdown" id="skola-vyber">%3$s</ul>'
                        )
                    )
                    ?>

                </li>

                <li class="navbar-dropdown">
                    <a class="dropdown-toggler" data-dropdown="ucitel-vyber">
                        učitel <i class="fa fa-angle-down"></i>
                    </a>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'teacher',
                            'container'=>'',
                            'theme_location'=>'teacher',
                            'items_wrap' => '<ul class="dropdown" id="ucitel-vyber">%3$s</ul>'
                        )
                    )
                    ?>
                </li>

                <li class="navbar-dropdown">
                    <a class="dropdown-toggler" data-dropdown="rodiczak-vyber">
                        rodič / žák <i class="fa fa-angle-down"></i>
                    </a>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'parent',
                            'container'=>'',
                            'theme_location'=>'parent',
                            'items_wrap' => '<ul class="dropdown" id="rodiczak-vyber">%3$s</ul>'
                        )
                    )
                    ?>
                </li>

                <li class="navbar-dropdown">
                    <a class="dropdown-toggler" data-dropdown="kontakty-vyber">
                        kontakty <i class="fa fa-angle-down"></i>
                    </a>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'contacts',
                            'container'=>'',
                            'theme_location'=>'contacts',
                            'items_wrap' => '<ul class="dropdown" id="kontakty-vyber">%3$s</ul>'
                        )
                    )
                    ?>
                </li>
                <li class="navbar-dropdown intraBtn-wrapper">
                    <a href="#" class="intraBtn">
                        INTERNÍ SYSTÉM
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
