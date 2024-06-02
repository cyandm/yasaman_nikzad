<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $intro = get_field("intro"); ?>

<main class="main">

    <!-- Resume -->
    <section>
        <?php cyn_get_card('resume') ?>
    </section>
    <div class="clr-fix-120"></div>


    <!-- Consent -->
    <section>
        <?php cyn_get_component('home/swiper-consent') ?>
        <div class="d-flex jc-center">
        </div>
    </section>
    <div class="clr-fix-120"></div>


    <!-- Residency -->
    <section>
        <div class="text-center">
            <p class="content-title | fs-title text-primary fs-lg-title-sm ">Residency</p>
            <p class="dubai-residency | fs-h1 text-primary-100">3 Easy Steps To Dubai Residency</p>
        </div>
        <div class="clr-fix-44 d-none d-md-block"></div>
        <div>
            <div class="residency-image-wrapper | pos-absolute">
                <img class="residency-image" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/footprint-trail.png" ?>" alt="footprint">
            </div>
            <div class="residency-steps | d-flex f-column f-nowrap jc-center">



                <div class="residency-step | d-flex f-row mi-20 f-nowrap">
                    <div class="text-primary-100">
                        <h1>Get Advice</h1>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit,
                            send Do Elusmod Tempor Incididunt.</p>
                    </div>
                </div>

                <div class="residency-step | d-flex f-row mi-20 f-nowrap">
                    <div class="text-primary-100">
                        <h1>Buying Property</h1>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit,
                            send Do Elusmod Tempor Incididunt.</p>
                    </div>
                </div>

                <div class="residency-step | d-flex f-row mi-20 f-nowrap">
                    <div class="text-primary-100">
                        <h1>Dubai Residency</h1>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit,
                            send Do Elusmod Tempor Incididunt.</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="home-call-btn | d-flex f-row-reverse m-12">
            <button class="button btn-secondary" typ e="submit">
                <span>Call Now</span><img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Search.png" ?>" alt="call now">
            </button>
        </div>
    </section>
    <div class="clr-fix-120"></div>


    <!-- blogs -->
    <section>
        <div>
            <?php cyn_get_component('home/swiper-blogs') ?>
            <?php cyn_get_component('home/blog') ?>
        </div>

        <div class="clr-fix-24"></div>


        <div class="d-flex jc-center">
            <button class="button btn-secondary" typ e="submit">
                <span class="p-16">View All</span>
            </button>
        </div>
    </section>
    <div class="clr-fix-120"></div>


    <!-- get in touch -->
    <section>
        <div>
            <div>
                <p class=" content-title | text-center fs-title text-primary fs-lg-title-sm pos-relative">Get In Touch</p>
                <form class="d-grid gap-24  pos-relative content" method="post" name="contact">
                    <div class="d-flex gap-24">
                        <div class="radius-16 bg-primary flex-1 form-element">
                            <input class="p-20" type="text" placeholder="Your Name" required="required">
                        </div>
                        <div class="radius-16 bg-primary flex-1 form-element">
                            <input class="p-20" type="text" placeholder="Email Or Phone" required="required">
                        </div>
                    </div>
                    <div class="radius-16 bg-primary form-element">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="p-20"></textarea>
                    </div>
                </form>
                <div class="clr-fix-24"></div>
                <div class="d-flex f-row-reverse">
                    <button class="button btn-secondary" type="submit">
                        <span>Send Message</span><img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Search.png" ?>" alt="submit-picture-contact">
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="clr-fix-92"></div>


</main>


<?php get_footer(null, ['render_template' => false]) ?>