<?php 
if(!is_admin()){
	/* CSS */
	wp_enqueue_style( 'estilo-global', get_template_directory_uri().'/css/estilo.css', array(),'1.0.0', 'screen' );
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'Font Awesome', get_template_directory_uri().'/css/font-awesome.css', array(),'4.5.0', 'screen' );
	wp_enqueue_style( 'bootstrap material design', get_template_directory_uri().'/css/bootstrap-material-design.css', array(),'1.5.9', 'screen' );
	wp_enqueue_style( 'Riples', get_template_directory_uri().'/css/ripples.css', array(),'1.0.0', 'screen' );
	wp_enqueue_style( 'jquery.dropdown', get_template_directory_uri().'/css/jquery.dropdown.css', array(),'1.0.0', 'screen' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(),'1.0.0', 'screen' );

	/* JS */
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-1.12.1.min.js', array(), '1.12.1', false );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true );
	wp_enqueue_script( 'ripples', get_template_directory_uri() . '/js/ripples.js', array(), '1.5.9', true );
	wp_enqueue_script( 'material', get_template_directory_uri() . '/js/material.js', array(), '1.5.9', true );
	wp_enqueue_script( 'jquery.dropdown', get_template_directory_uri() . '/js/jquery.dropdown.js', array(), '1.5.9', true );
	wp_enqueue_script( 'Funções', get_template_directory_uri() . '/js/funcoes.js', array(), '1.0.0', true );
}

?>