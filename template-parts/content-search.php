<div class="row">

    <div class="col-md-12 col-sm-12">
        <div class="search-conteudo" > 

            <div class=" text-justify">

                <div class="card-body">
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="card-text"><?php the_excerpt( ); ?></p>

                </div>

            </div>

            <p class="text-muted border-bottom">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span> Categories: <?php the_category( ' ' );?></p>

        </div>  
    </div> 

</div>





