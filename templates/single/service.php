<?php get_header() ?>
<?php $post_id = $args['post_id'] ?? get_the_ID(); ?>

<main class="main-service pos-relative">

    <div class="bg-service-svg-wrapper pos-absolute">

        <img class="bg-service-svg" src="<?php echo get_template_directory_uri() . '/assets/img/bg-service.svg' ?>" alt="bg-service">
    </div>

    <div class="service-hero-wrapper | box-col-5 gap-48 ai-center">

        <div class="service-hero-txt col-span-3 col-span-md-5 text-natural-100">
            <h1 class="fs-title-1"><?php the_title() ?></h1>
        </div>


        <div class="service-hero-img col-span-2 col-span-md-5">
            <?php if (has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'service-img radius-16']); ?>
            <?php endif; ?>
        </div>

    </div>

    <div class="time-line-info-wrapper d-flex f-column jc-center gap-60 m-bs-108">
        <div class="time-line-wrapper d-flex d-lg-none jc-evenly">

            <div class="time-section-1-wrapper d-flex jc-center ai-center gap-4">
                <div class="time-section-1 fs-h2 text-natural-100"><?php echo get_field("hours") ?></div>
                <span class="fs-title-2 text-natural-100">Hours</span>
            </div>

            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-6.png' ?>" alt="arrow">

            <div class="time-section-2-wrapper d-flex jc-center ai-center gap-4">
                <div class="time-section-2 fs-h2 text-natural-100"><?php echo get_field("days") ?></div>
                <span class="fs-title-2 text-natural-100">Days</span>
            </div>

            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-6.png' ?>" alt="arrow">

            <div class="time-section-3-wrapper d-flex jc-center ai-center gap-4">
                <div class="time-section-3 fs-h2 text-natural-100"><?php echo get_field("weeks") ?></div>
                <span class="fs-title-2 text-natural-100">Weeks</span>
            </div>

        </div>

        <div class="info-cards-wrapper">

            <?php
            cyn_get_component('service-info');

            ?>

        </div>

    </div>


    <div class="swiper-main-wrapper m-bs-108">

        <?php cyn_get_component('swiper') ?>

        <div class="swiper-info-wrapper m-bs-80 fs-body text-natural-100">
            <?php echo get_field('swiper-info') ?>
        </div>

    </div>

    <div class="feature-cards-main-wrapper m-bs-76 d-flex f-column gap-40 ai-center">

        <div class="feature-txt-wrapper fs-title text-natural-900 pos-absolute pos-md-static">Features</div>

        <div class="feature-cards m-bs-120 d-flex f-column gap-40 ac-lg-start">

            <?php cyn_get_component('feature') ?>

        </div>

    </div>

    <div class="information-wrapper m-bs-112 m-be-80 d-flex f-column ai-center">

        <div class="information-txt-wrapper fs-title m-be-120 text-natural-900 pos-absolute pos-xl-static">Get
            Information</div>

        <div class="clr-fix-32"></div>

        <div class="information-cta-wrapper m-bs-120 d-flex gap-12 jc-between ai-center f-row f-xl-column bg-primary p-40 radius-16">

            <?php cyn_get_component('information') ?>

        </div>

    </div>







</main>

<?php get_footer() ?>