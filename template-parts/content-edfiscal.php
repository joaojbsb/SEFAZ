<?php if( is_single() ) : ?>

<article class="single-conteudo" id="post-<?php the_ID(  ); ?>" <?php post_class( ); ?>> 

    <div class=" text-justify">

        <?php the_post_thumbnail('post-thumbnail', array('class' =>'card-img-top img-fluid')); ?>

        <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?></h3>
            <p class="card-text"><?php the_content( ); ?></p>

        </div>

    </div>

    <p class="text-muted border-bottom">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>

</article>  
</div>




<?php endif; ?>