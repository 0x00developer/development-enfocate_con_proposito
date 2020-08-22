  <?php get_header(); ?>
  <!-- MAIN -->
  <main role="main" class="main">
    <!-- BLOG -->
    <div class="container text blog">
      <h2 class="title">Blog</h2>
      <div class="blog-content">
        <?php // Start the WordPress loop
          if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <section class="a-post">
          <figure class="a-post-image">
            <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails');
            } ?>
            </a>
          </figure>
          <h3 class="subtitle">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="a-post-intro"><?php echo the_excerpt(); ?></div>
          <ul class="a-post-meta-list">
            <li class="a-post-meta-author">
              Autor: <?php the_author(); ?>
            </li>
            <li class="a-post-meta-date">
              Fecha: <?php the_time('F j, y'); ?>
            </li>
            <li class="a-post-meta-category">
              Categoria(s):<?php the_category(' / '); ?>
            </li>
            <li class="a-post-meta-tags">
              Etiquetas: <?php the_tags('', ' / ', ''); ?>
            </li>
          </ul>
        </section>
        <?php endwhile; else : ?>
        <!-- NO POST -->
        <section class="a-post">
          <h3 class="subtitle">No se encontaron artículos.</h3>
        </section>
        <?php // End the WordPress loop
          endif;
        ?>
        <div class="blog-pagination">
        <?php if (get_next_post_link() || get_previous_post_link()) { ?>
          <?php next_posts_link('< &nbsp;Previos'); ?>
          <?php previous_posts_link('Recientes&nbsp; >'); ?>
        <?php } ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
  <?php get_footer(); ?>