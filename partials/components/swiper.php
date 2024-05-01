<div class="swiper rounded-16" id="singleServiceSwiper">

    <div class="swiper-wrapper">

        <?php

        for ($i = 1; $i <= 10; $i++) {

            $slideShow_image = get_field("image_$i");

            echo wp_get_attachment_image($slideShow_image, "full", false, ["class" => "img-responsive swiper-slide radius-16"]);
        }

        ?>

    </div>

    <div class="swiper-pagination d-flex radius-50 gap-4 pos-absolute"></div>


    <div class="swiper-button-prev d-flex jc-center pos-absolute ai-center radius-12 pb-12 pi-16">
        <img class="icon-test-7" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-8.png' ?>"
            alt="arrow-right">
    </div>

    <div class="swiper-button-next d-flex jc-center pos-absolute ai-center ai-center radius-12 pb-12 pi-16">
        <img class="icon-test-8" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-7.png' ?>"
            alt="arrow-left">
    </div>


    <div class="swiper-scrollbar"></div>

</div>