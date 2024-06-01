<?php
$id = $args['id'] ?? 0;

?>
<div class="content-title | text-center fs-title text-primary fs-lg-title-sm">
    <?php _e('Resume', 'cyn-dm') ?></div>
</div>

<div>
    <div class="resume-main-wrapper shadow-element | bg-primary radius-16 p-32">
        <!-- name- location - year -->
        <div>
            <!-- country name -->
            <div class="fs-h3 text-primary-100">
                <?php echo get_the_title($id) ?>
            </div>


            <!-- location and year -->
            <div class="d-flex jc-between">


                <!-- location -->
                <div class="fs-body text-primary-100">
                    <?php echo get_field("resume_location", $id); ?>
                </div>


                <!-- year -->
                <div class="fs-body-1 text-secondary-400">
                    <?php echo get_field("resume_year", $id); ?>

                </div>
            </div>
        </div>



        <!-- description -->
        <div class="fs-body-1 text-primary-100">

            <?php echo get_field("resume_text", $id) ?>

        </div>

    </div>

</div>