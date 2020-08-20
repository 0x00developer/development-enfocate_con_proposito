<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta name="google-site-verification" content="" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="robots" content="" />
  <meta name="copyright" content="Fundación: Enfócate con propósito" />
  <meta name="owner" content="Fundación: Enfócate con propósito" />
  <meta name="author" content="Fundación: Enfócate con propósito" />
  <meta name="web_author" content="https://github.com/javierandresgp" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/normalize.min.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/style.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <title>
    <?php echo the_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
  <h1 class="hidden">Enfócate con propósito</h1>
  <!-- HEADER -->
  <header class="header">
    <!-- PRIMARY MENU -->
    <nav class="nav">
      <button class="btn-nav" id="btnNav">
        <i class="fas fa-hamburger"></i>
      </button>
      <?php wp_nav_menu(array(
        'container' => false,
        'menu_class' => '',
        'items_wrap' => '<ul id="navLinks" class="hidden nav-links">%3$s</ul>',
        'theme_location' => 'primary-menu'
      ));?>
    </nav>
    <!-- SOCIAL MENU -->
    <nav class="social-nav">
      <a href="https://www.instagram.com/enfocateconpropositoco" target="_blank" rel="noopener noreferrer"
        class="social-link"><i class="fab fa-instagram"></i></a>
      <a href="https://m.facebook.com/EnfocateConProposito/" target="_blank" rel="noopener noreferrer"
        class="social-link"><i class="fab fa-facebook-f"></i></a>
      <a href="https://api.whatsapp.com/send?phone=573208198234&text=Hola&nbsp;,&nbsp;entré&nbsp;a&nbsp;enfocateconproposito.org&nbsp;y&nbsp;decidí&nbsp;contactarte&nbsp;"
        target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-whatsapp"></i></a>
      <a href="https://www.youtube.com/channel/UCGaD82cfGRaHNgNSQWHV1Ug" target="_blank" rel="noopener noreferrer"
        class="social-link"><i class="fab fa-youtube"></i></a>
    </nav>
    <!-- LOGO -->
    <figure class="logo">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png"
          alt="ENFÓCATE CON PROPÓSITO" /></a>
    </figure>
  </header>
