<?php
/* 
Template Name: General Template
*/

?>


<?php get_header(); ?>

<section class="container section-general">
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
                        <div class="card-body text-center">
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
