<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
  <?php wp_nav_menu(['menu' => 'menu_callade', 'container' => 'nav', 'container_class' => 'container', 'menu_class' => 'menu_callade']); ?>
</header>
