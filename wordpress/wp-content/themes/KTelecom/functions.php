<?php
	add_action('wp_enqueue_scripts', 'K_telecom');

	function K_telecom() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('K_telecom_style', get_template_directory_uri() . '/assets/style/style.css');

		wp_enqueue_script('K_telecom_scripts', get_template_directory_uri() . '/assets/script.js', array(), null, true);
	}
?>