<?php

//  Actions
add_action( 'init', 'remove_emojis_and_clean_head' );

/**
 * Disable the emoji's and clean head
 */
function remove_emojis_and_clean_head() {
    // Emoji
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    // Wordpress stuff
    remove_action( 'wp_head', 'wp_generator'); // Убираем генератор
    remove_action( 'wp_head', 'rsd_link');  // Убираем RDS
    remove_action( 'wp_head', 'wlwmanifest_link'); // Убираем манифест
    remove_action( 'wp_head', 'wp_shortlink_wp_head');
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

}

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array  $plugins
 * @return   array  Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}







