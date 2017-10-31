<?php
/*
Plugin Name: KFU brand
Plugin URI: https://github.com/orgs/KPFU-web/
Description: KFU brand style for wordpress.
Version: 0.9
Author: Sergey Mochalov
Author URI: http://kpfu.ru/sergej.mochalov
Text Domain: kpfu-brand
Domain Path: /languages
License: GPL2
*/

if (!defined('WPINC')) {
    die;
}

// Constants
define ('KFUBRAND_PLUGIN_VERSION', '0.9' );
define ('KFUBRAND_PLUGIN_PATH', plugin_dir_path(__FILE__));
define ('KFUBRAND_PLUGIN_URL', plugin_dir_url( __FILE__ ));
define ('KFUBRAND_PLUGIN_FOOTER1', 'Сделано в КФУ');
define ('KFUBRAND_PLUGIN_FOOTER1_LINK', 'http://kpfu.ru/');
define ('KFUBRAND_PLUGIN_FOOTER2', 'Поддержка сайта - отдел разработки ЦИТ КФУ каб.328');


// Copyrights for KFU
include_once(KFUBRAND_PLUGIN_PATH . '/inc/copyrights.php');
// Remove fucking emoji and other wp-stuff
include_once(KFUBRAND_PLUGIN_PATH. '/inc/clean-head.php');
// Remove fucking emoji and other wp-stuff
include_once(KFUBRAND_PLUGIN_PATH. '/inc/admin-cleanup.php');





