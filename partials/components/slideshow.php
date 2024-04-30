<div class="swiper">

    <div class="swiper-wrapper">

        <?php

        for ($i = 1; $i <= 10; $i++) {

            $slideShow_image = get_field("image_$i");

            echo wp_get_attachment_image($slideShow_image, "full", ["class" => "img-responsive , swiper-slide"]);
        }

        ?>

    </div>

    <div class="swiper-pagination"></div>


    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>


    <div class="swiper-scrollbar"></div>

</div>