<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
  <?php wp_nav_menu(['theme_location' => 'main-menu', 'container' => 'nav', 'container_class' => 'container']); ?>
</header>
