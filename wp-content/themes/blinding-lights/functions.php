<?php



if (!defined('THEME_FILES_VERSION')) {

    define('THEME_FILES_VERSION', '1.0.0');
}

if (!defined('THEME_TD')) {
    // Replace the version number of the theme on each release.
    define('THEME_TD', 'blinding-lights');
}

require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/theme-support.php';
require_once get_template_directory() . '/inc/customize.php';
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/gutenberg-elements.php';
require_once get_template_directory() . '/inc/register-post-type.php';



