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
        <div class="time-line-wrapper d-flex jc-evenly">

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
            if (have_posts()) :
                while (have_posts()) : the_post();
                    cyn_get_card('service-info');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

    </div>


</main>

<?php get_footer() ?>