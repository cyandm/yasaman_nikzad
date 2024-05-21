<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $intro = get_field("intro"); ?>

<main class="main">
    <!--     
    <div class="home-page-hero-wrapper">

        <div class="home-page-hero-menu-icon d-none d-md-block" id="mobileMenuOpener">
            <a href="#"><img class="pi-20 pb-16 radius-12" src="<?php //echo get_template_directory_uri() . '/assets/img/icon-test-5.png' 
                                                                ?>" alt="search"></a>
        </div>

        <div class="home-page-hero-swiper">
            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-scrollbar"></div>
            </div>
        </div> 

        <div class="home-page-hero-sidebar | d-flex f-column gap-80 ai-center pb-40 pi-20">

            <div class="sidebar-intro-wrapper | d-flex f-column ai-center">

                <div class="intro-img">

                    <?php //echo wp_get_attachment_image($intro["intro-img"], 'full', false, ["class" => "intro-image"]); 
                    ?>

                </div>

                <div class="intro-name-txt">

                    <?php //echo $intro["intro-name"] 
                    ?>

                </div>

                <div class="intro-job-txt">

                    <?php //echo $intro["intro-job"] 
                    ?>

                </div>

            </div>

            <hr>

            <div class="sidebar-menu">

                <?php //if (has_nav_menu('header')) : 
                ?>
                    <nav class="menu">
                        <?php //wp_nav_menu([
                        //'theme_location' => 'header',
                        // 'menu_class' => 'header-menu | d-flex f-column gap-32'
                        // ]) 
                        ?>
                    </nav>
                <?php //else : 
                ?>
                    <div class=" header-no-item">
                        Please Choose a Menu
                    </div>
                <?php //endif; 
                ?>

            </div>

            <div class="sidebar-social-icons">
                <img src="<?php //echo get_template_directory_uri() . '/assets/img/icon-test-2-white.png' 
                            ?>" alt="test-icon">
                <img src="<?php //echo get_template_directory_uri() . '/assets/img/icon-test-3-white.png' 
                            ?>" alt="test-icon">
                <img src="<?php //echo get_template_directory_uri() . '/assets/img/icon-test-4-white.png' 
                            ?>" alt="test-icon">
            </div>

        </div>

    </div>
 -->


    <!-- Resume -->
    <section>
        <p class="content-title | text-center fs-title text-primary fs-lg-title-sm pos-relative">Resume</p>
        <img class="resume-clip" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Rectangle.svg" ?>" alt="resume pin">
        <div>
            <div class="shadow-element | radius-16 bg-primary p-32">
                <div class=" text-primary-100">
                    <p class="fs-h3">Real Estate Consultant</p>
                    <div class="d-flex jc-between">
                        <p class="fs-body">Tehran Real Estate</p>
                        <p class="text-secondary-400">2018-2020</p>
                    </div>
                    <ul>
                        <li>Provided consulting services to clients on buying, selling, and renting properties </li>
                        <li> Negotiated real estate transactions</li>
                        <li> Provided after-sales services</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <div class="clr-fix-120"></div>


    <!-- Consent -->
    <section>
        <?php cyn_get_component('home/Consent') ?>
        <?php cyn_get_component('swiper') ?>
        <div class="d-flex jc-center">
            <!--  بعدا گذاشته شه
                <button class="button btn-secondary" typ e="submit">
                <span class="p-16">Add Comment</span><img src="<?php //echo get_stylesheet_directory_uri() . "/assets/img/Search.png" 
                                                                ?>" alt="submit-picture-contact">

            </button> -->
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
            <div class="residency-steps | d-flex f-column f-nowrap">



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
            <?php cyn_get_component('home/blog') ?>
        </div>
        <?php cyn_get_component('swiper') ?>
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