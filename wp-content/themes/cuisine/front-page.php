<?php get_header(); ?>

<?php if (have_posts()) : ?>

<section  class="container grid grid-4">
<?php while (have_posts()) : ?>
  <?php the_post(); ?>

  <article>
    <?php the_post_thumbnail('medium'); ?>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_excerpt(); ?></p>
  </article>

<?php endwhile; ?>
</section>

<?php else: ?>
    <p>Aucun contenu à afficher</p>
<?php endif; ?>

<?php get_footer(); ?>
