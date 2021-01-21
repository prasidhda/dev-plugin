<?php
/*
Plugin Name: Dev Plugin
Plugin URI: https://github.com/prasidhda/dev-plugin
Description: This is very simple plugin for the development testing plugin
Author: Prasidhda Malla
Version: 1.0.0
Author URI: https://prasidhda.com.np
*/

if ( !defined('ABSPATH') ) {
    exit();
}

if ( !function_exists('pre') ) {
    function pre( $var, $die = true ) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

        if ( $die )
            die;
    }
}