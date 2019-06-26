<?php
namespace FatSolicitacoesItens;


require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class FatSolicitacoesItens
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'FAT_EMPRESA'  => $registro['FAT_EMPRESA'],
                'FAT_LOCAL'  => $registro['FAT_LOCAL'],
                'SIM_ORIGEM'  => $registro['SIM_ORIGEM'],
                'FAT_SOLICITACAO'  => $registro['FAT_SOLICITACAO'],
                'FAT_SOLICITACAO_SEQUENCIA'  => $registro['FAT_SOLICITACAO_SEQUENCIA'],
                'FAT_SOLICITACAO_ITEM_SEQUENCIA'  => $registro['FAT_SOLICITACAO_ITEM_SEQUENCIA'],
                'FAT_CLAS_FISCAL'  => $registro['FAT_CLAS_FISCAL'],
                'FAT_SERVICO'  => $registro['FAT_SERVICO'],
                'PCE_ITEM'  => $registro['PCE_ITEM'],
                'PCE_DEPOSITO'  => $registro['PCE_DEPOSITO'],
                'SIM_OPERACAO'  => $registro['SIM_OPERACAO'],
                'SIM_DOCUMENTO_ITEM'  => $registro['SIM_DOCUMENTO_ITEM'],
                'SIM_UNIDADE'  => $registro['SIM_UNIDADE'],
                'SIM_CFOP'  => $registro['SIM_CFOP'],
                'CGF_CENTRO_CUSTO'  => $registro['CGF_CENTRO_CUSTO'],
                'TIPO_REGISTRO'  => $registro['TIPO_REGISTRO'],
                'NOME_ITEM_OUT'  => $registro['NOME_ITEM_OUT'],
                'TEXTO_ITEM_NF_01'  => $registro['TEXTO_ITEM_NF_01'],
                'TEXTO_ITEM_NF_02'  => $registro['TEXTO_ITEM_NF_02'],
                'BONIFICACAO'  => $registro['BONIFICACAO'],
                'SITUACAO_TRIBUTARIA'  => $registro['SITUACAO_TRIBUTARIA'],
                'PEDIDO_ORIGINAL_ITEM_SEQ'  => $registro['PEDIDO_ORIGINAL_ITEM_SEQ'],
                'NF_ORIGINAL_SEQUENCIA'  => $registro['NF_ORIGINAL_SEQUENCIA'],
                'PESO_LIQUIDO'  => $registro['PESO_LIQUIDO'],
                'PESO_BRUTO'  => $registro['PESO_BRUTO'],
                'QUANTIDADE'  => $registro['QUANTIDADE'],
                'PERC_DESCONTO_1'  => $registro['PERC_DESCONTO_1'],
                'PERC_DESCONTO_2'  => $registro['PERC_DESCONTO_2'],
                'PERC_ENCARGOS_FINANCEIROS'  => $registro['PERC_ENCARGOS_FINANCEIROS'],
                'PRECO_UNITARIO'  => $registro['PRECO_UNITARIO'],
                'PRECO_TOTAL'  => $registro['PRECO_TOTAL'],
                'VALOR_ENCARGOS_FINANCEIROS'  => $registro['VALOR_ENCARGOS_FINANCEIROS'],
                'VALOR_PROMOCAO'  => $registro['VALOR_PROMOCAO'],
                'VALOR_DESCONTO_SUFRAMA'  => $registro['VALOR_DESCONTO_SUFRAMA'],
                'RATEIO_FRETE'  => $registro['RATEIO_FRETE'],
                'RATEIO_SEGURO'  => $registro['RATEIO_SEGURO'],
                'RATEIO_OUT_DESPESAS'  => $registro['RATEIO_OUT_DESPESAS'],
                'RATEIO_ENCARGOS_FINANCEIROS'  => $registro['RATEIO_ENCARGOS_FINANCEIROS'],
                'RATEIO_DESCONTO'  => $registro['RATEIO_DESCONTO'],
                'BASE_ICMS'  => $registro['BASE_ICMS'],
                'PERC_ICMS'  => $registro['PERC_ICMS'],
                'VALOR_ICMS'  => $registro['VALOR_ICMS'],
                'BASE_IPI'  => $registro['BASE_IPI'],
                'PERC_IPI'  => $registro['PERC_IPI'],
                'VALOR_IPI'  => $registro['VALOR_IPI'],
                'BASE_ISS'  => $registro['BASE_ISS'],
                'PERC_ISS'  => $registro['PERC_ISS'],
                'VALOR_ISS'  => $registro['VALOR_ISS'],
                'PCE_LOTE_FABRICACAO'  => $registro['PCE_LOTE_FABRICACAO'],
                'PCE_NUMERO_SERIE'  => $registro['PCE_NUMERO_SERIE'],
                'DAT_VEN_LOTE'  => $registro['DAT_VEN_LOTE'],
                'MAT_PRIMA_APLICADA'  => $registro['MAT_PRIMA_APLICADA'],
                'PEDIDO_ORIGINAL'  => $registro['PEDIDO_ORIGINAL'],
                'PEDIDO_SEQ_ORIGINAL'  => $registro['PEDIDO_SEQ_ORIGINAL'],
                'CALCULA_RATEIO'  => $registro['CALCULA_RATEIO'],
                'SIM_DOCUMENTO_ID'  => $registro['SIM_DOCUMENTO_ID'],
                'FAT_LANCAMENTO_CONTABIL_ID'  => $registro['FAT_LANCAMENTO_CONTABIL_ID'],
                'BASE_DESC_REDUCAO_ICMS'  => $registro['BASE_DESC_REDUCAO_ICMS'],
                'VALOR_DESCONTO'  => $registro['VALOR_DESCONTO'],
                'SAC_USUARIO_CORRECAO'  => $registro['SAC_USUARIO_CORRECAO'],
                'PERC_DESCONTO_PROMOCIONAL'  => $registro['PERC_DESCONTO_PROMOCIONAL'],
                'SIM_SEGMENTO'  => $registro['SIM_SEGMENTO'],
                'VALOR_IPI_DEVOLUCAO'  => $registro['VALOR_IPI_DEVOLUCAO'],
                'SIM_UNIDADE_VENDA'  => $registro['SIM_UNIDADE_VENDA'],
                'QUANTIDADE_VENDA'  => $registro['QUANTIDADE_VENDA'],
                'PRECO_UNITARIO_LIQUIDO'  => $registro['PRECO_UNITARIO_LIQUIDO'],
                'BASE_IMPORTACAO'  => $registro['BASE_IMPORTACAO'],
                'VALOR_IMPORTACAO'  => $registro['VALOR_IMPORTACAO'],
                'PERC_IMPORTACAO'  => $registro['PERC_IMPORTACAO'],
                'CUSTO_FRETE_UNITARIO'  => $registro['CUSTO_FRETE_UNITARIO'],
                'PCV_TIPO_TAB_PRECO'  => $registro['PCV_TIPO_TAB_PRECO'],
                'NOME_ITEM_MOB'  => $registro['NOME_ITEM_MOB'],
                'VALOR_IMPORTACAO_UNITARIO'  => $registro['VALOR_IMPORTACAO_UNITARIO'],
                'DESCRICAO_ITEM'  => $registro['DESCRICAO_ITEM'],
                'CTO_LOCAL'  => $registro['CTO_LOCAL'],
                'CTO_CONTRATO'  => $registro['CTO_CONTRATO'],
                'BASE_ICMS_SUBST_TRIBUTARIA'  => $registro['BASE_ICMS_SUBST_TRIBUTARIA'],
                'ICMS_SUBST_TRIBUTARIA'  => $registro['ICMS_SUBST_TRIBUTARIA'],
                'NF_ORIGINAL'  => $registro['NF_ORIGINAL'],
                'TALONARIO_ORIGINAL'  => $registro['TALONARIO_ORIGINAL'],
                'QUANTIDADE_VENDA_BASE'  => $registro['QUANTIDADE_VENDA_BASE'],
                'PCE_ITEM_BASE'  => $registro['PCE_ITEM_BASE'],
                'BASE_PIS'  => $registro['BASE_PIS'],
                'PERC_PIS'  => $registro['PERC_PIS'],
                'VALOR_PIS'  => $registro['VALOR_PIS'],
                'BASE_COFINS'  => $registro['BASE_COFINS'],
                'VALOR_COFINS'  => $registro['VALOR_COFINS'],
                'PERC_COFINS'  => $registro['PERC_COFINS'],
                'ISS_PAGO_CLIENTE'  => $registro['ISS_PAGO_CLIENTE'],
                'PENDENTE'  => $registro['PENDENTE'],
                'VALOR_JUROS'  => $registro['VALOR_JUROS'],
                'ITEM_ALTERNATIVO'  => $registro['ITEM_ALTERNATIVO'],
                'BASE_PIS_RETIDO'  => $registro['BASE_PIS_RETIDO'],
                'PERC_PIS_RETIDO'  => $registro['PERC_PIS_RETIDO'],
                'VALOR_PIS_RETIDO'  => $registro['VALOR_PIS_RETIDO'],
                'BASE_COFINS_RETIDO'  => $registro['BASE_COFINS_RETIDO'],
                'PERC_COFINS_RETIDO'  => $registro['PERC_COFINS_RETIDO'],
                'VALOR_COFINS_RETIDO'  => $registro['VALOR_COFINS_RETIDO'],
                'BASE_CSLL_RETIDO'  => $registro['BASE_CSLL_RETIDO'],
                'PERC_CSLL_RETIDO'  => $registro['PERC_CSLL_RETIDO'],
                'VALOR_CSLL_RETIDO'  => $registro['VALOR_CSLL_RETIDO'],
                'DATA_EMISSAO_NF_ORIGINAL'  => $registro['DATA_EMISSAO_NF_ORIGINAL'],
                'PCP_NUMERO_OP'  => $registro['PCP_NUMERO_OP'],
                'PCP_SEQ_OP'  => $registro['PCP_SEQ_OP'],
                'PCP_SEQ_PLANO'  => $registro['PCP_SEQ_PLANO'],
                'PCP_MAQUINA'  => $registro['PCP_MAQUINA'],
                'PCP_PROCESSO'  => $registro['PCP_PROCESSO'],
                'TEXTO_ITEM_NF_03'  => $registro['TEXTO_ITEM_NF_03'],
                'TEXTO_ITEM_NF_04'  => $registro['TEXTO_ITEM_NF_04'],
                'TEXTO_ITEM_NF_05'  => $registro['TEXTO_ITEM_NF_05'],
                'PRECO_UNITARIO_CDCI'  => $registro['PRECO_UNITARIO_CDCI'],
                'VALOR_JUROS_CDCI'  => $registro['VALOR_JUROS_CDCI'],
                'ICMS_DIGITADO'  => $registro['ICMS_DIGITADO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'IPI_DIGITADO'  => $registro['IPI_DIGITADO'],
                'ICMS_SUBSTITUICAO_DIGITADO'  => $registro['ICMS_SUBSTITUICAO_DIGITADO'],
                'FAT_LANCAMENTO_CONTAB_ID_CUSTO'  => $registro['FAT_LANCAMENTO_CONTAB_ID_CUSTO'],
                'VALOR_FUNRURAL'  => $registro['VALOR_FUNRURAL'],
                'VALOR_FACS'  => $registro['VALOR_FACS'],
                'VALOR_FETHAB'  => $registro['VALOR_FETHAB'],
                'OFC_TIPO_REPARO'  => $registro['OFC_TIPO_REPARO'],
                'VALOR_ICMS_SUBST_TRIB_COMPL'  => $registro['VALOR_ICMS_SUBST_TRIB_COMPL'],
                'BASE_ICMS_SUBST_TRIB_COMPL'  => $registro['BASE_ICMS_SUBST_TRIB_COMPL'],
                'CUSTO_ICMS_SUBST_TRIB'  => $registro['CUSTO_ICMS_SUBST_TRIB'],
                'VALOR_FUNDERSUL'  => $registro['VALOR_FUNDERSUL'],
                'VALOR_ROYALTIES'  => $registro['VALOR_ROYALTIES'],
                'VALOR_ETIQUETA'  => $registro['VALOR_ETIQUETA'],
                'SIM_SERVICO'  => $registro['SIM_SERVICO'],
                'PERC_ICMS_SUBST_TRIBUTARIA'  => $registro['PERC_ICMS_SUBST_TRIBUTARIA'],
                'IMPOSTO_IMPORTACAO_INFORMADO'  => $registro['IMPOSTO_IMPORTACAO_INFORMADO'],
                'RATEIO_FRETE_INFORMADO'  => $registro['RATEIO_FRETE_INFORMADO'],
                'VALOR_ICMS_INFORMADO'  => $registro['VALOR_ICMS_INFORMADO'],
                'VALOR_DESCONTO_ICMS'  => $registro['VALOR_DESCONTO_ICMS'],
                'BASE_ICMS_INFORMADO'  => $registro['BASE_ICMS_INFORMADO'],
                'VALOR_IPI_INFORMADO'  => $registro['VALOR_IPI_INFORMADO'],
                'PRECO_TOTAL_INFORMADO'  => $registro['PRECO_TOTAL_INFORMADO'],
                'NUMERO_DI'  => $registro['NUMERO_DI'],
                'DATA_REGISTRO'  => $registro['DATA_REGISTRO'],
                'DATA_DESEMBARACO'  => $registro['DATA_DESEMBARACO'],
                'LOCAL_DESEMBARACO'  => $registro['LOCAL_DESEMBARACO'],
                'UF_DESEMBARACO'  => $registro['UF_DESEMBARACO'],
                'CODIGO_EXPORTADOR'  => $registro['CODIGO_EXPORTADOR'],
                'ADICAO'  => $registro['ADICAO'],
                'NUMERO_ITEM'  => $registro['NUMERO_ITEM'],
                'CODIGO_FABRICANTE'  => $registro['CODIGO_FABRICANTE'],
                'VEI_VEICULO_ID'  => $registro['VEI_VEICULO_ID'],
                'NUMERO_SERIE'  => $registro['NUMERO_SERIE'],
                'DATA_VALIDADE'  => $registro['DATA_VALIDADE'],
                'SEU_PEDIDO'  => $registro['SEU_PEDIDO'],
                'SEU_PEDIDO_ITEM'  => $registro['SEU_PEDIDO_ITEM'],
                'TIPO_INTERMEDIO_IMPORTACAO'  => $registro['TIPO_INTERMEDIO_IMPORTACAO'],
                'CNPJ_ADQUIRENTE_IMPORTACAO'  => $registro['CNPJ_ADQUIRENTE_IMPORTACAO'],
                'UF_TERCEIRO_IMPORTACAO'  => $registro['UF_TERCEIRO_IMPORTACAO'],
                'VALOR_AFRMM'  => $registro['VALOR_AFRMM'],
                'NUMERO_DRAWBACK'  => $registro['NUMERO_DRAWBACK'],
                'NUMERO_REGISTRO_EXPORTACAO'  => $registro['NUMERO_REGISTRO_EXPORTACAO'],
                'CHNFE_RECEBIDA_EXPORTACAO'  => $registro['CHNFE_RECEBIDA_EXPORTACAO'],
                'QUANTIDADE_EXPORTACAO'  => $registro['QUANTIDADE_EXPORTACAO'],
                'PERC_ICMS_INFORMADO'  => $registro['PERC_ICMS_INFORMADO'],
                'VALOR_VAR_CAMBIAL'  => $registro['VALOR_VAR_CAMBIAL'],
                'VEI_VEICULO_IMPORTACAO_ID'  => $registro['VEI_VEICULO_IMPORTACAO_ID'],
                'BASE_IPI_DEVOLUCAO'  => $registro['BASE_IPI_DEVOLUCAO'],
                'SIM_UNIDADE_TRIBUTACAO'  => $registro['SIM_UNIDADE_TRIBUTACAO'],
                'QUANTIDADE_TRIBUTACAO'  => $registro['QUANTIDADE_TRIBUTACAO'],
                'PCE_SERIE_ID'  => $registro['PCE_SERIE_ID'],
                'PCE_SERIE_HISTORICO_ID'  => $registro['PCE_SERIE_HISTORICO_ID'],
                'ORIGEM_CALCULO_ICMS'  => $registro['ORIGEM_CALCULO_ICMS'],
                'ORIGEM_CALCULO_ICMS_ST'  => $registro['ORIGEM_CALCULO_ICMS_ST'],
                'ORIGEM_CALCULO_IPI'  => $registro['ORIGEM_CALCULO_IPI'],
                'TEXTO_COMPLEMENTAR_NF'  => $registro['TEXTO_COMPLEMENTAR_NF'],
                'BASE_FECOP_ST_INFORMADO'  => $registro['BASE_FECOP_ST_INFORMADO'],
                'VALOR_FECOP_ST_INFORMADO'  => $registro['VALOR_FECOP_ST_INFORMADO'],
            
            ];
            
        }

        return $array;
    }

    public function getFatSolicitacoesItens($parametro)
    {
        //Pega a conexao passando o banco em parametro
        $con = Conexao::conection('vendas');

        //Executa a Procedure
        $sql = "PROCEDURE $parametro";

        //Cria a query que salva no banco
        $query = sqlsrv_query($con, $sql);

        //Pega o Array criado
        $array = FatSolicitacoesItens::getArray($query);    
    
        //Salva um json do array na variavel
        $json = json_encode(['Entidades' => $array]);

        //Mostra na tela
        echo $json;  
        
        //Chama a função de log
        FatSolicitacoesItens::logAcesso();
    }

    public function logAcesso()
    {
        //Pega o cnpj passado por parametro
        $getCnpj = $_GET['PARAMETRO'];

        //Pega o ip que acessou pelo navegador ou app
        $ipAcessado = $_SERVER['HTTP_HOST'];

        //Pega o ip da pessoa acessada
        $ipClient = $_SERVER['REMOTE_ADDR'];

        //Chama a conexao passando o banco
        $con = Conexao::conection('cpd');

        //Monta o sql para inserir os dados
        $sql = "INSERT INTO dbo.MSV_WebService_Consumido (WebService,Solicitacao,DT_CHAMADA, URL_SOURCE) 
                VALUES ('entidades', '$getCnpj',getdate(), 'ip acessado = $ipAcessado , ip do cliente = $ipClient' ) ";

        //Executa a query
        $query = sqlsrv_query($con, $sql);

    }
}


if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];
    
    FatSolicitacoesItens::getFatSolicitacoesItens($parametro);

}else{
    echo "Erro, parametro não encontrado!";
}


?>