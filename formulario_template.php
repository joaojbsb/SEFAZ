<?php

/* 

Template Name: Contact Form

*/

?>



<?php get_header(); ?>

<section class="container formulario-template">
		<div class="text-contato text-center">
			<h2><?php the_title(); ?></h2>
		</div>

		<div class="row">


            <?php

                if (have_posts(  )):
                while(have_posts()):the_post();

            ?>

                <div class="col-sm-12 col-md-12 col-lg-12 my-5">

                    <div class="card border-0">
                        <div class="card-body text-justifyr formulario">
                            <?php the_content( ); ?>
                        </div>
                    </div>

			    </div>

            

 

            <?php endwhile; else: ?>

                <p>There is nothing yet to be displayed...</p>

            <?php endif; ?> 
 
			 
        </div>

    </section>

    </div> <!--Fim da div wraper-->		

<?php get_footer(); ?>

<script language=javascript type="text/javascript"> 
      $(document).ready(function(){ 
        $(".data").mask("99/99/9999" );
        $(".maskcelular").mask("(99) 99999-9999" ); 
        $(".maskcpf").mask("999.999.999.99" ); 
        $(".maskcnpj").mask("99.999.999/9999-99" );   
        $('.dinheiro').mask('#.##0,00', {reverse: true});
        $('.cep').mask("99999-999");
        
      });
    </script> 	


<script language=javascript type="text/javascript"> 

var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'],
            mask = (cpf.length > 14) ? masks[1] : masks[0];
        el.mask(mask, op);
    }
    }

    $('.cpfOuCnpj').mask('000.000.000-000', options);

</script> 	