<?php namespace com\github\cacaolab;
/**
 * Plugin Name: Fancy Hash Tabs
 * Plugin URI: https://github.com/CacaoLab/FancyHashTabs
 * Description: Allows to insert content in tabs. Use the Hash Tabs Library as base.
 * Version: 0.1
 * Author: Crisoforo Gaspar
 * Author URI: http://www.crisoforo.com
 * License: GPL2
 */

$plugin_directory = plugin_dir_path( __FILE__ );
$lib_directory = './lib/';

include_once $plugin_directory . $lib_directory . 'class-assets.php';
include_once $plugin_directory . $lib_directory . 'class-shortcode.php';
