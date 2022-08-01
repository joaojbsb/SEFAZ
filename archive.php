<?php get_header(); ?>
       		 <!-- Page Content  -->

				<section class="noticias mt-4 mb-4">
					<div class="container">

						<div class="row ">

							<div class="col-md-8 col-sm-12">

								<?php

									if (have_posts(  )):
										while(have_posts()):the_post();

								?>

								<article>

									<h5 class="mb-3 pb-2 "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>


										<div class="col-md-12 col-lg-12 mb-3">
										<i class="fa fa-download" aria-hidden="true"><?php the_content( ); ?></i> 
										</div>

                        			<p class="text-muted border-bottom">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>
									

								</article>

								<?php
										endwhile;
									else:
								?>
								<p>There is nothing yet to be displayed...</p>

								<?php endif; ?>

							</div>

							<div class="col-md-4 col-sm-12 ">

								<div class="row">

									<?php get_sidebar('blog'); ?>

								</div><!--Fim da Row-->

							</div>
							
						</div><!--Fim da Row-->
					</div>
				</section>

	</div> <!--Fim da div wraper-->		
<?php get_footer(); ?>
