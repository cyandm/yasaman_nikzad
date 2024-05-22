<div class="landmark-wrapper | pos-relative">
    <div class="services-title-wrapper | fs-title text-natural-900 pos-absolute pos-lg-static">
        <?php _e('Dubai', 'cyn-dm')
        ?>
    </div>

    <?php

    $landmark_posts = get_posts([
        'posts_per_page' => 6,
        'post_type' => 'landmarks'
    ]);

    ?>


</div>