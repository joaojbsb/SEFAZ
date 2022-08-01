<?php if( is_single() ) : ?>

        <article class="single-conteudo" id="post-<?php the_ID(  ); ?>" <?php post_class( ); ?>> 

            <div class=" text-justify">

                <div class="single-title">
                    <h3 class=""><?php the_title(); ?></h3>
                </div>
                <hr></hr>
                <div class="single-conteudo">
                    <?php the_post_thumbnail('post-thumbnail', array('class'=>'float-sm-left rounded mr-3')); ?>

                    <?php the_content( ); ?>

                </div>

            </div>
        
        </article>  
        <div class="clearfix"></div>
        <p class="border-bottom publicado">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>




    
<?php endif; ?>