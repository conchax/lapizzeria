<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lapizzeria</title>
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="encabezado-sitio">
        <div class="contenedor">
          <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
              <img class="logotipo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="lapizzeria">
            </a>
          </div> <!-- .logo -->
          <div class="informacion-encabezado">
          <div class="redes-sociales">
            <?php $args = array(
              'theme_location' => 'social-menu',
              'container' => 'nav',
              'container_class' => 'sociales',
              'container_id' => 'sociales',
              'link_before' => '<span class="sr-text">',
              'link_after' => '</span>'
            );
            wp_nav_menu($args);

            ?>
          </div><!-- Redes sociales -->
          <div class="direccion">
            <p>8567 5ª Avenue, playa del carmen</p>
            <p>Teléfomo 83659374</p>
          </div>        
        </div> <!-- .contenedor -->
        
    </header>
    <div class="menu-principal">
      <div class="mobile-menu">
        <a href="#" class="mobile">Menu <i class="fa fa-bars" aria-hidden="true"></i></a>
      </div>
      <div class="contenedor navegacion">
        <?php
          $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-sitio'
          );
          wp_nav_menu($args)
        ?>
      </div>
    </div>
      
