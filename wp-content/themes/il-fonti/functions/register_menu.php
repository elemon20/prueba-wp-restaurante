<?php 

//registrando Menu

	function menus_setup() {
		global $theme_options;
		register_nav_menus(
			array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			)
		);
	}
	add_action( 'after_setup_theme', 'menus_setup' );

?>