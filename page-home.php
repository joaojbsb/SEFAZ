<?php get_header(); ?>

    <!-- Page Content  -->

    <div class="container container-img">

      <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Imagem da barragem de Águas Lindas" />

    </div>   <!--Fim do Container-->

    <div class="text-portal">
      <h1 class= "text-center ">Portal do Contribuinte</h1>

    </div>

    <?php get_template_part( 'template-parts/acesso-rapido' ); ?>

  </div> <!--Fim da div wraper-->

    <?php get_footer(); ?>


      <!-- Modal

  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h2 class="text-center modal-title w-100" id="Modal">ATENÇÃO</h2>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <p class="text-center modal-text">
            A Secretaria Municipal de Fazenda e Planejamento de Águas Lindas de Goiás informa
            aos senhores contribuintes sobre o Programa de Recuperação Fiscal - REFIS, que concede 
            benefícios para créditos tributários, que estejam ou não constituídos e inscritos em dívida ativa,
            cujos fatos geradores tenham ocorridos até 31 de Dezembro de 2019, e se encontrem em fase de cobrança 
            administrativa ou judicial.
        </p>

        <p class="text-center modal-text">
            Comunica ainda que os benefícios e incentivos fiscais estabelecidos pela Lei Municipal n° 1.424/2020
            regulamentada pelo Decreto Municipal n° 2.101/2020, com aplicação de percentuais redutores de até 100%
            (cem por cento) sobre multas e juros, possuem a data limite para efetivação até 31 de Dezembro de 2020.
        </p>
      </div>

    </div>
  </div>
</div>  -->

  <!-- script para carregar o modal na tela inicial -->
  <script>
    $(document).ready(function(){

        $('#Modal').modal('show')

    });    

  </script>