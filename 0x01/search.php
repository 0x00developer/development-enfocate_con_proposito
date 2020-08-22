<?php get_header(); ?>
  <!-- MAIN -->
  <main role="main" class="main">
    <!-- BLOG -->
    <div class="container text blog">
      <h2 class="title">Resultados de busqueda</h2>
      <div class="blog-content">
        <?php // Start the WordPress loop
          if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <section class="a-post">
          <a href="<?php the_permalink(); ?>">
            <figure class="a-post-image">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails');
            } ?>
            </figure>
          </a>
          <h3 class="subtitle">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
        </section>
        <?php endwhile; else : ?>
        <!-- NO POST -->
        <section class="a-post">
          <h3 class="subtitle">No hay contenidos relacionados con tu busqueda.</h3>
          <p>No se encontró el término: <span><?php printf(esc_html('%s'), get_search_query()); ?></span>.</p>
          <p class="a-post-intro">Por favor realiza una nueva busqueda.</p>
          <?php get_search_form(); ?>
        </section>
        <?php // End the WordPress loop
          endif;
        ?>
        <div class="blog-pagination">
          <ul>
            <li>Anterior</li>
            <li>1</li>
            <li>Siguiente</li>
          </ul>
          <?php if (get_next_post_link() || get_previous_post_link()) { ?>
            <?php next_posts_link('Previos'); ?>
            <?php previous_posts_link('Recientes'); ?>
          <?php } ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
  <?php get_footer(); ?>