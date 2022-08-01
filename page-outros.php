<?php get_header(); ?>

    <div class ="container template-iptu">

        <div class="row">

            <?php

                $query = new WP_Query(array( 'pagename' => 'outros' ));?>

                <div class="card">

                    <?php

                        if($query->have_posts()){

                            while($query->have_posts()){

                                $query->the_post();

                    ?>

                    <div class="card-body">

                        <h3 class="card-title text-center"><?php $titulo = the_title();?></h3>
                        <?php $conteudo = the_content(); ?>

                    </div>                           

                    <?php

                        }

                    } ?>

                </div>

           <?php wp_reset_postdata(); // restaurando a global $post        

            ?>         

        </div>

        <?php get_template_part( 'template-parts/acesso-rapidooutros' ); ?>

    </div>    

    </div> <!--Fim da div wraper-->

<?php get_footer(); ?>