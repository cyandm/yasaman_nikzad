<?php

$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
]);


?>

<!-- <div class="clr-fix-120"></div> -->

<p class="get-in-touch | text-center fs-title text-primary fs-lg-title-sm pos-relative">Blogs</p>


<div>
    <?php
    foreach ($posts  as $post) {
        cyn_get_card('post-mini', ['ID' => $post->ID]);
    }
    ?>
</div>