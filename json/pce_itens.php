<?php
namespace PceItens;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;


class PceItens
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'PCE_EMPRESA'  => $registro['PCE_EMPRESA'],
                'PCE_ITEM'  => $registro['PCE_ITEM'],
                'NOME'  => $registro['NOME'],
                'DESCRICAO'  => $registro['DESCRICAO'],
                'PCE_GRUPO'  => $registro['PCE_GRUPO'],
                'SIM_UNIDADE'  => $registro['SIM_UNIDADE'],
                'SIM_EMBALAGEM'  => $registro['SIM_EMBALAGEM'],
                'ATIVO'  => $registro['ATIVO'],
                'SIM_CLAS_FISCAL'  => $registro['SIM_CLAS_FISCAL'],
                'CONDICAO_IPI'  => $registro['CONDICAO_IPI'],
                'CONDICAO_ICM'  => $registro['CONDICAO_ICM'],
                'CONDICAO_REDUCAO_ICM'  => $registro['CONDICAO_REDUCAO_ICM'],
                'DIAS_ESTOQUE_MINIMO'  => $registro['DIAS_ESTOQUE_MINIMO'],
                'DIAS_TEMPO_REPOSICAO'  => $registro['DIAS_TEMPO_REPOSICAO'],
                'CONSUMO_DIARIO'  => $registro['CONSUMO_DIARIO'],
                'CUSTO_REPOSICAO'  => $registro['CUSTO_REPOSICAO'],
                'PCE_CLASSE_QUANTIDADE_ESTOQUE'  => $registro['PCE_CLASSE_QUANTIDADE_ESTOQUE'],
                'PCE_CLASSE_QUANTIDADE_ENTRADA'  => $registro['PCE_CLASSE_QUANTIDADE_ENTRADA'],
                'PCE_CLASSE_QUANTIDADE_SAIDA'  => $registro['PCE_CLASSE_QUANTIDADE_SAIDA'],
                'PCE_CLASSE_VALOR_ESTOQUE'  => $registro['PCE_CLASSE_VALOR_ESTOQUE'],
                'PCE_CLASSE_VALOR_ENTRADA'  => $registro['PCE_CLASSE_VALOR_ENTRADA'],
                'PCE_CLASSE_VALOR_SAIDA'  => $registro['PCE_CLASSE_VALOR_SAIDA'],
                'PCE_ITEM_CENTRALIZADOR'  => $registro['PCE_ITEM_CENTRALIZADOR'],
                'SUBSTITUICAO_TRIBUTARIA'  => $registro['SUBSTITUICAO_TRIBUTARIA'],
                'TIPO_ITEM'  => $registro['TIPO_ITEM'],
                'PESO_LIQUIDO'  => $registro['PESO_LIQUIDO'],
                'PESO_BRUTO'  => $registro['PESO_BRUTO'],
                'DIAS_VALIDADE'  => $registro['DIAS_VALIDADE'],
                'CODIGO_FORMULA'  => $registro['CODIGO_FORMULA'],
                'FORMULA'  => $registro['FORMULA'],
                'PCC_MARCA'  => $registro['PCC_MARCA'],
                'FATOR_CONVERSAO_PCP'  => $registro['FATOR_CONVERSAO_PCP'],
                'PCE_SUB_GRUPO'  => $registro['PCE_SUB_GRUPO'],
                'DATA_ULTIMO_INVENTARIO'  => $registro['DATA_ULTIMO_INVENTARIO'],
                'INVENTARIA'  => $registro['INVENTARIA'],
                'SITUACAO_TRIBUTARIA'  => $registro['SITUACAO_TRIBUTARIA'],
                'PCE_OBSERVACAO'  => $registro['PCE_OBSERVACAO'],
                'PCE_SACARIA'  => $registro['PCE_SACARIA'],
                'SIM_MOEDA_REPOSICAO'  => $registro['SIM_MOEDA_REPOSICAO'],
                'QUANTIDADE_EMBALAGEM'  => $registro['QUANTIDADE_EMBALAGEM'],
                'INVENTARIO'  => $registro['INVENTARIO'],
                'VALOR_CLASSE_IPI'  => $registro['VALOR_CLASSE_IPI'],
                'REG_MIN_AGRICULTURA'  => $registro['REG_MIN_AGRICULTURA'],
                'PCE_DEPOSITO_RECEBIMENTO'  => $registro['PCE_DEPOSITO_RECEBIMENTO'],
                'VERIFICA_DISP_ABERTURA_OP'  => $registro['VERIFICA_DISP_ABERTURA_OP'],
                'VERIFICA_DISP_MP_OP'  => $registro['VERIFICA_DISP_MP_OP'],
                'PCE_FONTE_FORNECIMENTO'  => $registro['PCE_FONTE_FORNECIMENTO'],
                'PCE_FREQUENCIA'  => $registro['PCE_FREQUENCIA'],
                'ITEM_PRODUZIDO_TERCEIROS'  => $registro['ITEM_PRODUZIDO_TERCEIROS'],
                'CODIGO_ITEM_FORNECEDOR'  => $registro['CODIGO_ITEM_FORNECEDOR'],
                'INDICE_MARKUP'  => $registro['INDICE_MARKUP'],
                'PERC_PIS'  => $registro['PERC_PIS'],
                'PERC_FINSOCIAL'  => $registro['PERC_FINSOCIAL'],
                'COMBUSTIVEL_LUBRIFICANTE'  => $registro['COMBUSTIVEL_LUBRIFICANTE'],
                'PCE_GRUPO_DESCONTO'  => $registro['PCE_GRUPO_DESCONTO'],
                'PCE_CODIGO_FORMATADO'  => $registro['PCE_CODIGO_FORMATADO'],
                'PCE_CODIGO_ORIGINAL'  => $registro['PCE_CODIGO_ORIGINAL'],
                'PERC_IPI'  => $registro['PERC_IPI'],
                'PERC_REDUCAO_PIS'  => $registro['PERC_REDUCAO_PIS'],
                'PERC_REDUCAO_COFINS'  => $registro['PERC_REDUCAO_COFINS'],
                'COD_FABRICANTE'  => $registro['COD_FABRICANTE'],
                'COD_FORNECEDOR_GARANTIA'  => $registro['COD_FORNECEDOR_GARANTIA'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'CODIGO_ANP'  => $registro['CODIGO_ANP'],
                'ICMS_CST'  => $registro['ICMS_CST'],
                'ICMS_MODALIDADE_BC'  => $registro['ICMS_MODALIDADE_BC'],
                'ICMS_MODALIDADE_BC_ST'  => $registro['ICMS_MODALIDADE_BC_ST'],
                'IPI_CST'  => $registro['IPI_CST'],
                'PIS_CST'  => $registro['PIS_CST'],
                'COFINS_CST'  => $registro['COFINS_CST'],
                'NAO_GERA_ESTOQUE'  => $registro['NAO_GERA_ESTOQUE'],
                'PERC_REDUCAO_PIS_ENTRADA'  => $registro['PERC_REDUCAO_PIS_ENTRADA'],
                'PERC_REDUCAO_PIS_SAIDA'  => $registro['PERC_REDUCAO_PIS_SAIDA'],
                'PERC_REDUCAO_COFINS_ENTRADA'  => $registro['PERC_REDUCAO_COFINS_ENTRADA'],
                'PERC_REDUCAO_COFINS_SAIDA'  => $registro['PERC_REDUCAO_COFINS_SAIDA'],
                'CGF_CONTA_ESTOQUE'  => $registro['CGF_CONTA_ESTOQUE'],
                'CODIGO_ITEM_IN86'  => $registro['CODIGO_ITEM_IN86'],
                'PCE_ITEM_ID'  => $registro['PCE_ITEM_ID'],
                'EX_IPI'  => $registro['EX_IPI'],
                'CONTROLA_ECREDAC'  => $registro['CONTROLA_ECREDAC'],
                'DATA_INICIO_APUR_ECREDAC'  => $registro['DATA_INICIO_APUR_ECREDAC'],
                'COTEPE_TIPO_ITEM'  => $registro['COTEPE_TIPO_ITEM'],
                'CONTROLA_SERIE'  => $registro['CONTROLA_SERIE'],
                'TIPO_BASE_CALCULO_CRED'  => $registro['TIPO_BASE_CALCULO_CRED'],
                'TIPO_CREDITO'  => $registro['TIPO_CREDITO'],
                'NATUREZA_FRETE'  => $registro['NATUREZA_FRETE'],
                'LFE_TIPO_RECEITA'  => $registro['LFE_TIPO_RECEITA'],
                'TIPO_CONTRIBUICAO_SOCIAL'  => $registro['TIPO_CONTRIBUICAO_SOCIAL'],
                'TIPO'  => $registro['TIPO'],
                'CLAS_PIS_COFINS'  => $registro['CLAS_PIS_COFINS'],
                'NAO_VALIDADO'  => $registro['NAO_VALIDADO'],
                'DIAS_GARANTIA'  => $registro['DIAS_GARANTIA'],
                'FICHA_ECREDAC'  => $registro['FICHA_ECREDAC'],
                'PIS_CST_ENT'  => $registro['PIS_CST_ENT'],
                'COFINS_CST_ENT'  => $registro['COFINS_CST_ENT'],
                'DISPOSICAO_ESTOQUE'  => $registro['DISPOSICAO_ESTOQUE'],
                'SELO'  => $registro['SELO'],
                'QUANTIDADE_SELOS'  => $registro['QUANTIDADE_SELOS'],
                'SELO_ZF'  => $registro['SELO_ZF'],
                'SUBSTITUIDO_CANCELADO'  => $registro['SUBSTITUIDO_CANCELADO'],
                'ORIGEM_MERCADORIA'  => $registro['ORIGEM_MERCADORIA'],
                'SAC_USUARIO'  => $registro['SAC_USUARIO'],
                'USUARIO_CUSTO_REPOSICAO'  => $registro['USUARIO_CUSTO_REPOSICAO'],
                'DATA_CUSTO_REPOSICAO'  => $registro['DATA_CUSTO_REPOSICAO'],
                'PERC_CONTEUDO_IMPORTADO'  => $registro['PERC_CONTEUDO_IMPORTADO'],
                'GERA_FCI'  => $registro['GERA_FCI'],
                'IPI_CST_ENT'  => $registro['IPI_CST_ENT'],
                'ICMS_CST_ENT'  => $registro['ICMS_CST_ENT'],
                'NOME_ECREDAC'  => $registro['NOME_ECREDAC'],
                'LOTE_FABRICACAO_OBRIGATORIO'  => $registro['LOTE_FABRICACAO_OBRIGATORIO'],
                'CODIGO_ITEM_NFE'  => $registro['CODIGO_ITEM_NFE'],
                'SIM_MOEDA_CAMBIO'  => $registro['SIM_MOEDA_CAMBIO'],
                'DATA_CAMBIO'  => $registro['DATA_CAMBIO'],
                'CUSTO_REPOSICAO_OUTRA_MOEDA'  => $registro['CUSTO_REPOSICAO_OUTRA_MOEDA'],
                'NFE_CAMPO_ESPECIFICO'  => $registro['NFE_CAMPO_ESPECIFICO'],
                'CEST'  => $registro['CEST'],
                'ISENTO_PIS_COFINS'  => $registro['ISENTO_PIS_COFINS'],
                'PERC_DIVERG_RECEBIMENTO'  => $registro['PERC_DIVERG_RECEBIMENTO'],
                'CODIGO_PRODUTO_ANVISA'  => $registro['CODIGO_PRODUTO_ANVISA'],
                'PRECO_MAX_CONSUMIDOR_ANVISA'  => $registro['PRECO_MAX_CONSUMIDOR_ANVISA'],
                'INDICADOR_ESCALA_RELEVANTE'  => $registro['INDICADOR_ESCALA_RELEVANTE'],
                'CNPJ_FABRICANTE'  => $registro['CNPJ_FABRICANTE'],
                'NUMERO_SERIE'  => $registro['NUMERO_SERIE'],
                'DESCRICAO_ANP'  => $registro['DESCRICAO_ANP'],
                'DATA_ULT_DESATIVACAO'  => $registro['DATA_ULT_DESATIVACAO'],
                'MOTIVO_ISENCAO_ANVISA'  => $registro['MOTIVO_ISENCAO_ANVISA'],
                'SIM_UNIDADE_TRIBUTACAO'  => $registro['SIM_UNIDADE_TRIBUTACAO'],
                'SIM_UNIDADE_TRIBUTACAO_EXP_IMP'  => $registro['SIM_UNIDADE_TRIBUTACAO_EXP_IMP'],
                'MODO_APLICACAO_FER'  => $registro['MODO_APLICACAO_FER'],
                'SIGLA_ETIQUETA_FER'  => $registro['SIGLA_ETIQUETA_FER'],
                'FERTUP_DESCRICAO_FER'  => $registro['FERTUP_DESCRICAO_FER'],
                'NOME_COMPLETO_ETIQUETA_FER'  => $registro['NOME_COMPLETO_ETIQUETA_FER'],
            
            ]; 
        } 
        
        return $array;
    }

    public function getPceItens()
    {
        $con = Conexao::conection();
        $sql = "Select 
        CAST( 4 AS INT ) as 'PCE_EMPRESA'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'PCE_ITEM'   , 
        CAST( ANOME AS VARCHAR(60) ) as 'NOME'   , 
        CAST( ANOME AS VARCHAR(2000) ) as 'DESCRICAO'   , 
        CAST( 15 AS INT ) as 'PCE_GRUPO'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE'   , 
        CAST( 45 AS INT ) as 'SIM_EMBALAGEM'   , 
        CAST( 65 AS INT ) as 'ATIVO'   , 
        CAST( 4 AS DECIMAL(10) ) as 'SIM_CLAS_FISCAL'   , 
        CAST( 9 AS INT ) as 'CONDICAO_IPI'   , 
        CAST( 6 AS INT ) as 'CONDICAO_ICM'   , 
        CAST( 5 AS INT ) as 'CONDICAO_REDUCAO_ICM'   , 
        CAST( 4 AS INT ) as 'DIAS_ESTOQUE_MINIMO'   , 
        CAST( 1 AS INT ) as 'DIAS_TEMPO_REPOSICAO'   , 
        CAST( 3 AS DECIMAL(16,4) ) as 'CONSUMO_DIARIO'   , 
        CAST( 78 AS DECIMAL(16,4) ) as 'CUSTO_REPOSICAO'   , 
        CAST( 45 AS VARCHAR(1) ) as 'PCE_CLASSE_QUANTIDADE_ESTOQUE'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'PCE_CLASSE_QUANTIDADE_ENTRADA'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'PCE_CLASSE_QUANTIDADE_SAIDA'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'PCE_CLASSE_VALOR_ESTOQUE'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'PCE_CLASSE_VALOR_ENTRADA'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'PCE_CLASSE_VALOR_SAIDA'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'PCE_ITEM_CENTRALIZADOR'   , 
        CAST( 1 AS INT ) as 'SUBSTITUICAO_TRIBUTARIA'   , 
        CAST( 2 AS INT ) as 'TIPO_ITEM'   , 
        CAST( 65 AS DECIMAL(18,6) ) as 'PESO_LIQUIDO'   , 
        CAST( 48 AS DECIMAL(18,6) ) as 'PESO_BRUTO'   , 
        CAST( 48 AS INT ) as 'DIAS_VALIDADE'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'CODIGO_FORMULA'   , 
        CAST( ANOME AS VARCHAR(255) ) as 'FORMULA'   , 
        CAST( 9 AS INT ) as 'PCC_MARCA'   , 
        CAST( 45 AS DECIMAL(12,4) ) as 'FATOR_CONVERSAO_PCP'   , 
        CAST( 5 AS INT ) as 'PCE_SUB_GRUPO'   , 
        CAST( GETDATE() AS DATE ) as 'DATA_ULTIMO_INVENTARIO'   , 
        CAST( 15 AS INT ) as 'INVENTARIA'   , 
        CAST( 6 AS INT ) as 'SITUACAO_TRIBUTARIA'   , 
        CAST( 1 AS INT ) as 'PCE_OBSERVACAO'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'PCE_SACARIA'   , 
        CAST( 1 AS INT ) as 'SIM_MOEDA_REPOSICAO'   , 
        CAST( 74 AS DECIMAL(16,4) ) as 'QUANTIDADE_EMBALAGEM'   , 
        CAST( 4 AS INT ) as 'INVENTARIO'   , 
        CAST( 95 AS DECIMAL(20,4) ) as 'VALOR_CLASSE_IPI'   , 
        CAST( ANOME AS VARCHAR(50) ) as 'REG_MIN_AGRICULTURA'   , 
        CAST( 5 AS INT ) as 'PCE_DEPOSITO_RECEBIMENTO'   , 
        CAST( 9 AS INT ) as 'VERIFICA_DISP_ABERTURA_OP'   , 
        CAST( 8 AS INT ) as 'VERIFICA_DISP_MP_OP'   , 
        CAST( 7 AS INT ) as 'PCE_FONTE_FORNECIMENTO'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'PCE_FREQUENCIA'   , 
        CAST( 4 AS INT ) as 'ITEM_PRODUZIDO_TERCEIROS'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'CODIGO_ITEM_FORNECEDOR'   , 
        CAST( 65 AS DECIMAL(6,4) ) as 'INDICE_MARKUP'   , 
        CAST( 32 AS DECIMAL(8,4) ) as 'PERC_PIS'   , 
        CAST( 62 AS DECIMAL(8,4) ) as 'PERC_FINSOCIAL'   , 
        CAST( 1 AS INT ) as 'COMBUSTIVEL_LUBRIFICANTE'   , 
        CAST( ANOME AS VARCHAR(4) ) as 'PCE_GRUPO_DESCONTO'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'PCE_CODIGO_FORMATADO'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'PCE_CODIGO_ORIGINAL'   , 
        CAST( 65 AS DECIMAL(4,2) ) as 'PERC_IPI'   , 
        CAST( 4 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_PIS'   , 
        CAST( 14 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_COFINS'   , 
        CAST( 9 AS INT ) as 'COD_FABRICANTE'   , 
        CAST( ANOME AS VARCHAR(10) ) as 'COD_FORNECEDOR_GARANTIA'   , 
        CAST( GETDATE() AS DATE ) as 'CREATED'   , 
        CAST( GETDATE() AS DATE ) as 'UPDATED'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'CODIGO_ANP'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'ICMS_CST'   , 
        CAST( 4 AS INT ) as 'ICMS_MODALIDADE_BC'   , 
        CAST( 6 AS INT ) as 'ICMS_MODALIDADE_BC_ST'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'IPI_CST'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'PIS_CST'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'COFINS_CST'   , 
        CAST( 4 AS INT ) as 'NAO_GERA_ESTOQUE'   , 
        CAST( 32 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_PIS_ENTRADA'   , 
        CAST( 2 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_PIS_SAIDA'   , 
        CAST( 4 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_COFINS_ENTRADA'   , 
        CAST( 65 AS DECIMAL(8,4) ) as 'PERC_REDUCAO_COFINS_SAIDA'   , 
        CAST( ANOME AS VARCHAR(20) ) as 'CGF_CONTA_ESTOQUE'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'CODIGO_ITEM_IN86'   , 
        CAST( 84 AS DECIMAL(14) ) as 'PCE_ITEM_ID'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'EX_IPI'   , 
        CAST( 9 AS INT ) as 'CONTROLA_ECREDAC'   , 
        CAST( GETDATE() AS DATE ) as 'DATA_INICIO_APUR_ECREDAC'   , 
        CAST( 8 AS INT ) as 'COTEPE_TIPO_ITEM'   , 
        CAST( 9 AS INT ) as 'CONTROLA_SERIE'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'TIPO_BASE_CALCULO_CRED'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'TIPO_CREDITO'   , 
        CAST( 9 AS INT ) as 'NATUREZA_FRETE'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'LFE_TIPO_RECEITA'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'TIPO_CONTRIBUICAO_SOCIAL'   , 
        CAST( 6 AS INT ) as 'TIPO'   , 
        CAST( 4 AS INT ) as 'CLAS_PIS_COFINS'   , 
        CAST( 1 AS INT ) as 'NAO_VALIDADO'   , 
        CAST( 3 AS INT ) as 'DIAS_GARANTIA'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'FICHA_ECREDAC'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'PIS_CST_ENT'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'COFINS_CST_ENT'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'DISPOSICAO_ESTOQUE'   , 
        CAST( ANOME AS VARCHAR(6) ) as 'SELO'   , 
        CAST( 4 AS DECIMAL(12) ) as 'QUANTIDADE_SELOS'   , 
        CAST( 9 AS INT ) as 'SELO_ZF'   , 
        CAST( ANOME AS VARCHAR(1) ) as 'SUBSTITUIDO_CANCELADO'   , 
        CAST( 9 AS INT ) as 'ORIGEM_MERCADORIA'   , 
        CAST( ANOME AS VARCHAR(15) ) as 'SAC_USUARIO'   , 
        CAST( ANOME AS VARCHAR(15) ) as 'USUARIO_CUSTO_REPOSICAO'   , 
        CAST( GETDATE() AS DATE ) as 'DATA_CUSTO_REPOSICAO'   , 
        CAST( 12 AS DECIMAL(5,2) ) as 'PERC_CONTEUDO_IMPORTADO'   , 
        CAST( 4 AS INT ) as 'GERA_FCI'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'IPI_CST_ENT'   , 
        CAST( ANOME AS VARCHAR(2) ) as 'ICMS_CST_ENT'   , 
        CAST( ANOME AS VARCHAR(40) ) as 'NOME_ECREDAC'   , 
        CAST( 4 AS INT ) as 'LOTE_FABRICACAO_OBRIGATORIO'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'CODIGO_ITEM_NFE'   , 
        CAST( 9 AS INT ) as 'SIM_MOEDA_CAMBIO'   , 
        CAST( GETDATE() AS DATE ) as 'DATA_CAMBIO'   , 
        CAST( 65 AS DECIMAL(16,4) ) as 'CUSTO_REPOSICAO_OUTRA_MOEDA'   , 
        CAST( ANOME AS VARCHAR(255) ) as 'NFE_CAMPO_ESPECIFICO'   , 
        CAST( 8 AS INT ) as 'CEST'   , 
        CAST( 7 AS INT ) as 'ISENTO_PIS_COFINS'   , 
        CAST( 84 AS DECIMAL(4,2) ) as 'PERC_DIVERG_RECEBIMENTO'   , 
        CAST( ANOME AS VARCHAR(13) ) as 'CODIGO_PRODUTO_ANVISA'   , 
        CAST( 89 AS DECIMAL(16,2) ) as 'PRECO_MAX_CONSUMIDOR_ANVISA'   , 
        CAST( ANOME AS CHAR(1) ) as 'INDICADOR_ESCALA_RELEVANTE'   , 
        CAST( 8 AS DECIMAL(14) ) as 'CNPJ_FABRICANTE'   , 
        CAST( 4 AS INT ) as 'NUMERO_SERIE'   , 
        CAST( ANOME AS VARCHAR(95) ) as 'DESCRICAO_ANP'   , 
        CAST( GETDATE() AS DATE ) as 'DATA_ULT_DESATIVACAO'   , 
        CAST( ANOME AS VARCHAR(255) ) as 'MOTIVO_ISENCAO_ANVISA'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE_TRIBUTACAO'   , 
        CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE_TRIBUTACAO_EXP_IMP'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'MODO_APLICACAO_FER'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'SIGLA_ETIQUETA_FER'   , 
        CAST( ANOME AS VARCHAR(30) ) as 'FERTUP_DESCRICAO_FER'   , 
        CAST( ANOME AS VARCHAR(100) ) as 'NOME_COMPLETO_ETIQUETA_FER'   
       
       FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
       
        ";
        $query = sqlsrv_query($con, $sql);

        $array = PceItens::getArray($query);

        $json = json_encode(['Pce_Itens' => $array]);	
        
        echo $json;
    }

    public function findPceItens($parametro)
    {
        $con = Conexao::conection();
        $sql = "AQUI VAI UM SELECT COM WHERE";
        $query = sqlsrv_query($con, $sql);

        $array = PceItens::getArray($query);

        $json = json_encode(['Pce_Itens' => $array]);	
        
        echo $json;
    }
}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];
    PceItens::findPceItens($parametro);

}else{
    PceItens::getPceItens();
}












?>