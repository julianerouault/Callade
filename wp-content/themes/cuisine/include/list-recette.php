<?php if (have_posts()) : ?>

<?php while (have_posts()) : ?>
  <?php the_post(); ?>

  <article>

    <?php the_post_thumbnail('medium'); ?>
    <a href="<?php echo get_the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    </a>
    <p><?php the_excerpt(); ?></p>
  </article>

<?php endwhile; ?>

<?php else: ?>
    <p>Aucun contenu à afficher</p>
<?php endif; ?>
