<div class="swiper-main-wrapper">

    <div class="swiper rounded-16" id="singleServiceSwiper">

        <div class="swiper-navigation | d-lg-flex">
            <div class="swiper-button-prev d-flex jc-center pos-absolute ai-center radius-12 pb-12 pi-16">
                <svg class="icon icon-service-swiper | pos-absolute text-natural-100">
                    <use href="#icon-arrow-right" />
                </svg>
            </div>

            <div class="swiper-button-next d-flex jc-center pos-absolute ai-center ai-center radius-12 pb-12 pi-16">
                <svg class="icon icon-service-swiper | pos-absolute text-natural-100">
                    <use href="#icon-arrow-left" />
                </svg>
            </div>

        </div>


        <div class="swiper-wrapper">

            <?php

            for ($i = 1; $i <= 4; $i++) {

                $slideShow_image = get_field("image_$i");

                echo wp_get_attachment_image($slideShow_image, "full", false, ["class" => "img-responsive swiper-slide radius-16"]);
            }

            ?>

        </div>

        <div class="swiper-pagination d-flex jc-center radius-50 gap-4 pos-absolute"></div>

    </div>

    <div class="clr-fix-80 d-lg-none"></div>
    <div class="clr-fix-20 d-none d-lg-block "></div>

</div>