<?php

add_action( 'wp_before_admin_bar_render', 'clean_admin_bar', 0);
// Clean admin bar
// Remove wordpress logo in top-left conner
function clean_admin_bar() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
        $wp_admin_bar->remove_menu( 'about' );            // Remove the about WordPress link
        $wp_admin_bar->remove_menu( 'wporg' );            // Remove the WordPress.org link
        $wp_admin_bar->remove_menu( 'documentation' );    // Remove the WordPress documentation link
        $wp_admin_bar->remove_menu( 'support-forums' );   // Remove the support forums link
        $wp_admin_bar->remove_menu( 'feedback' );         // Remove the feedback link
        $wp_admin_bar->remove_menu( 'updates' );          // Remove the updates link
        $wp_admin_bar->remove_menu( 'comments' );         // Remove the comments link
}

// Hide admin menu items if not admin

        add_action( 'admin_menu', 'remove_admin_items' );
        function remove_admin_items(){
                if ( !current_user_can( 'manage_options' ) ) {
                remove_menu_page( 'edit-comments.php');
                remove_menu_page( 'tools.php' );
                remove_menu_page( 'profile.php' );

        }
        }