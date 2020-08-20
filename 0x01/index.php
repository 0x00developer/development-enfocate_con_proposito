  <?php get_header();?>
    <!-- MAIN -->
    <main role="main" class="main">
    <!-- BLOG -->
    <div class="container text">
      <h2 class="title"></h2>
      <div class="blog">
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <section class="a-post">
          <a href="<?php the_permalink();?>">
            <figure class="a-post-image">
            <?php if(has_post_thumbnail()) {the_post_thumbnail('homepage_thumb');}?>
            </figure>
          </a>
          <h3 class="subtitle"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
          <div class="a-post-intro"><?php echo the_excerpt();?></div>
          <aside class="a-post-aside">
            <time datetime=""><?php echo get_the_date();?></time>
            <div class="a-post-tags"><?php the_category();?></div>
          </aside>
        </section>
        <?php endwhile; else:?>
        <!-- NO POST -->
        <section class="a-post">
          <h3 class="subtitle">No hay contenidos relacionados con tu busqueda.</h3>
          <p class="a-post-intro">Por favor realiza una nueva busqueda.</p>
          <?php get_search_form();?>
        </section>
        <?php endif;?>
        <?php if (get_next_post_link() || get_previous_post_link()) {?>
        <div class="blog-nav">
          <?php next_posts_link('Previos');?>
          <?php previous_posts_link('Recientes');?>
        </div>
        <?php }?>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>