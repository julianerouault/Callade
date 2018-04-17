<?php get_header(); ?>

<main class="container">

<h1>Listes des chiens</h1>

<?php $races = get_terms('race'); ?>
<?php foreach ($races as $race) : ?>
<a href="<?php echo get_term_link($race); ?>">
  <?php echo $race->name; ?>
</a>
<?php endforeach; ?>

<?php dynamic_sidebar('sidebar-archive-dog'); ?>

<?php require_once __DIR__ . '/include/list-animal.php' ?>

</main>

<?php get_footer(); ?>
