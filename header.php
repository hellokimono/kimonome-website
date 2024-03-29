<?php
wp_head();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Kimono is the best way to establish your digital identity on the blockchain and control how and when personal information about you is revealed.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="Kimono is the best way to establish your digital identity on the blockchain and control how and when personal information about you is revealed.">

    <!-- Open Graph data -->
    <meta property="og:title" content="kimono.me" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://kimono.me/" />
    <meta property="og:image" content="https://kimono.me/wp-content/themes/kimono/assets/img/header-logo.svg" />
    <meta property="og:description" content="Kimono is the best way to establish your digital identity on the blockchain and control how and when personal information about you is revealed." />
</head>
<body>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://kimono.me",
  "address": "15 N Chenevert Street #512 Houston, Texas 77002",
  "email": "hello@kimono.me",
  "legalName": "kimono.me, Inc.",
  "telephone": "(713) 419-9810‬"
}
</script>
<header class="sticky-top">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg">

                    <?php
                    //                    the_custom_logo('full');
                    ?>
                    <a class="custom-logo-link" href="#">
                    <img class="kimono_logo" src="<?php echo get_template_directory_uri()?>/assets/img/kimono-logo.svg" alt="kimono logo">

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
