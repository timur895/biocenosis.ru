<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
        <?php
          if(is_404()) {
              echo '404';
              } else {
                  the_title();
                }               
        ?> 
          </title>
	<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

<script type="text/javascript">
  VK.init({apiId: 7922145, onlyWidgets: true});
</script>
    <?php wp_head(); ?>
</head>
<body style="background-image: url('<?php background_image(); ?>');">
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <nav class="tm-nav" id="tm-nav">            
               
                <?php
             wp_nav_menu( [
                 'theme_location' => 'top',
                 'container' => '',
                 'menu_class' => '',
                 'menu_id' => ''
             ] );
             ?>
            </nav>
         </div>
    </header>
	<div class="scrollup">
  <!-- Иконка fa-chevron-up (Font Awesome) -->
  <i class="fa fa-chevron-up"></i>
</div>