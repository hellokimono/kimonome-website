<?php
/**
 * Enqueue scripts
 */
function KimonoTheme()
{
    wp_enqueue_style(
        'font-awesome',
        "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
        array(),
        '4.7.0'
    );

    $cssFilePath = glob( get_template_directory() . '/css/bundle.min.*' );
    $cssFileURI = get_template_directory_uri() . '/css/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main', $cssFileURI);

    $jsFilePath = glob( get_template_directory() . '/js/bundle.min.*' );
    $jsFileURI = get_template_directory_uri() . '/js/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main', $jsFileURI , null , null , true );
}

add_action('wp_enqueue_scripts', 'KimonoTheme');
/**
 * The end
 */

/**
 * Menu support
 */
require_once 'class-wp-bootstrap-navwalker.php';


function theme_register_nav_menu()
{

    register_nav_menu('primary', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');

}

add_action('after_setup_theme', 'theme_register_nav_menu');


/**
 * The end
 */
/**
 * Post thumbnails support
 */
add_theme_support('post-thumbnails');
/**
 * The end
 */
/**
 * Logo support
 */
add_theme_support('custom-logo');
/**
 * The end
 */


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
    ));


}

add_action('wp_footer', 'mycustom_wp_footer');

function mycustom_wp_footer()
{
    ?>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function (event) {
            $(function () {
                var titleText = 'You’re on\n' +
                    'the list.';
                var subTitle = 'Thanks for signing up.\n' + 'We’ll be in touch.';
                $('.section_hello__text__title').text(titleText);
                $('.section_hello__text__sub_title').text(subTitle);
                $('.wpcf7-form').css('display', 'none');
            });
        }, false);
    </script>
    <?php
}
