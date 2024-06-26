<?php $render_template = $args['render_template'] ?? true ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('container') ?>>
    <?php wp_body_open() ?>

    <?php get_template_part('assets/icons/icon') ?>
    <?php if ($render_template) : ?>
    <header>
        <?php cyn_get_component('mobile-menu') ?>

        <div class="header-wrapper d-flex jc-between mb-32 ai-center text-primary-100 fw-500 fs-20">
            <div class="logo-wrapper">
                <?php the_custom_logo(); ?>
            </div>

            <div class="menu-desktop | d-md-none">
                <?php if (has_nav_menu('header')) : ?>
                <nav class="menu">
                    <?php wp_nav_menu([
                                'theme_location' => 'header',
                                'menu_class' => 'header-menu | d-flex jc-space-between gap-48 ai-center'
                            ]) ?>
                </nav>
                <?php else : ?>
                <div class=" header-no-item">
                    Please Choose a Menu
                </div>
                <?php endif; ?>
            </div>

            <div class="search-wrapper d-block d-md-none">
                <a href="/?s=">
                    <svg class="icon search-icon | text-natural-100">
                        <use href="#icon-search" />
                    </svg>
                </a>

            </div>

            <div class="menu-icon-wrapper d-none d-md-block" id="mobileMenuOpener">
                <a href="#">
                    <svg class="icon menu-icon | text-natural-100">
                        <use href="#icon-menu" />
                    </svg>

                </a>
            </div>
        </div>

    </header>
    <?php endif; ?>