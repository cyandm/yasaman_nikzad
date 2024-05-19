<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $swiper_info = get_field("swiper-info"); ?>

<?php $landmark_percent_img = get_field("landmark-percent-img"); ?>

<?php $landmark_percent_txt = get_field("landmark-percent-txt"); ?>

<?php $landmark_percent = get_field("landmark-statistics_$i"); ?>


<main class="full-width">

    <div class="home-page-hero | full-width">

        <?php cyn_get_component("sidebar") ?>

        <div class="home-page-hero-swiper | d-flex f-column jc-start ai-end">

            <div class="swiper-info | d-flex ai-center f-column gap-32 pos-absolute">

                <div class="swiper-info-txt-wrapper | d-flex ai-center f-column gap-16">

                    <div class="swiper-info-txt | text-natural-100 text-center fs-title-1">
                        <?php echo $swiper_info["swiper-txt-1"] ?>
                    </div>

                    <div class="swiper-info-txt | text-natural-100 text-center fs-title-2">
                        <?php echo $swiper_info["swiper-txt-2"] ?>
                    </div>

                </div>

                <div class="swiper-info-btn">

                    <?php

                    $swiper_info_btn = $swiper_info["swiper-btn"];

                    $info_btn_url = $swiper_info_btn['url'];

                    $info_btn_title = $swiper_info_btn['title'];

                    ?>


                    <a class="info-btn | pi-20 pb-16 radius-12 text-natural-100 fs-caption-sm-1"
                        href="<?php echo esc_url($info_btn_url); ?>"><?php echo esc_html($info_btn_title); ?></a>

                </div>
            </div>

            <div class="">
                <?php cyn_get_component("mobile-menu") ?>
            </div>

            <div class="logo-wrapper | pos-absolute">
                <?php the_custom_logo(); ?>
            </div>

            <?php cyn_get_component('swiper') ?>

        </div>
    </div>

    <section class="home-page-main-content">

        <div class="landmark-percent-wrapper">

            <!-- <div class="landmark-percent-txt-wrapper fs-title text-natural-900 pos-absolute pos-md-static">
                <?php // _e('Dubai Guide', 'cyn-dm') 
                ?>
            </div> -->

            <div class="clr-fix-8"></div>

            <div class="landmark-percent-info-wrapper | box-col-3 gap-40 p-ie-40 ai-center">

                <div class="landmark-percent-info-img | col-span-1">
                    <?php echo wp_get_attachment_image($landmark_percent_img, 'full', false, ["class" => "landmark-percent-img | radius-16"]); ?>
                </div>

                <div
                    class="landmark-percent-txt-wrapper | col-span-2 d-flex f-column gap-20 text-natural-100 fs-body-2">

                    <div class="landmark-txt">
                        <?php echo $landmark_percent_txt ?>
                    </div>

                    <div class="clr-fix-28"></div>

                    <?php

                    for ($i = 1; $i <= 6; $i++) :
                        $landmark_percent = get_field("landmark-statistics_$i");
                    ?>

                    <div class="landmark-percent-txt | d-flex pos-relative jc-between ai-center fs-body-2 ">

                        <span>
                            <?php echo $landmark_percent["landmark-name_$i"] ?>
                        </span>

                        <div class="landmark-item | bg-natural-100">

                            <span class="landmark-item-inner | bg-natural-100 pos-absolute"
                                style="--width:<?php echo $landmark_percent["landmark-percent_$i"] . '%' ?>"></span>

                        </div>
                    </div>



                    <?php endfor; ?>

                </div>




            </div>
        </div>

    </section>

</main>

<!-- <div class="custom-div" style="--mehdi:"></div> -->







<?php get_footer(null, ['render_template' => false]) ?>