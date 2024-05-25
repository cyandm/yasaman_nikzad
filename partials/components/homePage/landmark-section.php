<div class="landmark-wrapper | d-flex f-column gap-40 ai-center pos-relative">
    <div class=" | content-title fs-title text-natural-900 pos-absolute pos-lg-static">
        <?php _e('Dubai', 'cyn-dm')
        ?>
    </div>

    <?php

    $landmark_posts = get_posts([
        'posts_per_page' => 6,
        'post_type' => 'landmark'
    ]);

    ?>

    <div class="landmark-section | box-col-2 box-col-lg-1 gap-20">

        <?php foreach ($landmark_posts as $landmark_post) : ?>

            <div class="landmark-image-wrapper | d-flex jc-center ai-center">
                <h3 class="landmark-image-text | pos-absolute d-md-none text-natural-100 fs-h2">
                    <?php echo $landmark_post->post_title ?>
                </h3>
                <?php echo get_the_post_thumbnail($landmark_post, 'full', ['class' => 'landmark-img']); ?>
            </div>

        <?php endforeach ?>

    </div>

</div>