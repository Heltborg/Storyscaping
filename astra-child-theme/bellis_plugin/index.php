<?php
/*
 * Plugin Name: bellis plugin
 * Plugin URI: http://localhost
 * Description: Simpelt plugin med popup-video og CTA-knap.
 * Version: 1.0.0
 * Author: Gruppe 1
 * Author URI: http://localhost
 * License: GPL2
 */

 if (!defined('ABSPATH')) {
    exit; // Stop direkte adgang
}

// Tilføj CSS
function bellis_enqueue_styles() {
    wp_enqueue_style('bellis-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'bellis_enqueue_styles');

// Tilføj JS
function bellis_enqueue_scripts() {
    wp_enqueue_script('bellis-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'bellis_enqueue_scripts');

// Shortcode: [bellis_popup]
function bellis_popup_box() {
    $content  = '<div id="bellis-container">';
    $content .= '  <div class="bellis-box slide-top" id="bellis-box">';
    $content .= '      <div class="bellis-close-button" id="bellis-close">&#10006;</div>';
    $content .= '      <h2>FÆLLESSKABET STARTER HER</h2>';
    $content .= '      <img src="' . plugin_dir_url(__FILE__) . 'img/bellis_plugin_billede.png" alt="Bellis billede">';
    $content .= '      <p>Fællesskab starter med et hej og en kop kaffe. Hos Bellis mødes mennesker, idéer og grin i øjenhøjde. Klik dig ind, og mærk stemningen, hvor forbindelser opstår.</p>';
    $content .= '      <div class="button-holder">';
    $content .= '          <button id="bellis-button">Oplev Fællesskabet</button>';
    $content .= '      </div>';
    $content .= '  </div>';
    $content .= '</div>';

    return $content;
}
add_shortcode('bellis_popup', 'bellis_popup_box');