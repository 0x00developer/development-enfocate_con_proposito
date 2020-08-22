<?php get_header(); ?>
<!-- MAIN -->
<main role="main" class="main">
  <!-- SINGLE -->
  <section class="container text post">
  <?php // Start the WordPress loop
    if (have_posts()) : while (have_posts()) : the_post();
  ?>
    <figure class="post-image">
    <?php if (has_post_thumbnail()) {
      the_post_thumbnail('post-thumbnails');
    } ?>
    </figure>
    <h2 class="title"><?php the_title(); ?></h2>
    <article class="post-content">
      <?php the_content(); ?>
    </article>
    <div class="post-meta">
      <ul class="post-meta-list">
        <li class="post-meta-author">
          Autor: <?php the_author(); ?>
        </li>
        <li class="post-meta-date">
          Fecha: <?php the_time('F j, y'); ?>
        </li>
        <li class="post-meta-category">
          Categoria(s):<?php the_category(' / '); ?>
        </li>
        <li class="post-meta-tags">
          Etiquetas: <?php the_tags('', ' / ', ''); ?>
        </li>
      </ul>
    </div>
    <?php// Post comments
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
    ?>
    <?php // End the WordPress loop
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>