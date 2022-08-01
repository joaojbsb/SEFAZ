<?php get_header(); ?>

    <div class ="container template-iptu">

        <div class="row">

            <?php
                $query = new WP_Query(array( 'pagename' => 'alvara' ));?>

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


        <div class="row">

                        <?php

                            $my_args = array(

                                'post_type' => 'post',


                                'posts_per_page' => 4,


                                'category_name' => 'alvara',

                            );

                            //query

                            $my_query = new wp_Query ($my_args); 

                        ?>


                        <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?> 

                            <div class="col-md-3 d-flex align-items-stretch">

                                <div class="card text-center" style="width: 18rem;">

                                    <div class="card-body">

                                        <h5 class="card-title text-center"> <?php the_title( ); ?> </h5>

                                        <?php the_content( ); ?>                                   

                                    </div>

                                </div>

                            </div>                               

                        <?php endwhile; endif; ?>

                        <?php wp_reset_query(); ?>  

        </div> <!-- Fim da Row-->       

    </div>	
    
    </div> <!--Fim da div wraper-->	

<?php get_footer(); ?>

  




