<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Slick
 * Plugin URI:        https://github.com/kntnt/kntnt-slick
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-slick
 * Description:       Loads the last carousel you'll ever need – Slick by Ken Wheeler. See the plugin's <a href="https://github.com/kntnt/kntnt-slick#readme">README</a> for instruction on how to use it.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-slick
 * Domain Path:       /languages
 */

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('kntnt-slick-script.js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], '1.8.1', false);
    wp_enqueue_style('kntnt-slick-slider.css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', false, '1.8.1', 'all');
    wp_enqueue_style('kntnt-slick-slider-theme.css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', 'kntnt-slick-slider.css', '1.8.1', 'all');
});

