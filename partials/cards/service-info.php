<div class="info-card box-col-3 gap-116">

    <?php $card = get_field('card') ?>

    <div class="info-section col-span-1 col-span-md-3 d-flex f-column gap-28 p-20">
        <div class="info-card-title fs-h3 text-natural-100 text-center">
            <?php echo $card['title-1']; ?>
        </div>

        <div class="info-card-txt fs-body">
            <?php echo $card['text-1']; ?>
        </div>
    </div>

    <div class="info-section col-span-1 col-span-md-3 d-flex f-column gap-28 p-20">
        <div class="info-card-title fs-h3 text-natural-100 text-center">
            <?php echo $card['title-2']; ?>
        </div>

        <div class="info-card-txt fs-body">
            <?php echo $card['text-2']; ?>
        </div>
    </div>

    <div class="info-section col-span-1 col-span-md-3 d-flex f-column gap-28 p-20">
        <div class="info-card-title fs-h3 text-natural-100 text-center">
            <?php echo $card['title-3']; ?>
        </div>

        <div class="info-card-txt fs-body">
            <?php echo $card['text-3']; ?>
        </div>
    </div>

</div>