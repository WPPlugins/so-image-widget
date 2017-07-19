<?php
/*
Plugin Name: Image Widget
Description: A very simple image widget.
Version: 1.0.2
Author: Greg Priday
Author URI: http://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/copyleft/gpl.html
*/

define('SOW_IMAGE_VERSION', '1.0.2');

if( !class_exists('SiteOrigin_Widgets_Loader') ) include(plugin_dir_path(__FILE__).'base/loader.php');
return new SiteOrigin_Widgets_Loader('image', __FILE__, plugin_dir_path(__FILE__).'inc/widget.php');