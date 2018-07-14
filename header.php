<?php
wp_head();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
</head>
<body>
<header class="sticky-top">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg">

                    <?php
                    //                    the_custom_logo('full');
                    ?>
                    <a class="custom-logo-link" href="#">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="314px" height="90px" viewBox="0 0 314 90" style="enable-background:new 0 0 314 90;"
                             xml:space="preserve">
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
                            <path class="st6" d="M18,72V0C8.1,0,0,8.1,0,18v72C9.9,90,18,81.9,18,72 M38.2,33.8v-18c-9.9,0-18,8.1-18,18v18
	C30.2,51.8,38.2,43.7,38.2,33.8 M38.2,90V72c0-9.9-8.1-18-18-18v18C20.2,81.9,28.3,90,38.2,90"/>
                            <g>
                                <path class="st3" d="M305.5,39.3c0.2-0.5,0.6-1,1-1.4c0.4-0.4,0.9-0.7,1.4-0.9c0.5-0.2,1.1-0.3,1.7-0.3c0.6,0,1.2,0.1,1.7,0.3
		c0.5,0.2,1,0.5,1.4,0.9c0.4,0.4,0.7,0.9,1,1.4c0.2,0.5,0.4,1.1,0.4,1.7c0,0.6-0.1,1.2-0.4,1.8c-0.2,0.5-0.6,1-1,1.4
		c-0.4,0.4-0.9,0.7-1.4,0.9c-0.5,0.2-1.1,0.3-1.7,0.3c-0.6,0-1.2-0.1-1.7-0.3c-0.5-0.2-1-0.5-1.4-0.9c-0.4-0.4-0.7-0.9-1-1.4
		c-0.2-0.5-0.4-1.1-0.4-1.8C305.2,40.4,305.3,39.8,305.5,39.3 M306.2,42.5c0.2,0.5,0.4,0.9,0.8,1.2c0.3,0.3,0.7,0.6,1.2,0.8
		c0.4,0.2,0.9,0.3,1.4,0.3c0.5,0,1-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1.1-0.8c0.3-0.3,0.6-0.7,0.8-1.2c0.2-0.5,0.3-1,0.3-1.5
		c0-0.5-0.1-1-0.3-1.5c-0.2-0.5-0.4-0.8-0.8-1.2c-0.3-0.3-0.7-0.6-1.1-0.8c-0.4-0.2-0.9-0.3-1.4-0.3c-0.5,0-1,0.1-1.4,0.3
		c-0.4,0.2-0.8,0.5-1.2,0.8c-0.3,0.3-0.6,0.7-0.8,1.2c-0.2,0.5-0.3,0.9-0.3,1.5C306,41.6,306.1,42.1,306.2,42.5 M309.9,38.5
		c0.6,0,1.1,0.1,1.4,0.4c0.3,0.2,0.4,0.6,0.4,1.1c0,0.5-0.1,0.8-0.4,1c-0.3,0.2-0.6,0.3-1,0.4l1.5,2.3h-0.9l-1.4-2.2h-0.8v2.2h-0.8
		v-5.1H309.9z M309.5,40.7c0.2,0,0.4,0,0.5,0c0.2,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.3c0.1-0.1,0.1-0.3,0.1-0.5
		c0-0.2,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.3,0-0.4,0h-1.1v1.6H309.5z"/>
                                <polygon class="st3" points="84,25.5 84,64.5 88.4,64.5 88.4,55.9 93.5,51 102.6,64.5 107.9,64.5 96.7,47.9 106.9,37.9 100.5,37.9
		88.4,49.8 88.4,25.5 	"/>
                                <path class="st3" d="M167.4,37.3c-3.8,0-6.6,1.8-8.3,4.5c-1.6-2.8-4.4-4.5-8.2-4.5c-2.9,0-5.4,1.3-7.1,3.6v-2.9h-4.2v26.5h4.4V48.2
		c0-4,2.7-7,6.3-7c3.9,0,6,2.5,6,6.6v16.5h4.3V48.2c0-4,2.6-7,6.2-7c4.1,0,6,2.5,6,6.6v16.5h4.4V48
		C177.2,41.4,173.5,37.3,167.4,37.3"/>
                                <path class="st3" d="M203.5,60.5c-4.9,0-8.9-4.4-8.9-9.8c0-5.5,4-10,8.9-10c4.9,0,9,4.5,9,10C212.5,56.1,208.5,60.5,203.5,60.5
		 M203.5,36.6c-7.5,0-13.3,6.3-13.3,14c0,7.6,5.8,13.8,13.3,13.8c7.6,0,13.3-6.2,13.3-13.8C216.9,42.9,211.1,36.6,203.5,36.6"/>
                                <path class="st3" d="M241.8,37.3c-3.2,0-5.9,1.3-7.7,3.6v-2.9h-4.2v26.5h4.4V48.2c0-4,2.9-7,7-7c4.2,0,6.5,3,6.5,7.1v16.1h4.3v-16
		C252.1,41.9,248.3,37.3,241.8,37.3"/>
                                <path class="st3" d="M278.4,60.5c-4.9,0-8.9-4.4-8.9-9.8c0-5.5,4-10,8.9-10c4.9,0,9,4.5,9,10C287.4,56.1,283.3,60.5,278.4,60.5
		 M278.4,36.6c-7.5,0-13.3,6.3-13.3,14c0,7.6,5.8,13.8,13.3,13.8c7.6,0,13.3-6.2,13.3-13.8C291.7,42.9,286,36.6,278.4,36.6"/>
                                <rect x="121.5" y="37.9" class="st3" width="4.4" height="26.5"/>
                                <path class="st3"
                                      d="M123.7,25.5c-1.6,0-2.9,1.3-2.9,2.9c0,1.6,1.3,2.9,2.9,2.9s2.9-1.3,2.9-2.9C126.6,26.8,125.3,25.5,123.7,25.5"
                                />
                            </g>
</svg>

                    </a>

                    <!--                    <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#navbarNavDropdown"-->
                    <!--                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
                    <!--                        <span class="icon-bar"></span>-->
                    <!--                        <span class="icon-bar"></span>-->
                    <!--                        <span class="icon-bar"></span>-->
                    <!--                    </button>-->
                    <span class="navbar-toggler">
                        <a href="#hello">say hello!</a>
                     </span>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'primary_menu_wrapper',
                            'container_id' => 'navbarNavDropdown',
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                        ?>

                    </div>

                </nav>
            </div>
        </div>
    </div>
    <div class="line_block"></div>

    <div class="header__line"></div>

</header>
<main class="">
