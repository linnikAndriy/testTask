<?php

//Add theme options page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Redirect from single client to home page
add_action('template_redirect', 'redirect_post_type_single');
function redirect_post_type_single()
{
    if (!is_singular('client'))
        return;
    wp_redirect(home_url(), 301);
    exit;
}

function custom_search_form($form)
{
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url('/') . '" >
     <div class="custom-form">
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search here..." />
        <button type="submit">'. return_svg(get_template_directory_uri() .  "/src/assets/images/search-icon.svg", "search") .'</button>
      </div>
      </form>';

    return $form;
}

add_filter('get_search_form', 'custom_search_form', 40);


