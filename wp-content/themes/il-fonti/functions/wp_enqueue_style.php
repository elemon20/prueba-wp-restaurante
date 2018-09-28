<?php 

//REGISTRO DE ESTILOS

function register_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/*Registrando estilos*/
	wp_register_style('bootstrap',
	get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '4.1.3', 'screen');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
	wp_register_style('main',
	get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

		/* Enqueue estilos */
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('main');
}

add_action( 'wp_enqueue_scripts', 'register_style' );

?>
