<?php get_header(); ?>



	<section class="contato container">

		<div class="text-contato text-center">

			<h2><?php the_title(); ?></h2>

		</div>



		<div class="row">

             <div class="col-sm-12 col-md-6 col-lg-4 my-5">

               <div class="card border-0">

                  <div class="card-body text-center">

                    <i class="fa fa-phone fa-2x mb-3" aria-hidden="true"></i>

                    <h4 class="text-uppercase mb-3">Telefone</h4>

                    <p><?php echo get_theme_mod('set_telefone_itbi'); ?></p>

                  </div>

                </div>

			 </div>

			 

             <div class="col-sm-12 col-md-6 col-lg-4 my-5">

               <div class="card border-0">

                  <div class="card-body text-center">

                    <i class="fa fa-map-marker fa-2x mb-3" aria-hidden="true"></i>

                    <h4 class="text-uppercase mb-3">Endereço</h4>

                   <address><?php echo get_theme_mod('set_endereco_itbi'); ?> </address>

                  </div>

                </div>

			 </div>					 

             <div class="col-sm-12 col-md-6 col-lg-4 my-5">

               <div class="card border-0">

                  <div class="card-body text-center">

                    <i class="fa fa-globe fa-2x mb-3" aria-hidden="true"></i>

                    <h4 class="text-uppercase mb-3">email</h4>

                    <p><?php echo get_theme_mod('set_email_itbi'); ?></p>

                  </div>

                </div>

			        </div>
			 

    </div>

        <?php



          if (have_posts(  )):

           while(have_posts()):the_post();



        ?>

        <article>   

            <?php the_content( ); ?>

        </article>  



      <p class="text-muted border-bottom">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>

        <?php

        endwhile;

        else:

      ?>

      <p>There is nothing yet to be displayed...</p>



      <?php endif; ?>


	</section>


  </div> <!--Fim da div wraper-->	


  <?php get_footer(); ?>

  

 