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


        /**
         * Remove Howdy.
         *
         * @since 1.0.0
         * @modified 1.1.0
         */


function remove_howdy( $wp_admin_bar ) {

            $my_account = $wp_admin_bar->get_node( 'my-account' );
            $newtitle = '';
            $wp_admin_bar->add_node(
              array(
                  'id' => 'my-account',
              'title' => $newtitle,
            )
          );

        }

/**
      	 * Edit the backend.
      	 *
      	 * dashboard widgets
      	 * sidebar menu items
      	 * sidebar sub menu items
      	 *
      	 * @since 1.0.0
      	 */
function edit_admin() {

      		// remove all WordPress default dashboard widgets
      		remove_meta_box( 'dashboard_activity', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );
      		remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );

      		// remove Tools menu
      		remove_menu_page( 'tools.php' );

      		// remove "Header" and "Custom Background" sub-menus from "Appearance"
      		remove_submenu_page( 'themes.php', 'custom-header' );
      		remove_submenu_page( 'themes.php', 'custom-background' );
      		// remove Edit CSS sub-menu from "Appearance" (since WP 4.8)
      		remove_submenu_page( 'themes.php', 'editcss-customizer-redirect' );


      	}

        /**
      	 * Remove default widgets.
      	 *
      	 * @since 1.0.0
      	 */
function remove_wp_default_widgets() {

      		unregister_widget( 'WP_Widget_Pages' );
      		unregister_widget( 'WP_Widget_Calendar' );
      		unregister_widget( 'WP_Widget_Archives' );
      		if ( get_option( 'link_manager_enabled' ) )
      			unregister_widget( 'WP_Widget_Links' );
      		unregister_widget( 'WP_Widget_Meta' );
      		unregister_widget( 'WP_Widget_Categories' );
      		unregister_widget( 'WP_Widget_Recent_Comments' );
      		unregister_widget( 'WP_Widget_RSS' );
      		unregister_widget( 'WP_Widget_Tag_Cloud' );

      	}
