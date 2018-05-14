<?php

add_theme_support("post-thumbnails");

/*
add_action('after_setup_theme', 'DogTheme_image_size');
function DogTheme_image_size() {
  add_image_size('banner', 750, 200, true);
}
*/
add_action('wp_enqueue_scripts', 'sitenew_enqueue_style');
function sitenew_enqueue_style() {
  wp_enqueue_style('core', get_stylesheet_uri());
}

add_action('after_setup_theme', 'sitenew_register_menu');
function sitenew_register_menu() {
  register_nav_menu('main-menu', 'Menu principal');
}


add_action('widgets_init', 'sitenew_register_sidebar');
function sitenew_register_sidebar() {
  register_sidebar ([
    'name' => 'Sidebar liste recettes',
    'id' => 'sidebar-archive-recette'
  ]);
}

/*******/


add_action ('init', 'CuisineTheme_cpt');
function CuisineTheme_cpt() {

$labels = array(
  'name'               => _x( 'Recettes', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Recette', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Recettes', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Recette', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Ajouter une recette', 'recette', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Ajouter une Recette', 'your-plugin-textdomain' ),
  'new_item'           => __( 'Nouveau Recette', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Editer Recette', 'your-plugin-textdomain' ),
  'view_item'          => __( 'Voir Recette', 'your-plugin-textdomain' ),
  'all_items'          => __( 'Tout les Recettes', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Rechercher Recettes', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Recettes Parent:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'Pas de recettes trouvés.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'Pas de recettes trouvés dans la corbeille.', 'your-plugin-textdomain' )
);

$args = array(
  'labels'             => $labels,
              'description'        => __( 'Description.', 'your-plugin-textdomain' ),
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'recette' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => 6,
      'menu_icon'         => 'dashicons-media-default
',
      'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
);

register_post_type( 'recette', $args );

/* INGREDIENT */

$labels = array(
		'name'              => _x( 'Ingrédients', 'taxonomy general name', 'cuisine' ),
		'singular_name'     => _x( 'Ingrédient', 'taxonomy singular name', 'cuisine' ),
		'search_items'      => __( 'Recherche ingrédients', 'cuisine' ),
		'all_items'         => __( 'Toutes les ingrédients', 'cuisine' ),
		'parent_item'       => __( 'Parent ingrédient', 'cuisine' ),
		'parent_item_colon' => __( 'Parent ingrédient:', 'cuisine' ),
		'edit_item'         => __( 'Editer ingrédient', 'cuisine' ),
		'update_item'       => __( 'Mettre à jour ingrédient', 'cuisine' ),
		'add_new_item'      => __( 'Ajouter nouveau ingrédient', 'cuisine' ),
		'new_item_name'     => __( 'Nouveau nom de l\'ingrédient', 'cuisine' ),
		'menu_name'         => __( 'Ingrédient', 'textdomain' ),

	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'ingredient' ),
	);

	register_taxonomy( 'ingredient', array( 'recette' ), $args );

/* TYPE DE REPAS*/

  $labels = array(
		'name'              => _x( 'Type de repas', 'taxonomy general name', 'cuisine' ),
		'singular_name'     => _x( 'Type de repas', 'taxonomy singular name', 'cuisine' ),
		'search_items'      => __( 'Recherche Type de repas', 'cuisine' ),
		'all_items'         => __( 'Toutes les types de repas', 'cuisine' ),
		'parent_item'       => __( 'Parent Type de repas', 'cuisine' ),
		'parent_item_colon' => __( 'Parent Type de repas:', 'cuisine' ),
		'edit_item'         => __( 'Editer Type de repas', 'cuisine' ),
		'update_item'       => __( 'Mettre à jour Type de repas', 'cuisine' ),
		'add_new_item'      => __( 'Ajouter nouveau type de repas', 'cuisine' ),
		'new_item_name'     => __( 'Nouveau nom de l\'Type de repas', 'cuisine' ),
		'menu_name'         => __( 'Type de repas', 'textdomain' ),

	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type-repas' ),
	);

	register_taxonomy( 'type-repas', array( 'recette' ), $args );

/* PRIX*/


$labels = array(
		'name'              => _x( 'Prix', 'taxonomy general name', 'cuisine' ),
		'singular_name'     => _x( 'Prix', 'taxonomy singular name', 'cuisine' ),
		'search_items'      => __( 'Recherche Prix', 'cuisine' ),
		'all_items'         => __( 'Toutes les Prix', 'cuisine' ),
		'parent_item'       => __( 'Parent Prix', 'cuisine' ),
		'parent_item_colon' => __( 'Parent Prix:', 'cuisine' ),
		'edit_item'         => __( 'Editer Prix', 'cuisine' ),
		'update_item'       => __( 'Mettre à jour Prix', 'cuisine' ),
		'add_new_item'      => __( 'Ajouter nouveau Prix', 'cuisine' ),
		'new_item_name'     => __( 'Nouveau nom de l\'Prix', 'cuisine' ),
		'menu_name'         => __( 'Prix', 'textdomain' ),

	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Prix' ),
	);
  register_taxonomy( 'prix', array( 'recette' ), $args );

}
