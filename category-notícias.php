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

									<h5 class="mb-3 pb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

									<div class="row">
										<div class="col-md-12 col-lg-12 mb-3">
                                            <?php the_post_thumbnail('post-thumbnail', array('class'=>'float-sm-right rounded mr-3')); ?>
											<?php the_content( ); ?>
										</div>
									</div>
                        			<p class="text-muted border-bottom">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>
									

								</article>
								<div class="clearfix"></div>

								<?php
										endwhile;
									else:
								?>
								<p>There is nothing yet to be displayed...</p>

								<?php endif; ?>

							</div>

							<?php get_sidebar('blog'); ?>
							
						</div><!--Fim da Row-->
					</div>
				</section>
				
<?php get_footer(); ?>