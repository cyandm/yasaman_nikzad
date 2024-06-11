<?php
$post_id = isset($args['ID']) ? $args['ID'] : get_the_ID();

?>

<div>
    <div class="post | d-flex gap-30 f-row pos-relative ai-end ">
        <!-- class="mini-post-pic" -->

        <?php if (has_post_thumbnail($post_id)) : ?>

        <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'home-blog-img']); ?>

        <div class="post-sub | d-flex ai-end jc-between f-nowrap pos-absolute">

            <div>
                <h3 class=" text-primary-100 fs-h3"><?php the_title(); ?></h3>
            </div>

            <div class="view-more">
                <button class="view-more-button button | btn-secondary" type="submit">
                    <svg class="icon time-line-arrow">
                        <use href="#icon-service-arrow-right-" />
                    </svg>
                </button>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>