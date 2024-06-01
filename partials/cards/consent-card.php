<?php
$id = $args['id'] ?? 0;

?>

<div>
    <div class="consent-main-wrapper shadow-element | bg-primary radius-16 p-32">
        <!-- title( image/date/name/position) -->
        <div>
            <!-- image -->
            <div>
                <?php echo get_the_post_thumbnail($id, 'full', ['class' => 'consent-image']) ?>
            </div>

            <!-- date and name and position -->
            <div>

                <!-- name and date -->
                <div>
                    <?php echo get_the_title($id) ?>
                </div>

                <!-- position -->
                <div>
                    <?php echo get_field("consent_position", $id); ?>
                </div>
            </div>
        </div>

        <!-- description -->
        <div>
            <?php echo get_field("consent_text", $id) ?>
        </div>
    </div>
</div>