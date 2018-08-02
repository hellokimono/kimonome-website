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
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="320px" height="281.6px" viewBox="0 0 320 281.6"
                                         style="enable-background:new 0 0 320 281.6;" xml:space="preserve">
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
</style>
                                        <path class="st0" d="M0,0v281.6h320V0H0z M152.3,148.8c0,18.3-14.8,33.1-33.1,33.1V49.5c0-18.3,14.8-33.1,33.1-33.1V148.8z
	 M189.5,182c-18.3,0-33.1-14.8-33.1-33.1v-33.1c18.3,0,33.1,14.8,33.1,33.1V182z M189.5,78.4c0,18.3-14.8,33.1-33.1,33.1V78.4
	c0-18.3,14.8-33.1,33.1-33.1V78.4z"/>
                                        <g>
                                            <path class="st3" d="M292.3,234c0.3-0.7,0.7-1.2,1.2-1.7c0.5-0.5,1.1-0.9,1.7-1.1c0.7-0.3,1.4-0.4,2.1-0.4s1.5,0.1,2.1,0.4
		c0.7,0.3,1.2,0.7,1.7,1.1c0.5,0.5,0.9,1.1,1.2,1.7c0.3,0.7,0.4,1.4,0.4,2.1c0,0.8-0.1,1.5-0.4,2.2c-0.3,0.7-0.7,1.2-1.2,1.7
		c-0.5,0.5-1.1,0.9-1.7,1.1c-0.7,0.3-1.4,0.4-2.1,0.4s-1.5-0.1-2.1-0.4c-0.7-0.3-1.2-0.7-1.7-1.1c-0.5-0.5-0.9-1.1-1.2-1.7
		c-0.3-0.7-0.4-1.4-0.4-2.2C291.9,235.3,292,234.6,292.3,234 M293.2,238c0.2,0.6,0.5,1.1,0.9,1.5c0.4,0.4,0.9,0.7,1.4,1
		c0.5,0.2,1.1,0.4,1.8,0.4c0.6,0,1.2-0.1,1.8-0.4c0.5-0.2,1-0.6,1.4-1c0.4-0.4,0.7-0.9,0.9-1.5c0.2-0.6,0.3-1.2,0.3-1.9
		c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.6-0.5-1.1-0.9-1.5c-0.4-0.4-0.9-0.7-1.4-1c-0.5-0.2-1.1-0.4-1.8-0.4c-0.6,0-1.2,0.1-1.8,0.4
		c-0.6,0.2-1,0.6-1.4,1c-0.4,0.4-0.7,0.9-0.9,1.5c-0.2,0.6-0.3,1.2-0.3,1.8C292.9,236.8,293,237.4,293.2,238 M297.7,232.9
		c0.8,0,1.3,0.2,1.7,0.5c0.4,0.3,0.5,0.8,0.5,1.4c0,0.6-0.2,1-0.5,1.3c-0.3,0.3-0.7,0.4-1.2,0.5l1.8,2.8H299l-1.7-2.7h-1.1v2.7h-1
		v-6.4H297.7z M297.3,235.8c0.2,0,0.4,0,0.6,0c0.2,0,0.4-0.1,0.5-0.1c0.2-0.1,0.3-0.2,0.4-0.3c0.1-0.1,0.1-0.3,0.1-0.6
		c0-0.2,0-0.4-0.1-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.3-0.1-0.5-0.1c-0.2,0-0.3,0-0.5,0h-1.3v2H297.3z"/>
                                            <polygon class="st3" points="17.1,216.8 17.1,265.3 22.6,265.3 22.6,254.6 28.9,248.5 40.2,265.3 46.8,265.3 32.9,244.6
		45.6,232.3 37.6,232.3 22.6,247.1 22.6,216.8 	"/>
                                            <path class="st3" d="M120.7,231.4c-4.7,0-8.3,2.2-10.3,5.6c-2-3.5-5.5-5.6-10.2-5.6c-3.6,0-6.7,1.7-8.8,4.4v-3.6h-5.3v33h5.4v-20.2
		c0-4.9,3.3-8.6,7.8-8.6c4.9,0,7.4,3.1,7.4,8.3v20.6h5.4v-20.2c0-4.9,3.3-8.6,7.7-8.6c5.1,0,7.5,3.1,7.5,8.3v20.6h5.4v-20.4
		C132.9,236.6,128.3,231.4,120.7,231.4"/>
                                            <path class="st3" d="M165.7,260.3c-6.1,0-11.1-5.4-11.1-12.2c0-6.9,5-12.4,11.1-12.4c6.1,0,11.1,5.6,11.1,12.4
		C176.8,254.8,171.8,260.3,165.7,260.3 M165.7,230.7c-9.3,0-16.6,7.8-16.6,17.4c0,9.5,7.2,17.2,16.6,17.2c9.4,0,16.6-7.7,16.6-17.2
		C182.2,238.5,175.1,230.7,165.7,230.7"/>
                                            <path class="st3" d="M213.2,231.4c-4,0-7.4,1.7-9.6,4.4v-3.6h-5.3v33h5.4v-20.2c0-4.9,3.6-8.6,8.6-8.6c5.2,0,8.1,3.7,8.1,8.8v20
		h5.4v-19.8C225.9,237.2,221.3,231.4,213.2,231.4"/>
                                            <path class="st3" d="M258.6,260.3c-6.1,0-11.1-5.4-11.1-12.2c0-6.9,5-12.4,11.1-12.4c6.1,0,11.1,5.6,11.1,12.4
		C269.8,254.8,264.8,260.3,258.6,260.3 M258.6,230.7c-9.3,0-16.6,7.8-16.6,17.4c0,9.5,7.2,17.2,16.6,17.2c9.4,0,16.6-7.7,16.6-17.2
		C275.2,238.5,268,230.7,258.6,230.7"/>
                                            <rect x="63.8" y="232.3" class="st3" width="5.4" height="33"/>
                                            <path class="st3"
                                                  d="M66.5,216.8c-2,0-3.6,1.6-3.6,3.6c0,2,1.6,3.6,3.6,3.6c2,0,3.6-1.6,3.6-3.6C70.1,218.4,68.5,216.8,66.5,216.8"
                                            />
                                        </g>
</svg>
                                    <div class="section_contacts__logo__background"></div>
                                </div>

                            </div>
                            <div class="line_block"></div>

                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-md-8">
                            <div class="section_contacts__info">
                                <div class="section_contacts__info__address">
                                    <?php the_sub_field('address'); ?>
                                </div>
                                <div class="section_contacts__info__numbers">
                                    <span>T <?php the_sub_field('tel'); ?></span>
                                </div>
                                <div class="section_contacts__info__share">
                                    <span>Share via</span> <a href="http://www.facebook.com/kimonodotme/">facebook</a> <a href="http://twitter.com/hellokimono">twitter</a> <a href="http://www.linkedin.com/company/kimonodotme/">linkedin</a> <a href="http://www.instagram.com/hellokimono/">instagram</a>
                                </div>
                                <div class="section_contacts__info__copyright">
                                    <?php the_sub_field('copyright'); ?>
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
