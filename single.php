<?php get_header(); ?>

    <div class="conteudo">
        <div class="container mt-4 mb-4 container-single">

            <div class="row">
                <div class="col-md-8 col-sm-12">

                    <?php if(have_posts(  )): while(have_posts(  )): the_post(  ) ;

                        get_template_part( 'template-parts/content', 'single' );
                    ?>
                </div> 

                <div class="col-md-4 col-sm-12 ">


                    <div class="row">

                        <?php get_sidebar('blog'); ?>
                        
                    </div><!--Fim da Row-->

                </div>


            </div>


            <?php endwhile; ?>

            <?php else:get_404_template(  ); endif ?>


        </div>
    </div><!--Fim da Div Contaudo-->


    </div> <!--Fim da div wraper-->
<?php get_footer(); ?>