<?php get_header(); ?>


    <div class ="container template-denuncia-fiscal mb-20">

        <!--argumentos-->
        <?php

            $my_args = array(

                'post_type' => 'post',

                'posts_per_page' => 1,

                'category_name' => 'denuncia-fiscal',

                );

            //query

            $my_query = new wp_Query ($my_args);

        ?>

        <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>

        <div class="row ">

            <div class="col-md-5 col-sm-12 mt-6 mb-15">

                <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid')); ?>

            </div>

            <div class="col-md-7 col-sm-12 mt-6 mb-15">

                <h3 class="text-center"><?php the_title(); ?></h3>
                <?php the_content(); ?>                

            </div>

        </div>  <!-- Fim da Row -->

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?> 

        <div class="row mb-20">

            <?php $query = new WP_Query(array( 'pagename' => 'denuncia-fiscal' ));?>

                <?php

                    if($query->have_posts()){
                        while($query->have_posts()){

                            $query->the_post();
                ?>

            <div class="col-md-12 ">
                <?php $conteudo = the_content(); ?>
                    <?php

                        }

                    } ?>

            </div>

           <?php wp_reset_postdata(); // restaurando a global $post  ?> 

        </div>  <!-- Fim da Row --->

    </div> 

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

      $(document).ready(function(){ 

        $(".data").mask("99/99/9999" );

        $(".maskcelular").mask("(99) 99999-9999" ); 

        $(".maskcpf").mask("999.999.999.99" ); 

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
