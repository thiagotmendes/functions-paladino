<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'blog_register');
function blog_register() {
	 $labels = array(
			'name' => 'Promoção',
			'singular_name' => 'Post',
			'all_items' => 'Todos Promoção',
			'add_new' => 'Adicionar Promoção',
			'add_new_item' => 'Adicionar Promoção',
			'edit_item' => 'Editar Promoção',
			'new_item' => 'Novo Promoção',
			'view_item' => 'Ver Promoção',
			'search_items' => 'Procurar Promoção',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('categoria-promocao'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery'),
			'rewrite' => array('slug' => 'promocao')
	  );
	register_post_type('promocao',$args);
}

add_action('init', 'depoimentos_register');
function depoimentos_register() {
	 $labels = array(
			'name' => 'Cardapio',
			'singular_name' => 'Post',
			'all_items' => 'Todos Cardapio',
			'add_new' => 'Adicionar Cardapio',
			'add_new_item' => 'Adicionar Cardapio',
			'edit_item' => 'Editar Cardapio',
			'new_item' => 'Novo Cardapio',
			'view_item' => 'Ver Cardapio',
			'search_items' => 'Procurar Cardapio',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('categoria-cardapio'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery'),
			'rewrite' => array('slug' => 'Cardapio')
	  );
	register_post_type('Cardapio',$args);
}


/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */
/* Criando uma Taxonomia Personalizada */
register_taxonomy("categoria-servico", array("cardapio"), 
	array(
		"hierarchical" => true, 
		"label" => "categoria", 
		"singular_label" => "categoria cardapio",
		'rewrite' => array( 'slug' => 'categoria-cardapio' )
	)
);

/*******************************************************/


?>