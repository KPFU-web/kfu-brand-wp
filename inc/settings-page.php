<?php
// Hook
add_action('admin_menu', 'kpfu_brand_plugin_submenu');


function  kpfu_brand_plugin_submenu() {
add_submenu_page( 
    'options-general.php', 
    'Настройки брендинга', 
    'КФУ брендирование',
    'manage_options', 
    'kpfu-brand-settings',
    'kpfu_brand_page_callback'
    );

}
function kpfu_brand_page_callback(){
    echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
        echo '<h1>Настройки брендирования</h1>';
    echo '</div>';

}