<?php
/*
Plugin Name: KFU brand style
Plugin URI: https://github.com/orgs/KPFU-web/
Description: Standart plugin for all sites developed by KPFU web team.
Version: 0.8
Author: Sergey Mochalov
Author URI: http://kpfu.ru/sergej.mochalov?from=wordpress_plugin
Text Domain: kpfu-brand
Domain Path: /languages
License: GPL2
 */

namespace KFUbrand;

if (!defined('WPINC')) {
    die;
}

// Constants
define('PLUGIN_VERSION', '0.9');
define('PLUGDIRPATH', plugin_dir_path(__FILE__));
define('PLUGDIRURL', plugin_dir_url(__FILE__));
define('DEPARTMENT', 'Sergey Mochalov');
define('DEPARTMENTLINK', 'https://kpfu.ru/sergej.mochalov');
define('SUPPORT', 'поддержка сайта - 328 кабинет ЦИТ КФУ');

include_once(PLUGDIRPATH . '/admin/settings.php');
// Copyrights for KFU
include_once(PLUGDIRPATH . '/inc/copyrights.php');
// Remove fucking emoji and other wp-stuff
include_once(PLUGDIRPATH . '/inc/clean-head.php');





