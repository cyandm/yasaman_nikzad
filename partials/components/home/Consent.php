<?php

$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 2,
    'orderby' => 'post_date',
    'order' => 'DESC',
]);


?>

<?php

$homepage_comment = get_field("comment")

?>

<p class="content-title | text-center fs-title text-primary fs-lg-title-sm">Consent</p>
<div class="shadow-element | bg-primary radius-16 p-32">
    <!-- d-flex gap-24 -->

    <div>
        <div class=" name-and-date d-flex jc-between">
            <?php echo wp_get_attachment_image($homepage_comment["comment-img"], 'full', false, ["class" => "comment-img"]) ?>
            <p class="text-primary-100 fs-h4">salammmm salammmmm </p>
            <p class="text-secondary-400">
                <time datetime="2024-04-29T12:18:26+03:30" itemprop="datePublished">2024/04/29</time>
            </p>
        </div>
        <p>salam salam </p>
        <p class="text-primary-100 fs-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas.</p>
    </div>
</div>

<!-- 
<div class="d-flex f-nowrap gap-32">
    <?php
    // foreach ($posts  as $post) {
    // cyn_get_card('post-mini', ['ID' => $post->ID]);
    // }
    ?>
</div> -->