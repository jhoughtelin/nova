<?php
/**
 * Theme Functions
 *
 * @package NovaUB
 */

function novaub_scripts() {
	if( !is_admin()) {
		wp_enqueue_script('modernizr', get_template_directory_uri() . "/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js");
		wp_enqueue_script('bootstrap', get_template_directory_uri() . "/js/vendor/bootstrap.min.js",['jquery','modernizr']);
		wp_enqueue_script('nova-main', get_template_directory_uri() . "/js/main.js", ['jquery']);

		wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min");
		wp_enqueue_style('bootstrap-responsive', get_template_directory_uri() . "/css/bootstrap-responsive.min.css");
		wp_enqueue_style('font-awesome', get_template_directory_uri(). "/css/font-awesome.min.css");
		wp_enqueue_style('nova-main', get_template_directory_uri() . "/css/main.css");
		wp_enqueue_style('sl-slide', get_template_directory_uri() . "/css/sl-slide.css");
	}
}

add_action('wp_enqueue_scripts','novaub_scripts');

require get_template_directory() . '/inc/template-tags.php';