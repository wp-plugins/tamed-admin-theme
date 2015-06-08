<?php

/*
Plugin Name: Tamed Admin Theme
Plugin URI: 
Description: A basic, clean Wordpress admin theme 
Author: Luc Awater
Version: 1.0
Author URI: http://lucawater.nl
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function my_admin_theme_style() {
    wp_enqueue_style('tamed-admin-theme', plugins_url('css/app.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');
?>