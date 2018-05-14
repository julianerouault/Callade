<?php get_header(); ?>

<main class="container">

<h1>Listes des recettes</h1>

<?php $ingredient = get_terms('ingredient'); ?>
<?php foreach ($ingredients as $ingredient) : ?>
<a href="<?php echo get_term_link($ingredient); ?>">
  <?php echo $ingredient->name; ?>
</a>
<?php endforeach; ?>

<?php dynamic_sidebar('sidebar-archive-recette'); ?>

<?php require_once __DIR__ . '/include/list-recette.php' ?>

</main>

<?php get_footer(); ?>
