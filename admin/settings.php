<?php
// Setting API
// https://developer.wordpress.org/plugins/settings/custom-settings-page/

// https://torquemag.io/2017/06/creating-wordpress-settings-page-using-wordpress-rest-api/
// https://github.com/bueltge/wordpress-admin-style
//
// Generators
// https://www.nimbusthemes.com/register-custom-menus-wordpress-snippet-generator/
// http://wpsettingsapi.jeroensormani.com/

add_action('admin_menu', 'kpfu_brand_settings');

function kpfu_brand_settings()
{
    add_options_page(
        'КФУ брендирование',
        'Брендирование',
        'manage_options',
        'kpfu-brand-settings.php',
        'myplugin_display_admin_page'
    );
}

function myplugin_display_admin_page() {
    echo 'Hello';
}
