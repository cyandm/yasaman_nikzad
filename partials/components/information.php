<?php

for ($i = 1; $i <= 1; $i++) :

    $information_card = get_field("info");
?>

<div class="information-cta-icon-wrapper pos-relative">

    <?php

        echo wp_get_attachment_image($information_card["info-icon"], 'full', false, ["class" => "information-cta-icon"]);

        ?>
</div>

<div class="information-cta-txt text-natural-100 fs-h2 m-be-120">

    <?php echo $information_card["info-text"] ?>

</div>

<div class="information-cta-btn m-be-120">

    <?php $info_btn = $information_card["info-btn"] ?>

    <?php

        $btn_url = $info_btn['url'];

        $btn_title = $info_btn['title'];

        ?>

    <a class="cta-btn d-flex jc-center ai-start gap-8 pi-20 pb-16 radius-12 text-natural-100 fs-body-sm"
        href="<?php echo esc_url($btn_url); ?>"><?php echo esc_html($btn_title); ?>
        <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-2-white.png' ?>">
    </a>

</div>

<?php endfor; ?>