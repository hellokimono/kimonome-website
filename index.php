<?php
/** Template name: Build */
get_header();
?>

<?php

// check if the flexible content field has rows of data
if (have_rows('content_block')):

    // loop through the rows of data
    while (have_rows('content_block')) : the_row();

        if (get_row_layout() == 'what'):

            ?>
            <section class="section_what" id="what">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6 col_section_what__image">
                            <div class="section_what__image">

                                <!--                                <img src="--><?php //the_sub_field('what_image');
                                ?><!--" alt="">-->


                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="731px" height="410px" viewBox="0 0 731 410"
                                     style="enable-background:new 0 0 731 410;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #A8ADC1;
    }

    .st1 {
        clip-path: url(#SVGID_2_);
        fill: #09152C;
    }

    .st2 {
        clip-path: url(#SVGID_4_);
        fill: #FFFFFF;
    }

    .st3 {
        fill: #FFFFFF;
    }

    .st4 {
        clip-path: url(#SVGID_6_);
        fill: #FFFFFF;
    }

    .st5 {
        clip-path: url(#SVGID_8_);
        fill: #FFFFFF;
    }

    .st6 {
        fill: #09152C;
    }

    .st7 {
        fill: #0B162D;
    }

    .st8 {
        fill: #08152C;
    }

    .st9 {
        fill: #F1F9FD;
    }
</style>
                                    <g>
                                        <path class="st0" d="M0,0v410h731V0H0z M490.5,324.3h-250V85.7h250V324.3z"/>
                                        <path class="st8" d="M526,5c-65.7,0-124,31.7-160.5,80.7C390.3,119,405,160.3,405,205c0,44.7-14.7,86-39.5,119.3
		C402,373.3,460.3,405,526,405c110.5,0,200-89.5,200-200S636.5,5,526,5z"/>
                                        <path class="st9" d="M365.5,85.7C329,36.7,270.7,5,205,5C94.5,5,5,94.5,5,205s89.5,200,200,200c65.7,0,124-31.7,160.5-80.7
		C340.7,291,326,249.7,326,205C326,160.3,340.7,119,365.5,85.7z"/>
                                    </g>
</svg>


                                <div class="section_what__image__background">

                                </div>
                                <div class="section_what__image__text">
                                    <p>Magic</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-6 col_section_what__text">
                            <div class="section_what__text">
                                <h1><?php the_sub_field('what_title'); ?></h1>
                                <div class="section_what__text__text hidden-mob">
                                    <?php the_sub_field('what_text'); ?>
                                </div>
                                <a class="section_what__text__btn hidden-mob"
                                   href="<?php the_sub_field('what_link_text'); ?>">
                                    <?php the_sub_field('what_link'); ?>
                                </a>
                            </div>
                        </div>

                        <div class="col-11 hidden-desc col_section_what__text-3">
                            <div class="section_what__text">
                                <div class="section_what__text__text">
                                    <?php the_sub_field('what_text'); ?>
                                </div>
                                <a class="section_what__text__btn" href="<?php the_sub_field('what_link_text'); ?>">
                                    <?php the_sub_field('what_link'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <?php


        elseif (get_row_layout() == 'why'):
            ?>
            <section class="section_why" id="why">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="section_why__text hidden-mob">
                                <?php the_sub_field('why_text'); ?>
                                <div class="line_block"></div>
                            </div>
                            <div class="section_why__text hidden-desc">
                                <?php the_sub_field('why_text_mobile'); ?>
                                <div class="line_block"></div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 null_p_r">
                            <div class="section_why__slider_wrapper">

                                <div class="section_why__slider_wrapper__slider">

                                    <?php
                                    if (have_rows('why_slider')):

                                        // loop through the rows of data
                                        while (have_rows('why_slider')) : the_row();

                                            ?>
                                            <div class="slide_wrapper">
                                                <div class="section_why__slider_wrapper__slider__slide">
                                                    <div class="section_why__slider_wrapper__slider__slide__title">
                                                        <h2>
                                                            <?php the_sub_field('slide_title') ?>

                                                        </h2>
                                                    </div>
                                                    <div class="section_why__slider_wrapper__slider__slide__text">
                                                        <?php the_sub_field('slide_text') ?>

                                                    </div>
                                                    <div class="section_why__slider_wrapper__slider__slide__link">
                                                        <a>Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                        endwhile;

                                    endif;
                                    ?>

                                </div>

                                <div class="section_why__slider_wrapper__next">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <?php


        elseif (get_row_layout() == 'how'):
            ?>
            <section class="section_how" id="how">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 offset-xl-1 offset-lg-1 offset-md-1 col__section_how__slider_wrapper">
                            <div class=" section_how__slider_wrapper">

                                <div class="section_how__slider_wrapper__slider">
                                    <?php
                                    if (have_rows('how_slider')):

                                        // loop through the rows of data
                                        while (have_rows('how_slider')) : the_row();

                                            ?>
                                            <div class=" section_how__slider_wrapper__slider__slide">
                                                <div class="section_how__slider_wrapper__slider__slide__title">
                                                    <h2>
                                                        <?php the_sub_field('slider_title') ?>

                                                    </h2>
                                                </div>
                                                <div class="section_how__slider_wrapper__slider__slide__text">

                                                    <?php
                                                    the_sub_field('slide_text');
                                                    ?>
                                                </div>

                                                <div class="section_how__slider_wrapper__slider__slide__link">
                                                    <a href="#">Next: </a>
                                                </div>

                                            </div>

                                            <?php

                                        endwhile;

                                    endif;
                                    ?>


                                </div>

                                <div class="section_how__slider_wrapper__next">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <div class="line_block  hidden-mob"></div>

                            </div>

                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col__section_how__text">
                            <div class="section_how__text hidden-mob">
                                <div class="line_block  hidden-desc"></div>
                                <?php the_sub_field('how_text'); ?>
                            </div>
                            <div class="section_how__text hidden-desc">
                                <div class="line_block  hidden-desc"></div>
                                <?php the_sub_field('how_text_mobile'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <?php

        elseif (get_row_layout() == 'hello'):
            ?>
            <section class="section_hello" id="hello">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="section_hello__text">
                                <div class="section_hello__text__title">
                                    <?php the_sub_field('hello_title'); ?>

                                </div>

                                <div class="section_hello__text__sub_title">
                                    <?php the_sub_field('hello_text'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-11 offset-xl-1 offset-md-1 offset-lg-0 ">
                            <div class="section_hello__form">
                                <?php
                                echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]');
                                ?>


                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <?php


        elseif (get_row_layout() == 'contacts'):
            ?>
            <section class="section_contacts">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="section_contacts__logo">
                                <!--                                <img src="--><?php //the_sub_field('logo');
                                ?><!--" alt="">-->
                                <div class="section_contacts__logo__img">
                                    <img src="<?php echo get_template_directory_uri()?>/img/kimono-logo-footer.svg" alt="kimono logo">
                                    <div class="section_contacts__logo__background"></div>
                                </div>

                            </div>
                            <div class="line_block"></div>

                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-md-8">
                            <div class="section_contacts__info">
                                <div class="section_contacts__info__address">
                                    <span class="rwd-line">15 N Chenevert Street #512 </span>
                                    <span class="rwd-line">Houston, Texas 77002</span>
                                </div>
                                <div class="section_contacts__info__numbers">
                                    <span>T <?php the_sub_field('tel'); ?></span>
                                </div>
                                <div class="section_contacts__info__share">
                                    <span>Share via</span> <a href="http://www.facebook.com/kimonodotme/">facebook</a> <a href="http://twitter.com/hellokimono">twitter</a> <a href="http://www.linkedin.com/company/kimonodotme/">linkedin</a> <a href="http://www.instagram.com/hellokimono/">instagram</a>
                                </div>
                                <div class="section_contacts__info__copyright">
                                    <span class="rwd-line">© 2018 Kimono.me, Inc.</span>
                                    <span class="rwd-line">All rights reserved.</span>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </section>


            <?php

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

<?php get_footer(); ?>
