<?php

/**
 * Plugin Name: Simple Math Calculator
 * Plugin URI: http://souravmondal.co.in
 * Description: A simple jquery based calculator.Use Shortcode [calbtn] to use the plugin
 * Version: 2.0.0
 * Author: Sourav Mondal
 * Author URI: http://souravmondal.co.in
 *Tags: calculator,simple math calculator,calculator plugin,wordpress calculator plugin
 * License: GPL2
 */
define('CALCULATOR_PLUGIN_URL', plugin_dir_url(__FILE__));
function SMCload_assets() {
    wp_enqueue_style('calculatorstyle', CALCULATOR_PLUGIN_URL . 'simpleMathCalculator.css');
    wp_enqueue_script('calculatorjs', CALCULATOR_PLUGIN_URL . 'simpleMathCalculator.js',array( 'jquery' ),"1.0.0",TRUE);
}

add_action('wp_enqueue_scripts', 'SMCload_assets');
function SMCcalButton() {
    $calculator_html = '<div id="calculator">'
            . '<label class="txt-align-center">Web Calculator</label>'
            . '<br class="clear"/>'
            . '<div id="firstvalue" class="firstvalue"></div>'
            . '<div id="operators" class="operators"></div>'
            . '<div id="numbers" class="numbers"></div>'
            . '<br class="clear"/>'
            . '<div id="resultshow" class="resultshow"></div>'
            . '<input type="button" id="key1" name="key1" value="1" class="small_key" />'
            . '<input type="button" id="key2" name="key2" value="2" class="small_key" />'
            . '<input type="button" id="key3" name="key3" value="3" class="small_key" />'
            . '<input type="button" id="key4" name="key4" value="4" class="small_key" />'
            . '<input type="button" id="key5" name="key5" value="5" class="small_key" />'
            . '<input type="button" id="key6" name="key6" value="6" class="small_key" />'
            . '<input type="button" id="key7" name="key7" value="7" class="small_key" />'
            . '<input type="button" id="key8" name="key8" value="8" class="small_key" />'
            . '<input type="button" id="key9" name="key9" value="9" class="small_key" />'
            . '<input type="button" id="key0" name="key0" value="0" class="small_key" />'
            . '<input type="button" id="keyp" name="keyp" value="+" class="small_key" />'
            . '<input type="button" id="keym" name="keym" value="-" class="small_key" />'
            . '<input type="button" id="keyd" name="keyd" value="/" class="small_key" />'
            . '<input type="button" id="keymul" name="keymul" value="*" class="small_key" />'
            . '<input type="button" id="clear" name="clear" value="clear" class="small_key" />'
            . '<input type="button" id="off" name="off" value="OFF" class="small_key off" />'
            . '<input type="button" id="on" name="on" value="ON" class="small_key on" />'
            . '<input type="button" id="eqls" name="eqls" value="=" class="small_key" />'
            . '</div>';
    $button = '<button id="cal" name="cal"  class="cal"/>Show Calculator</button>';
    return $calculator_html . $button;
}

add_shortcode('calbtn', 'SMCcalButton');
