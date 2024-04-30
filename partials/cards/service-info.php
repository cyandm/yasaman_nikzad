<div class="info-card box-col-3 gap-116">

    <?php

    for ($i = 1; $i <= 3; $i++) :

        $card = get_field("card_$i");
    ?>

        <div class="info-section col-span-1 col-span-md-3 col-span-lg-3 d-flex f-column gap-28 p-20">

            <div class="info-card-title fs-h3 text-natural-100 text-center">
                <?php echo $card["title_$i"]; ?>
            </div>

            <div class="info-card-txt fs-body">
                <?php echo $card["text_$i"]; ?>
            </div>

        </div>

    <?php endfor; ?>

</div>