<?php

$teaser_cover = get_field('teaser-cover');
$teaser_video = get_field('teaser-video');

?>

<div class="video-teaser-main-wrapper">

    <div class="video-teaser-title-wrapper content-title | fs-title text-natural-900 pos-relative">
        <?php _e('UAE', 'cyn-dm')
        ?>
    </div>


    <div class="video-teaser-cover-wrapper | pos-relative d-flex jc-center ai-center">
        <img class="pos-absolute" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-13.png' ?>" alt="icon-test">
        <img src="<?php echo $teaser_cover['url'] ?>" alt="cover">
    </div>

</div>