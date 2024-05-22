<div class="services-wrapper | pos-relative">

    <div class="services-title-wrapper | fs-title text-natural-900 pos-absolute pos-lg-static">
        <?php _e('What I Do', 'cyn-dm')
        ?>
    </div>

    <?php

    $blog_posts = get_posts([
        'posts_per_page' => 2,
        'post_type' => 'service'
    ]);

    ?>

    <div class="services-post-main-wrapper | d-grid gap-32">

        <?php foreach ($blog_posts as $blog_post) : ?>

        <div class="services-post-wrapper | box-col-3 ai-center gap-20">

            <div class="post-img | col-span-1 col-span-lg-3">
                <?php echo get_the_post_thumbnail($blog_post, 'full', ["class" => "post-img | radius-16"]) ?>
            </div>

            <div class="post-content | col-span-2 col-span-lg-3 d-flex gap-12">

                <div class="post-title-txt-wrapper">
                    <div class="post-title">
                        <h2 class="text-natural-100"><?php echo $blog_post->post_title ?></h2>
                    </div>

                    <div class="post-txt | text-start">
                        <?php echo get_field('swiper-info', $blog_post->ID); ?>
                    </div>
                </div>


                <div class="read-more-btn-wrapper">
                    <?php

                        $readMore_btn = get_field('blog-post-btn');

                        $readMore_btn_url = $readMore_btn['url'];

                        $readMore_btn_title = $readMore_btn['title'];

                        ?>

                    <a class="btn-secondary pb-16 pi-20 radius-12"
                        href="<?php echo esc_url($readMore_btn_url); ?>"><?php echo esc_html($readMore_btn_title); ?></a>

                </div>

            </div>

        </div>

        <?php endforeach ?>

    </div>

</div>