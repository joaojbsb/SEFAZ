	<!--Sessão Acesso Rápido-->



	<section class="container acesso-rapido my-5 ">

      	<div class="row justify-content-center">
		  	<div class="col-md-5 col-sm-6 border-dark text-center fundo-acesso-rapido">
				<?php 
					$icone1 = get_theme_mod('set_rapido_icone18' );
				?>
				<a href="<?php echo get_theme_mod('set_rapido_link18'); ?>"> <?php echo wp_get_attachment_image( $icone1, 'full' );?> <br><?php echo get_theme_mod('set_rapido_nome18'); ?></a> 
			</div> 

			<div class="col-md-5 col-sm-6 border-dark text-center fundo-acesso-rapido">
				<?php
					$icone2 = get_theme_mod('set_rapido_icone19' );
				?>

				<a href="<?php echo get_theme_mod('set_rapido_link19'); ?>"> <?php echo wp_get_attachment_image( $icone2, 'full' );?> <br><?php echo get_theme_mod('set_rapido_nome19'); ?></a> 

			</div>  

        </div>

    </div>       