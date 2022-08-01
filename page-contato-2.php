

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

                    <p><?php echo get_theme_mod('set_telefone'); ?></p>

                  </div>

                </div>

			 </div>

			 

             <div class="col-sm-12 col-md-6 col-lg-4 my-5">

               <div class="card border-0">

                  <div class="card-body text-center">

                    <i class="fa fa-map-marker fa-2x mb-3" aria-hidden="true"></i>

                    <h4 class="text-uppercase mb-3">Endereço</h4>

                   <address><?php echo get_theme_mod('set_endereco'); ?> </address>

                  </div>

                </div>

			 </div>			 



			 

             <div class="col-sm-12 col-md-6 col-lg-4 my-5">

               <div class="card border-0">

                  <div class="card-body text-center">

                    <i class="fa fa-globe fa-2x mb-3" aria-hidden="true"></i>

                    <h4 class="text-uppercase mb-3">email</h4>

                    <p><?php echo get_theme_mod('set_email'); ?></p>

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


      <?php

        endwhile;

        else:

      ?>

      <p>There is nothing yet to be displayed...</p>



      <?php endif; ?>

	</section>


  </div> <!--Fim da div wraper-->	


  <?php get_footer(); ?>

  

  <script language=javascript type="text/javascript"> 

      $(document).ready(function(){ 

        $("#data").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});

        $("#maskcelular").mask("(99) 99999-9999", {placeholder:"(xx) xxxx-xxxx)"}); 

        $("#maskcpf").mask("999.999.999.99", {placeholder:"xxx.xxx.xxx.xx"}); 

        

      });

    </script> 



<!-- Script para o campo de cpf ou cnpj no mesmo campo -->

<script language=javascript type="text/javascript"> 

    $("#cpfcnpj").keydown(function(){

        try {

          $("#cpfcnpj").unmask();

        } catch (e) {}

        

        var tamanho = $("#cpfcnpj").val().length;

      

        if(tamanho < 11){

            $("#cpfcnpj").mask("999.999.999-99");

        } else if(tamanho >= 11){

            $("#cpfcnpj").mask("99.999.999/9999-99");

        }

        

        // ajustando foco

        var elem = this;

        setTimeout(function(){

          // mudo a posição do seletor

          elem.selectionStart = elem.selectionEnd = 10000;

        }, 0);

        // reaplico o valor para mudar o foco

        var currentValue = $(this).val();

        $(this).val('');

        $(this).val(currentValue);

    });

</script> 

