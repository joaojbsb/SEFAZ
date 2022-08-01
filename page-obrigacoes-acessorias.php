<?php get_header(); ?>



    <section class="educacao-fiscal mt-4 mb-5">

		<div class="container"> 



            <div class="row">

                <div class="col-md-12 col-12">

                    <h3 class="border-bottom pb-2 text-center"><i class="fas fa-newspaper"></i> Obrigações Acessórias</h3>

                        <!--argumentos-->

                        <?php

                            $my_args = array(



                                'post_type' => 'post',



                                'posts_per_page' => 3,



                                'category_name' => 'educacao-fiscal',



                            );



                            //query

                            $my_query = new wp_Query ($my_args);    



                        ?>



                        <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>                     

                        

                            

                        <div class="row  mt-4 mb-4">



                            <div class="col-md-4 col-sm-12 text-center">

                                <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid')); ?>

                            </div>



                            <div class="col-md-8 col-sm-12 mt-3 mt-md-0">

                                

                                <h5><?php the_title(); ?></h5>

                                

                                <?php the_content(); ?>
                                

                            </div>



                        </div>  <!-- Fim da Row -->

                        

                        <?php endwhile; endif; ?>



                        <?php wp_reset_query(); ?> 



                </div>                      

            </div>  <!-- Fim da Row --> 

		</div>

	</section> <!--Fim da Section -->

</div> <!--Fim da div wraper--> 


<?php get_footer(); ?>