<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $intro = get_field("intro"); ?>

<?php $swiper_info = get_field("swiper-info"); ?>

<main class="full-width">

    <div class="home-page-hero full-width">


        <!-- <div class="home-page-hero-menu-icon d-none d-md-block" id="mobileMenuOpener">
        <a href="#"><img class="pi-20 pb-16 radius-12"
                src="<?php //echo get_template_directory_uri() . '/assets/img/icon-test-5.png' 
                        ?>" alt="search"></a>
        </div> -->


        <div class="home-page-hero-sidebar d-flex f-column pos-fixed pb-40 pi-20 gap-40">

            <div class="sidebar-intro-wrapper | d-flex f-column ai-center gap-16">

                <div class="intro-img">

                    <?php echo wp_get_attachment_image($intro["intro-img"], 'full', false, ["class" => "intro-image"]); ?>

                </div>

                <div class="intro-txt-wrapper text-center">

                    <div class="intro-name-txt text-natural-100">

                        <?php echo $intro["intro-name"] ?>

                    </div>

                    <div class="intro-job-txt text-natural-100">

                        <?php echo $intro["intro-job"] ?>

                    </div>

                </div>

            </div>

            <hr>

            <div class="sidebar-menu">

                <?php if (has_nav_menu('header')) : ?>
                <nav class="menu">
                    <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'menu_class' => 'header-menu | d-flex f-column gap-32 ai-center text-natural-100'
                        ]) ?>
                </nav>
                <?php else : ?>
                <div class=" header-no-item">
                    Please Choose a Menu
                </div>
                <?php endif; ?>

            </div>

            <hr>

            <div class="sidebar-social-icons-wrapper d-flex jc-center gap-12 ">
                <img class="sidebar-social-icons bg-natural-900 radius-8 p-8"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-2-white.png' ?>"
                    alt="test-icon">
                <img class="sidebar-social-icons bg-natural-900 radius-8 p-8"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-3-white.png' ?>"
                    alt="test-icon">
                <img class="sidebar-social-icons bg-natural-900 radius-8 p-8"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-4-white.png' ?>"
                    alt="test-icon">
            </div>

        </div>

        <div class="home-page-hero-swiper">

            <div class="swiper-info d-flex ai-center f-column gap-32 pos-absolute">

                <div class="swiper-info-txt-wrapper d-flex f-column gap-16">

                    <div class="swiper-info-txt text-natural-100 fs-title-1">
                        <?php echo $swiper_info["swiper-txt-1"] ?>
                    </div>

                    <div class="swiper-info-txt text-natural-100 ">
                        <?php echo $swiper_info["swiper-txt-2"] ?>
                    </div>

                </div>

                <div class="swiper-info-btn">

                    <?php

                    $swiper_info_btn = $swiper_info["swiper-btn"];

                    $info_btn_url = $swiper_info_btn['url'];

                    $info_btn_title = $swiper_info_btn['title'];

                    ?>


                    <a class="info-btn pi-20 pb-16 radius-12 text-natural-100 fs-caption-sm-1"
                        href="<?php echo esc_url($info_btn_url); ?>"><?php echo esc_html($info_btn_title); ?></a>

                </div>

            </div>

            <?php cyn_get_component('swiper') ?>

        </div>
    </div>

</main>




<?php get_footer(null, ['render_template' => false]) ?>