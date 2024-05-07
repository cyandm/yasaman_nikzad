<div class="info-card box-col-3 gap-116 ">

    <?php

    for ($i = 1; $i <= 3; $i++) :

        $card = get_field("card_$i");
    ?>

        <?php if ($i == 1) : ?>

            <div class="time-section-1-wrapper col-span-1 col-span-md-3 col-span-lg-3 d-lg-flex d-none jc-center ai-center gap-4">
                <div class="time-section-1 fs-h2 text-natural-100"><?php echo get_field("hours") ?></div>
                <span class="fs-title-2 text-natural-100">Hours</span>
            </div>

        <?php endif; ?>

        <?php if ($i == 2) : ?>

            <div class="time-section-2-wrapper col-span-1 col-span-md-3 col-span-lg-3 d-lg-flex d-none jc-center ai-center gap-4">
                <div class="time-section-2 fs-h2 text-natural-100"><?php echo get_field("days") ?></div>
                <span class="fs-title-2 text-natural-100">Days</span>
            </div>

        <?php endif ?>

        <?php if ($i == 3) : ?>

            <div class="time-section-3-wrapper col-span-1 col-span-md-3 col-span-lg-3 d-lg-flex d-none jc-center ai-center gap-4">
                <div class="time-section-3 fs-h2 text-natural-100"><?php echo get_field("weeks") ?></div>
                <span class="fs-title-2 text-natural-100">Weeks</span>
            </div>

        <?php endif ?>

        <div class="info-section col-span-1 col-span-md-3 col-span-lg-3 d-flex f-column gap-28 p-20 radius-16">

            <div class="info-card-title fs-h3 text-natural-100 text-start">
                <?php echo $card["title_$i"]; ?>
            </div>

            <div class="info-card-txt fs-body">
                <?php echo $card["text_$i"]; ?>
            </div>

        </div>

    <?php endfor; ?>

</div>