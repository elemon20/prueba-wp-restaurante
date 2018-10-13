<?php 

	require_once get_template_directory() . '/functions/custom-post-type.php';

//REGISTRO DE ESTILOS

function register_style() {
	$theme_data = wp_get_theme();

	/*Registrando estilos*/
	wp_register_style('bootstrap',
	get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '4.1.3', 'screen');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
  wp_register_style('pushbar', get_parent_theme_file_uri('/assets/vendor/css/pushbar.css'), null, $theme_data->get( 'Version' ), 'screen');
	wp_register_style('main',
	get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

		/* Enqueue estilos */
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('fontawesome');
    wp_enqueue_style('main');
    wp_enqueue_style('pushbar');
}

add_action( 'wp_enqueue_scripts', 'register_style' );

//REGISTRO DE SCRIPTS

function register_scripts() {
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
wp_register_script('pushbar', get_parent_theme_file_uri('/assets/vendor/js/pushbar.js'), null, null, true);
wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jQuery3'), null, true);

//Enqueue Scripts
wp_enqueue_script('jQuery3');
wp_enqueue_script('jQuery_migrate');
wp_enqueue_script('easingJquery');
wp_enqueue_script('pushbar');
wp_enqueue_script('app');
wp_enqueue_script('CSSPlugin');
wp_enqueue_script('parallax');
wp_enqueue_script('TweenLite');
wp_enqueue_script('bootstrap');
wp_enqueue_script('mainJS');

}

add_action('wp_enqueue_scripts', 'register_scripts');

//dasactiva bufer de salida
	remove_action ('shutdown', 'wp_ob_end_flush_all', 1);


//registrando Menu

	function menus_setup() {
		register_nav_menus(
			array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			)
		);
	}
	add_action( 'after_setup_theme', 'menus_setup' );



//registrando tamaño de imagenes

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

add_action( 'after_setup_theme', 'thumbnails_setup' );

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'destacada'			=> __( 'Tamaño de las imágenes del menu en la carta' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destacada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destacada de los post' ),
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'destacada', 600, 400, true );
    add_image_size( 'square', 300, 300, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 600, 400, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  


//removiendo atributos por defecto de tamaño de imagenes de WP

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );


//activando area widget

  function dl_widgets() {
  	register_sidebar( array(
  		'name' => 'Widget Footer',
  		'id' => 'widget_footer'
  	));
  }

  add_action('widgets_init', 'dl_widgets');




?>