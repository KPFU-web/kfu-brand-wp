<?php



// Filters
add_filter( 'admin_footer_text', 'my_footer_text' );
add_filter( 'update_footer', 'my_footer_version', 11 );
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
add_filter( 'login_headertitle', 'custom_loginlogo_title');
// Actions
add_action( 'login_head', 'my_custom_login');
add_action( 'wp_before_admin_bar_render', 'clean_admin_bar', 0);


/**
 * Change text in admin footer
 */
 
function my_footer_version() {
    $text = SUPPORT;
    return $text;
}

function my_footer_text() {
    $text = sprintf('Разработка сайта - <a href="%s">%s</a>',DEPARTMENTLINK,DEPARTMENT);
    return $text;
}

/***********************
 Custom login page
 ***********************/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . PLUGDIRURL . 'assets/css/login.css"/>';
}

// changing the login page URL
function custom_loginlogo_url(){
    return home_url(); // changes the url link from wordpress.org to your blog or website's url
    }
// changing the login page URL hover text
function custom_loginlogo_title(){
    return 'На главную'; // changing the title from "Powered by WordPress" to whatever you wish
    }
// Clean admin bar
// Remove wordpress logo in top-left conner
function clean_admin_bar() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}



