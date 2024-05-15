<?php
$post_id = isset($args['ID']) ? $args['ID'] : get_the_ID();

?>


<div>
    <div class="mini-post-pic">

        <?php if (has_post_thumbnail($post_id)) : ?>
            <h3 class="landmark-image-text | pos-absolute text-natural-100 fs-h2"><?php the_title(); ?></h3>
            <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'landmark-img']); ?>
        <?php endif; ?>
    </div>
    <div>
    </div>
</div>