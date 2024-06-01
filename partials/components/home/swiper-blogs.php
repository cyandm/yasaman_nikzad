<?php

$blog_cards = get_posts([
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'fields' => 'ids',
    'orderby' => 'post_date',
    'order' => 'DESC',
]);

?>

<div class="content-title | text-center fs-title text-primary fs-lg-title-sm">
    <?php _e('Blogs', 'cyn-dm') ?></div>
</div>


<div class="swiper-main-wrapper">

    <div class="swiper" id="blogSwiper">

        <div class="swiper-wrapper | gap-40">


            <?php foreach ($blog_cards as $blog_id) : ?>
                <div class="swiper-slide"><?php cyn_get_card('blog-card', ['id' => $blog_id]) ?></div>
            <?php endforeach ?>


        </div>

        <div class="swiper-pagination"></div>


        <div class="swiper-scrollbar"></div>

    </div>


</div>