<?php
/*
Plugin Name: WordPress Canvas - Isotope
Plugin URI: http://wordpresscanvas.com/features/shortcodes/
Description: Registers isotope library. Theme or plugin must use wp_enqueue_script('wordpresscanvas-isotope');
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.1
License: MIT
License URI: http://isotope.metafizzy.co/docs/license.html
*/

if( !function_exists ('wc_isotope_scripts') ) :
	function wc_shortcodes_scripts() {
		wp_register_script( 'wordpresscanvas-isotope', plugin_dir_url( __FILE__ ) . 'js/jquery.isotope.min.js', array ( 'jquery' ), '1.5.25', false );
	}
	add_action('wp_enqueue_scripts', 'wc_isotope_scripts');
endif;
