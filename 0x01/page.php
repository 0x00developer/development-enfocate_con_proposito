  <?php get_header(); ?>
  <!-- MAIN -->
  <main role="main" class="main">
    <!-- PAGE -->
    <section class="container text page">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h2 class="title"><?php the_title(); ?></h2>
          <figure class="page-image">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails');
            } ?>
          </figure>
          <div class="page-content">
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>