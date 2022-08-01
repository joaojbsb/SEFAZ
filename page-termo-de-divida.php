<?php get_header(); ?>


<?php

  require_once(dirname(__FILE__, 1) . '/src/config/database.php');
  Database::getConnection();

  $dataInicio = (2000-01-01);
  $dataFim = (2020-12-31);


$sql = ('SELECT DISTINCT
duam."DUAM"                 AS "duam_DUAM",
duam."MES_REF"              AS "duam_MES_REF",
duam."ANO_REF"              AS "duam_ANO_REF",
bci."CCI"                   AS "bci_CCI",
bci."QUADRA"                AS "bci_QUADRA",
bci."LOTE"                  AS "bci_LOTE",
bci."BLOCO"                 AS "bci_BLOCO",
bci."APTO"                  AS "bci_APTO",
bci."EDIFICIO"              AS "bci_EDIFICIO",
arq1144."DS_EDIFICIO"       AS "ARQ1144_DS_EDIFICIO",
bci."DISTRITO"              AS "bci_DISTRITO",
bci."AREA"                  AS "bci_AREA",
bci."QUADRA1"               AS "bci_QUADRA1",
bci."LOTE1"                 AS "bci_LOTE1",
bci."UNIDADE"               AS "bci_UNIDADE",
bci."COMPLEMENTO"           AS "bci_COMPLEMENTO",




tipoavis."DS_ABREVIADA"     AS "tipoavis_DS_ABREVIADA",
duam_it."AVISO"             AS "duam_it_AVISO",
duam_av."DATA_PGTO"         AS "duam_av_DATA_PGTO",
duam_it."VL_DIVIDA"         AS "duam_it_VL_DIVIDA",
duam."PGTO_PARC"            AS "duam_PGTO_PARC",
coalesce("item_av"."VL_PAGO",0)           AS "item_av_VL_PAGO",
"item_av"."AVISO"           AS "item_av_aviso",
duam."FLAG_PGTO"            AS "duam_FLAG_PGTO",
duam_it."PARCELA"           AS "duam_it_PARCELA",
duam_it."DATA_VENC"         AS "duam_it_DATA_VENC",
duam_it."VL_MULTA"          AS "duam_it_VL_MULTA",
duam_it."VL_JUROS"          AS "duam_it_VL_JUROS",
duam_it."VALOR"             AS "duam_it_VALOR",
contas."NR_BANCO"           AS "contas_NR_BANCO",
duam_it."VL_ATUALIZACAO"    AS "duam_it_VL_ATUALIZACAO",
duam_it."DUAM"              AS "duam_it_DUAM",
codbaixa."NOME"             AS "codbaixa_NOME",
pessoa."CCP"                AS "PESSOA_CCP",
duam."PARCELAS"             AS "duam_PARCELAS",
duam_it."VL_DESCONTO"       AS "duam_it_VL_DESCONTO",
duam_it."PROCESSO_DIV"      AS "duam_it_PROCESSO_DIV",
duam_it."DATA_DIV_ATI"      AS "duam_it_DATA_DIV_ATI",
duam."CCI"                  AS "duam_CCI",
duam_av."COD_BAIXA"         AS "duam_av_COD_BAIXA",
livro1."PROC_FORUM"         AS "LIVRO1_PROC_FORUM",
tipoavis."REPACTUACAO_S_N"  AS "tipoavis_REPACTUACAO_S_N",
tipoavis."CD_TIPOAVI"       AS "tipoavis_CD_TIPOAVI",
tipoavis."TAB_RECEITA"      AS "tipoavis_TAB_RECEITA",
pessoa."NOME"               AS "PESSOA_NOME",
pessoa."MOTIVO_BAIXA"       AS "PESSOA_MOTIVO_BAIXA",
pessoa."BAIXA_ATIV"         AS "PESSOA_BAIXA_ATIV",
pessoa."DATA_VENC_CAD"      AS "PESSOA_DATA_VENC_CAD",
pessoa."FANTASIA"           AS "PESSOA_FANTASIA",
pessoa."BAIRRO"             AS "PESSOA_BAIRRO",
bairro."NOME"               AS "bairro_NOME",
logra."CODIGO"              AS "LOGRA_CODIGO",
logra."NOME"                AS "LOGRA_NOME",
pessoa."COMPLEM"            AS "PESSOA_COMPLEM",
pessoa."NUMERO"             AS "PESSOA_NUMERO",
pessoa."LOTE"               AS "PESSOA_LOTE",
pessoa."CIDADE"             AS "PESSOA_CIDADE",
pessoa."UF"                 AS "PESSOA_UF",
pessoa."FONE"               AS "PESSOA_FONE",
pessoa."INSCRICAO"          AS "PESSOA_INSCRICAO",
pessoa."CGC"                AS "PESSOA_CGC",
duam."CCP"                  AS "duam_CCP",
bci."CCP"                   AS "bci_CCP",
setor."NOME"                AS "SETOR_NOME",
duam_it."DATA_VENC_ATU"     AS "duam_it_DATA_VENC_ATU",
pessoa."TP_PESSOA"          AS "PESSOA_TP_PESSOA",
logra_1."NOME"              AS "LOGRA_1_NOME",
duam."REC"                  AS "duam_REC",
pessoa."PESSOA_TXT"         AS "PESSOA_PESSOA_TXT",
coalesce(duam_re."VL_REPACABAT",0) as duam_re_vl_repacabat,
coalesce(duam_it."VL_CONVERTIDO",0) as duam_it_vl_convertido

FROM
"SCH"."DUAM" "duam"
INNER JOIN "SCH"."DUAM_IT" duam_it ON duam."DUAM"=duam_it."DUAM"
LEFT OUTER JOIN "SCH"."DUAM_RE" duam_re ON duam_it."DUAM" = duam_re."DUAM"
    AND duam_re."PARCELA" =  duam_it."PARCELA"
LEFT OUTER JOIN "SCH"."TIPOAVIS" tipoavis ON duam."REC"=tipoavis."CD_TIPOAVI"
LEFT OUTER JOIN "SCH"."PESSOA" pessoa ON duam."CCP"=pessoa."CCP"
LEFT OUTER JOIN "SCH"."BCI" bci ON duam."CCI"=bci."CCI"
LEFT OUTER JOIN "SCH"."BAIRRO" bairro ON pessoa."BAIRRO"=bairro."CODIGO"
LEFT OUTER JOIN "SCH"."LOGRA" LOGRA ON pessoa."LOGRA"=logra."CODIGO"
LEFT OUTER JOIN "SCH"."SETOR" setor ON bci."AREA"=setor."CODIGO"
LEFT OUTER JOIN "SCH"."LOGRA" logra_1 ON bci."LOGRA_1"=logra_1."CODIGO"
LEFT OUTER JOIN "SCH"."ARQ1144" arq1144 ON bci."EDIFICIO"=arq1144."CD_EDIFICIO"
LEFT OUTER JOIN "SCH"."DUAM_AV" duam_av ON duam_it."AVISO"=duam_av."AVISO"
LEFT OUTER JOIN "SCH"."ITEM_AV" item_av ON (duam_it."DUAM"="item_av"."DUAM") AND (duam_it."PARCELA"="item_av"."PARCELA")
LEFT OUTER JOIN "SCH"."LIVRO1" livro1 ON (duam_it."DUAM"=livro1."DUAM_IT") AND (duam_it."PARCELA"=livro1."PARCELA")
LEFT OUTER JOIN "SCH"."CODBAIXA" codbaixa ON duam_av."COD_BAIXA"=codbaixa."CODIGO"
LEFT OUTER JOIN "SCH"."CONTAS" contas ON duam_av."CONTA_BANCO"=contas."NR_CONTA"

where 1=1  and true AND pessoa."CCP" = 6118 AND 
(duam."RECNUM" ISNULL OR ( duam."FLAG_PG_TOTAL" = 0 AND  
(duam."PGTO_PARC"::text = 0::text AND duam_it."PARCELA" = 0 OR 
duam."PGTO_PARC"::text > 0::text AND duam_it."PARCELA" > 0) 
AND duam_it."AVISO" <= 0 ) ) 
AND (duam."RECNUM" ISNULL OR duam_it."DATA_VENC" between $dataInicio and $dataFim)
AND (duam."RECNUM" ISNULL OR duam."ANO_REF" between 1900 and 2021)

');

$result = Database::getResultFromQuery($sql);
echo 'resultado do array';
echo "<pre>";
var_dump($result);
echo "</pre>";


if(count($result) > 0){
	for ($i=0; $i < count($result) ; $i++) { 
		# code...
		foreach ($result[$i] as $key => $value) {
			# code...
			echo "dentro do foreach .</br>";
			echo "{$value}</br>" ;
		}
	}
}
?>
       		 <!-- Page Content  -->
				<section class="noticias mt-4 mb-4">
					<div class="container">

						<div class="row ">                        

							<div class="col-md-8 col-sm-12">
                                <table id="dtVerticalScrollExample" class="overflow-auto lotable table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Name
                                        </th>
                                            <th class="th-sm">Position
                                        </th>
                                            <th class="th-sm">Office
                                        </th>
                                            <th class="th-sm">Age
                                        </th>
                                            <th class="th-sm">Start date
                                        </th>
                                            <th class="th-sm">Salary
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>

                                    </tbody>
                                </table>

							</div>
						</div><!--Fim da Row-->
					</div>
				</section>

	</div> <!--Fim da div wraper-->	


<?php get_footer(); ?>

<!--where 1=1  and true AND pessoa."CCP" = 6118 AND (duam."RECNUM" ISNULL OR ( duam."FLAG_PG_TOTAL" = 0 AND  (duam."PGTO_PARC"::text = '0'::text AND duam_it."PARCELA" = 0 OR duam."PGTO_PARC"::text > '0'::text AND duam_it."PARCELA" > 0) AND duam_it."AVISO" <= 0 ) ) AND (duam."RECNUM" ISNULL OR duam_it."DATA_VENC" between '1900-01-01' and '2021-08-02' ) AND (duam."RECNUM" ISNULL OR duam."ANO_REF" between 1900 and 2021)-->
<!-- select 
	DUAM."DUAM",
	DUAM."VL_DIVIDA",
	DUAM."CCP",
	"SCH".fnc_atualiza_divida_duam(
    DUAM."DUAM",   now()::date,
    '0',
    10,
    12, true
    
 ) AS ATUALIZADO

from "SCH"."DUAM" DUAM

WHERE DUAM."CCP" = 6118 

"SCH".fnc_tem_divida_aberto_imovel_vencida(cci bigint)
-->
