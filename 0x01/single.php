  <?php get_header(); ?>
  <!-- MAIN -->
  <main role="main" class="main">
    <!-- SINGLE -->
    <section class="container text post">
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
      <figure class="post-image">
        <?php if(has_post_thumbnail()) {the_post_thumbnail('homepage_thumb');}?>
      </figure>
      <h2 class="title"><?php the_title();?></h2>
      <article class="post-content">
        <?php echo the_content();?>
      </article>
      <aside class="post-aside">
        <div class="post-meta">
          <ul class="post-meta-list">
            <li class="post-meta-author">
              <strong>Escrito por:</strong>
              <a href="#" rel="author">
                <figure>
                  <img src="" alt="">
                  <figcaption></figcaption></figure>
              </a>
            </li>
            <li class="post-meta-date">
              <strong>Publicado:</strong>
              <time datetime=""><?php echo get_the_date();?></time>
            </li>
            <li class="post-meta-tag">
              <strong>Etiquetas:</strong>
              <?php the_category();?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="post-share">
          <a href="#" rel="author">
            <figure>
              <img src="" alt="">
              <figcaption></figcaption></figure>
          </a>
          <a href="#" rel="author">
            <figure>
              <img src="" alt="">
              <figcaption></figcaption></figure>
          </a>
        </div>
      </aside>
      <?php endwhile; endif;?>
    </section>
  </main>
  <?php get_footer(); ?>