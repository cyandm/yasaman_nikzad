<?php

for ($i = 1; $i <= 3; $i++) :

    $features_card = get_field("feature_card_$i");
?>
    <div class="feature-card-wrapper-desktop bg-natural-900 d-md-none d-flex jc-start ai-center gap-16 p-20 radius-16">

        <div class="feature-card-icon-wrapper bg-natural-900 p-32 radius-16">

            <?php

            echo wp_get_attachment_image($features_card["feature_icon_$i"], 'full', false, ["class" => "feature-card-icon"]);

            ?>

        </div>

        <div class="feature-card-txt-wrapper d-flex f-column jc-center gap-24">

            <div class="feature-card-txt-title text-natural-100 fs-h3">
                <?php echo $features_card["feature_title_$i"] ?>
            </div>

            <div class="feature-card-txt-content">
                <?php echo $features_card["feature_text_$i"] ?>
            </div>

        </div>

    </div>

<?php endfor; ?>