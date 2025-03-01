<?php
/*
    Plugin Name: WordPress Plugin Template
    Description: A simple template for writing WordPress plugins.
    Version: 1.0.0
    Requires PHP: 8.2
    Text Domain: wp-plugin-template
    WC requires at least: 6.0.0
    WC tested up to: 6.4.3
*/

defined('ABSPATH') or exit;

define('WPT_PLUGIN_NAME', 'WordPress Plugin Template');
define('WPT_PLUGIN_SLUG', 'wpt');
define('WPT_DIR_PATH', plugin_dir_path(__FILE__));
define('WPT_WP_ROOT', WPT_DIR_PATH.'/../../../');
define('WPT_LOGS', WPT_WP_ROOT.'/wpt-logs');

require_once WPT_DIR_PATH.'/vendor/autoload.php';

require_once WPT_DIR_PATH.'/inc/helpers.php';
require_once WPT_DIR_PATH.'/inc/notices.php';

function wptPlugin()
{
    return WPT\Plugin::instance();
}

wptPlugin()->run();
