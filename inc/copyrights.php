<?php
namespace KFUbrand\copyrights;

// Filters
add_filter( 'admin_footer_text', __NAMESPACE__ . '\admin_footer_text' );
add_filter( 'update_footer', __NAMESPACE__ . '\update_footer', 20 );
add_filter( 'login_headerurl', __NAMESPACE__ . '\login_headerurl' );
add_filter( 'login_headertitle', __NAMESPACE__ . '\login_headertitle');
// Actions
add_action( 'login_head', __NAMESPACE__ . '\login_head');
add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\wp_before_admin_bar_render');


/**
 * Change text in admin footer
 */

function update_footer() {
    $text = SUPPORT;
    return $text;
}

function admin_footer_text() {
    $text = sprintf('Разработка сайта - <a href="%s">%s</a>',DEPARTMENTLINK,DEPARTMENT);
    return $text;
}

/***********************
 Custom login page
 ***********************/
function login_head() {
echo '<link rel="stylesheet" type="text/css" href="' . PLUGDIRURL . 'assets/css/login.css"/>';
}

// changing the login page URL
function login_headerurl(){
    return home_url(); // changes the url link from wordpress.org to your blog or website's url
    }
// changing the login page URL hover text
function login_headertitle(){
    return 'На главную'; // changing the title from "Powered by WordPress" to whatever you wish
    }
// Clean admin bar
// Remove wordpress logo in top-left conner
function wp_before_admin_bar_render() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}



