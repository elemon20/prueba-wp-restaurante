<?php 

//REGISTRO DE SCRIPTS

function register_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();

/*Deregister Scripts*/
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-migrate' );

/*Registrando Scripts*/
wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '1.0.0', true);
wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate-1.4.1.min.js'), array('jQuery3'), '1.0.0', true);
wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);
wp_register_script('easingJquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.min.js'), array('jQuery_migrate'), null, true);
wp_register_script('app', get_parent_theme_file_uri('/assets/vendor/js/app.js'), array('jQuery3'), null, true);
wp_register_script('parallax', get_parent_theme_file_uri('/assets/vendor/js/parallax_content.js'), array('jQuery3'), null, true);
wp_register_script('CSSPlugin', get_parent_theme_file_uri('/assets/vendor/js/CSSPlugin.min.js'), array('jQuery3'), null, true);
wp_register_script('TweenLite', get_parent_theme_file_uri('/assets/vendor/js/TweenLite.min.js'), array('jQuery3'), null, true);
wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jQuery3'), null, true);

//Enqueue Scripts
wp_enqueue_script('jQuery3');
wp_enqueue_script('jQuery_migrate');
wp_enqueue_script('easingJquery');
wp_enqueue_script('mainJS');
wp_enqueue_script('app');
wp_enqueue_script('CSSPlugin');
wp_enqueue_script('parallax');
wp_enqueue_script('TweenLite');
wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'register_scripts');

?>