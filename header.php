<!doctype html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo( 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
	
	  <script language=javascript type="text/javascript">
		  dayName = new Array ("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado")
		  monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto", "Setembro", "Outubro", "Novembro", "Dezembro")
		  now = new Date
	  </script>


    <?php wp_head(); ?>

  </head>

  <body id="topo" <?php body_class(); ?>>
    
   <div class="wrapper">

    <div class="container-fluid mostrar-data ">
      <div class="container">

        <?php get_sidebar('pesquisar'); ?>
      </div>

    </div>
          
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" >   
                
      <!--Imagem do Logo-->
      <a class="navbar-brand" href="home.php">
        <span class="d-block "></span>
        <span class="d-none d-lg-block">
          <?php 

            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
              }

            ?>
          </span>
        </a>
                  <!-- Menu -->
      <div class="collapse navbar-collapse " id="mainNav" >

        <?php wp_nav_menu(array( 'menu' => 'Menu Principal', 

          'container_id' => 'cssmenu', 'walker' => new CSS_Menu_Maker_Walker() )); 
        ?>      
      </div><!--Fim da div colapse-->

    </nav><!--Fim da nav-->
