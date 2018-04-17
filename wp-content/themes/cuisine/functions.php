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
    'name' => 'Sidebar liste chiens',
    'id' => 'sidebar-archive-dog'
  ]);
}
/*
add_action ('init', 'DogTheme_cpt');
function DogTheme_cpt() {
  register_post_type('dog', [
    'labels' => [
      'name' => 'Chiens',
      'singular_name' => 'Chien'
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
  ]);

  register_taxonomy('race', ['dog'], [
    'labels' =>  [
    'name' => 'Races',
    'singular_name' => 'Race'
  ],
    'hierarchical' => true
  ]);

  if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
      'key' => 'group_animal',
      'title' => 'Groupe animal',
      'location' => [
        [
          [
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'dog'
          ]
        ]
      ],

      'fields' => [
        [
          'key' => 'age_min',
          'label' => 'Age mini',
          'name' => 'age_min',
          'type' => 'number',
          'min' => 0
        ],

        [
          'key' => 'age_max',
          'label' => 'Age max',
          'name' => 'age_max',
          'type' => 'number',
          'min' => 0
        ]
      ]

    ]);
  }


}
