<?php

//  Actions
add_action( 'init', 'kfu_clean_head' );

/**
 * Disable the emoji's and clean head
 */
function kfu_clean_head() {
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

   // https://wp-mix.com/wordpress-disable-rest-api-header-links/
   // Disable REST API link tag
    remove_action('wp_head', 'rest_output_link_wp_head', 10);

    // Disable oEmbed Discovery Links
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

    // Disable REST API link in HTTP headers
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);

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







