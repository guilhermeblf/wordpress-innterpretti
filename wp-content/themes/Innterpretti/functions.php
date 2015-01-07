<?php

/* Imagem destacada */
	add_theme_support('post-thumbnails');

/* FUNÇÃO CRIAR ITEM NO MENU DE ADMINISTRAÇÃO (POST TYPE)*/
	add_action('init', 'type_post_noticias');
 
	function type_post_noticias() { 
		$labels = array (
			'name' => _x('Noticias', 'post type general name'),
			'singular_name' => _x('Noticias', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Nova Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' =>  __('Nenhum Item Encontrada'),
			'not_found_in_trash' => __('Nenhum Item na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Noticias'
		);

		$args = array (
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,          
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'public' => true,
		    'has_archive' => true,
		    'menu_position' => 3, 
		    'menu_icon' => 'dashicons-admin-comments',
			'supports' => array ('title','editor','thumbnail')
		  );
 
register_post_type( 'noticias' , $args );
flush_rewrite_rules();
}

/* FUNÇÃO CRIAR ITEM NO MENU DE ADMINISTRAÇÃO (POST TYPE)*/
	add_action('init', 'type_post_destaques');
 
	function type_post_destaques() { 
		$labels = array (
			'name' => _x('Destaques', 'post type general name'),
			'singular_name' => _x('Destaques', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Nova Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Itens'),
			'not_found' =>  __('Nenhum Item Encontrada'),
			'not_found_in_trash' => __('Nenhum Item na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Destaques'
		);

		$args = array (
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,          
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'public' => true,
		    'has_archive' => true,
		    'menu_position' => 4, 
		    'menu_icon' => 'dashicons-admin-comments',
			'supports' => array ('title','editor','thumbnail')
		  );
 
register_post_type( 'destaques' , $args );
flush_rewrite_rules();
}