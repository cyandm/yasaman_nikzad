<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<main class="full-width">

    <div class="home-page-hero | full-width">

        <?php cyn_get_component("homePage/sidebar") ?>

        <div class="home-page-hero-swiper | d-flex f-column jc-start ai-end">

            <?php cyn_get_component("homePage/swiper-info") ?>

            <div class="">
                <?php cyn_get_component("mobile-menu") ?>
            </div>

            <div class="logo-wrapper | pos-absolute">
                <?php the_custom_logo(); ?>
            </div>

            <?php cyn_get_component('services/swiper') ?>

        </div>
    </div>

    <div class="clr-fix-80 d-lg-none"></div>

    <section class="home-page-main-content | pi-40">

        <?php cyn_get_component("homePage/landmark-percent") ?>

        <div class="clr-fix-120 d-lg-none"></div>
        <div class="clr-fix-64 d-lg-none"></div>

        <?php cyn_get_component("homePage/services-section") ?>

        <div class="clr-fix-120"></div>

        <div class="video-teaser-wrapper">

        </div>


        <?php cyn_get_component('services/feature')  ?>

        <div class="clr-fix-120"></div>
        <div class="clr-fix-64 d-lg-none"></div>

        <?php cyn_get_component('homePage/landmark-section') ?>

    </section>

</main>





<?php get_footer(null, ['render_template' => false]) ?>