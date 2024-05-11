<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<main>

    <div class="home-page-hero-wrapper">

        <div class="home-page-hero-menu-icon d-none d-md-block" id="mobileMenuOpener">
            <a href="#"><img class="pi-20 pb-16 radius-12"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-5.png' ?>" alt="search"></a>
        </div>

        <div class="home-page-hero-swiper">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>

        <div class="home-page-hero-sidenav">

        </div>

    </div>

</main>


<?php get_footer(null, ['render_template' => false]) ?>