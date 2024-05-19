<?php

$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
]);


?>


<p class="content-title | text-center fs-title text-primary fs-lg-title-sm">Blogs</p>


<div class="d-flex f-nowrap gap-32">
    <?php
    foreach ($posts  as $post) {
        cyn_get_card('post-mini', ['ID' => $post->ID]);
    }
    ?>
</div>