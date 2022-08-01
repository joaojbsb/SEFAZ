<?php get_header(); ?>

<h1>Resultado da pesquisa</h1>
<div class="container mt-4 mb-4">

        <?php if(have_posts(  )): while(have_posts(  )): the_post(  ) ;

             get_template_part( 'template-parts/content', 'search' );

        ?>

        <?php endwhile; ?>

        <?php else:get_404_template(  ); endif ?>


</div>

</div> <!--Fim da div wraper-->	
<?php get_footer(); ?>