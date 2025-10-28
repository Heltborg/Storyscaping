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
function sdb_enqueue_styles() {
    wp_enqueue_style('sdb-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'sdb_enqueue_styles');

// Tilføj JS
function sdb_enqueue_scripts() {
    wp_enqueue_script('sdb-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'sdb_enqueue_scripts');

// Shortcode funktion
function sdb_slide_box_form() {
    $content = '';

    $content .= '<div id="sdb-container">';
    $content .= '<div class="sdb-box slide-top" id="sdb-box">';
    $content .= '<div class="sdb-close-button" id="sdb-close">&#10006;</div>';
    $content .= '<h2>FÆLLESSKABET STARTER HER</h2>';
    $content .= '<img src="' . plugin_dir_url(__FILE__) . 'img/bellis_plugin_billede.png" alt="Bellis billede">';
    $content .= '<p>Fællesskab starter med et hej og en kop kaffe. Hos Bellis mødes mennesker, idéer og grin i øjenhøjde. Klik dig ind, og mærk stemningen, hvor forbindelser opstår.</p>';
    $content .= '<div class="button-holder">';
    $content .= '<button id="sdb-button">Oplev Fællesskabet</button>';
    $content .= '</div>'; // button-holder
    $content .= '</div>'; // sdb-box
    $content .= '</div>'; // sdb-container

    return $content;
}
add_shortcode('slide_box', 'sdb_slide_box_form');