<?php get_header(); ?>
       		 <!-- Page Content  -->

				<div class="container ">
					<div class="titulo">
						<h1 class="text-center">Portal do Contribuinte</h1>
						<h5 class="text-center">Seja bem-vindo! Este portal foi desenvolvido pela Secretaria de Fazenda e Planejamento, 
							afim de dar maior comodidade aos contribuintes águaslindense. 
						</h5>
					</div>				
					
				</div>

				<?php get_template_part( 'template-parts/acesso-rapido'  ); ?>

				<section class="noticias">
					<div class="container">

						<div class="row ">

                            <!--argumentos-->                   

                    <?php

                        $my_args = array(

                            'post_type' => 'post',

                            'posts_per_page' => 3,

                            'category_name' => 'noticias',

                    );

                    //query

                    $my_query = new wp_Query ($my_args);    

                    ?>

                    <?php if($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>


							<div class="col-xl-4 col-lg-6">

                                <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid mb-3')); ?>

                                <h5><?php the_title(); ?></h5>
                                
								<p><?php the_excerpt(); ?></p>

								<p><a href="<?php the_permalink();?>" class="btn btn-lc-orange">Saiba mais</a></p>

							</div>
					
                            <?php endwhile; endif; ?>

                            <?php wp_reset_query(); ?> 

						</div><!--Fim da Row-->
					</div>
				</section>
				
<?php get_footer(); ?>

