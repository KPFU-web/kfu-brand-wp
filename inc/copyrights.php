<?php
 


// Filters
add_filter( 'admin_footer_text', 'my_footer_text' );
add_filter( 'update_footer', 'my_footer_version', 11 );
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
add_filter( 'login_headertitle', 'custom_loginlogo_title');
// Actions
add_action( 'login_head', 'my_custom_login');



/**
 * Change text in admin footer
 */
 
function my_footer_version() {
    $text = KFUBRAND_PLUGIN_FOOTER2;
    return $text;
}

function my_footer_text() {
    $text = sprintf('<a href="%s">%s</a>',KFUBRAND_PLUGIN_FOOTER1_LINK,KFUBRAND_PLUGIN_FOOTER1);
    return $text;
}

/***********************
 Custom login page
 ***********************/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . KFUBRAND_PLUGIN_URL . 'assets/css/login.css"/>';
}

// changing the login page URL
function custom_loginlogo_url(){
    return home_url(); // changes the url link from wordpress.org to your blog or website's url
    }
// changing the login page URL hover text
function custom_loginlogo_title(){
    return 'На главную'; // changing the title from "Powered by WordPress" to whatever you wish
    }




