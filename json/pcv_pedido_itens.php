<?php
namespace PcvPedidoItens;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class PcvPedidoItens
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'PCV_EMPRESA'  => $registro['PCV_EMPRESA'],
                'SIM_LOCAL'  => $registro['SIM_LOCAL'],
                'SIM_ORIGEM'  => $registro['SIM_ORIGEM'],
                'PCV_PEDIDO'  => $registro['PCV_PEDIDO'],
                'PCV_PEDIDO_ITEM_SEQUENCIA'  => $registro['PCV_PEDIDO_ITEM_SEQUENCIA'],
                'PCE_ITEM'  => $registro['PCE_ITEM'],
                'PCE_DEPOSITO'  => $registro['PCE_DEPOSITO'],
                'SIM_OPERACAO'  => $registro['SIM_OPERACAO'],
                'DATA_PREVISTA_ENTREGA'  => $registro['DATA_PREVISTA_ENTREGA'],
                'DATA_RESERVA_ESTOQUE'  => $registro['DATA_RESERVA_ESTOQUE'],
                'PERC_DESCONTO_1'  => $registro['PERC_DESCONTO_1'],
                'PERC_DESCONTO_2'  => $registro['PERC_DESCONTO_2'],
                'PRECO_UNITARIO'  => $registro['PRECO_UNITARIO'],
                'QUANTIDADE_PEDIDA'  => $registro['QUANTIDADE_PEDIDA'],
                'QUANTIDADE_INDICADA'  => $registro['QUANTIDADE_INDICADA'],
                'TEXTO_NOTA_FISCAL_01'  => $registro['TEXTO_NOTA_FISCAL_01'],
                'TEXTO_NOTA_FISCAL_02'  => $registro['TEXTO_NOTA_FISCAL_02'],
                'PERC_DESCONTO_PROMOCIONAL'  => $registro['PERC_DESCONTO_PROMOCIONAL'],
                'PRECO_UNITARIO_BASE'  => $registro['PRECO_UNITARIO_BASE'],
                'PRECO_UNITARIO_INFORMADO'  => $registro['PRECO_UNITARIO_INFORMADO'],
                'QUANTIDADE_ORIGINAL'  => $registro['QUANTIDADE_ORIGINAL'],
                'SIM_SEGMENTO'  => $registro['SIM_SEGMENTO'],
                'PRECO_UNITARIO_LIQUIDO'  => $registro['PRECO_UNITARIO_LIQUIDO'],
                'PRECO_TOTAL_LIQUIDO'  => $registro['PRECO_TOTAL_LIQUIDO'],
                'NOME_ITEM_OUT'  => $registro['NOME_ITEM_OUT'],
                'DESCRICAO_ITEM'  => $registro['DESCRICAO_ITEM'],
                'SIM_UNIDADE_VENDA'  => $registro['SIM_UNIDADE_VENDA'],
                'QUANTIDADE_VENDA'  => $registro['QUANTIDADE_VENDA'],
                'SIM_UNIDADE'  => $registro['SIM_UNIDADE'],
                'PERC_IPI'  => $registro['PERC_IPI'],
                'CUSTO_FRETE_UNITARIO'  => $registro['CUSTO_FRETE_UNITARIO'],
                'PCV_TIPO_TAB_PRECO'  => $registro['PCV_TIPO_TAB_PRECO'],
                'VALOR_IPI'  => $registro['VALOR_IPI'],
                'REPROGRAMACAO_ENTREGA'  => $registro['REPROGRAMACAO_ENTREGA'],
                'PCV_SEQUENCIA_ORIGINAL'  => $registro['PCV_SEQUENCIA_ORIGINAL'],
                'PROMOCAO'  => $registro['PROMOCAO'],
                'PRECO_MINIMO'  => $registro['PRECO_MINIMO'],
                'CGF_CENTRO_CUSTO'  => $registro['CGF_CENTRO_CUSTO'],
                'DIAS_PREVISTOS_ENTREGA'  => $registro['DIAS_PREVISTOS_ENTREGA'],
                'SIM_MOEDA'  => $registro['SIM_MOEDA'],
                'PRECO_UNITARIO_MOEDA'  => $registro['PRECO_UNITARIO_MOEDA'],
                'PRECO_UNITARIO_BASE_MOEDA'  => $registro['PRECO_UNITARIO_BASE_MOEDA'],
                'CTO_LOCAL'  => $registro['CTO_LOCAL'],
                'CTO_CONTRATO'  => $registro['CTO_CONTRATO'],
                'QUANTIDADE_FATURADA'  => $registro['QUANTIDADE_FATURADA'],
                'PENDENTE'  => $registro['PENDENTE'],
                'PCV_STATUS'  => $registro['PCV_STATUS'],
                'PREVISAO_ENTREGA_COMERCIAL'  => $registro['PREVISAO_ENTREGA_COMERCIAL'],
                'OBS_DESCONTO_1'  => $registro['OBS_DESCONTO_1'],
                'OBS_DESCONTO_2'  => $registro['OBS_DESCONTO_2'],
                'NIT_OBSERVACAO_TINTURARIA'  => $registro['NIT_OBSERVACAO_TINTURARIA'],
                'ITEM_BLOQUEADO'  => $registro['ITEM_BLOQUEADO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'PCV_PEDIDO_ITEM_ID'  => $registro['PCV_PEDIDO_ITEM_ID'],
                'VALOR_ICMS_SUBSTITUICAO'  => $registro['VALOR_ICMS_SUBSTITUICAO'],
                'NUMERO_SERIE'  => $registro['NUMERO_SERIE'],
                'SEU_PEDIDO'  => $registro['SEU_PEDIDO'],
                'SEU_PEDIDO_ITEM'  => $registro['SEU_PEDIDO_ITEM'],
                'VEI_VEICULO_IMPORTACAO_ID'  => $registro['VEI_VEICULO_IMPORTACAO_ID'],
                'QTD_CANCELADA_ITEM'  => $registro['QTD_CANCELADA_ITEM'],
                'PCE_SERIE_ID'  => $registro['PCE_SERIE_ID'],
                'PCE_SERIE_HISTORICO_ID'  => $registro['PCE_SERIE_HISTORICO_ID'],
            
            ];            
        }

        return $array;
    }

    public function getPcvPedidoItens()
    {
        $con = Conexao::conection();

        $sql = "Select 
            CAST( 5 AS INT ) as 'PCV_EMPRESA'   , 
            CAST( 1 AS INT ) as 'SIM_LOCAL'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_ORIGEM'   , 
            CAST( 6 AS DECIMAL(8) ) as 'PCV_PEDIDO'   , 
            CAST( 6 AS INT ) as 'PCV_PEDIDO_ITEM_SEQUENCIA'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'PCE_ITEM'   , 
            CAST( 6 AS INT ) as 'PCE_DEPOSITO'   , 
            CAST( 5 AS INT ) as 'SIM_OPERACAO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PREVISTA_ENTREGA'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_RESERVA_ESTOQUE'   , 
            CAST( 5 AS DECIMAL(5,2) ) as 'PERC_DESCONTO_1'   , 
            CAST( 6 AS DECIMAL(5,2) ) as 'PERC_DESCONTO_2'   , 
            CAST( 4 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO'   , 
            CAST( 1 AS DECIMAL(16,4) ) as 'QUANTIDADE_PEDIDA'   , 
            CAST( 2 AS DECIMAL(16,4) ) as 'QUANTIDADE_INDICADA'   , 
            CAST( ANOME AS VARCHAR(70) ) as 'TEXTO_NOTA_FISCAL_01'   , 
            CAST( ANOME AS VARCHAR(70) ) as 'TEXTO_NOTA_FISCAL_02'   , 
            CAST( 3 AS DECIMAL(5,2) ) as 'PERC_DESCONTO_PROMOCIONAL'   , 
            CAST( 6 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO_BASE'   , 
            CAST( 5 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO_INFORMADO'   , 
            CAST( 9 AS DECIMAL(16,4) ) as 'QUANTIDADE_ORIGINAL'   , 
            CAST( ANOME AS VARCHAR(6) ) as 'SIM_SEGMENTO'   , 
            CAST( 4 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO_LIQUIDO'   , 
            CAST( 1 AS DECIMAL(16,2) ) as 'PRECO_TOTAL_LIQUIDO'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'NOME_ITEM_OUT'   , 
            CAST( ANOME AS VARCHAR(120) ) as 'DESCRICAO_ITEM'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE_VENDA'   , 
            CAST( 5 AS DECIMAL(16,4) ) as 'QUANTIDADE_VENDA'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE'   , 
            CAST( 6 AS DECIMAL(5,2) ) as 'PERC_IPI'   , 
            CAST( 2 AS DECIMAL(20,6) ) as 'CUSTO_FRETE_UNITARIO'   , 
            CAST( 4 AS INT ) as 'PCV_TIPO_TAB_PRECO'   , 
            CAST( 7 AS DECIMAL(16,2) ) as 'VALOR_IPI'   , 
            CAST( GETDATE() AS DATE ) as 'REPROGRAMACAO_ENTREGA'   , 
            CAST( 9 AS INT ) as 'PCV_SEQUENCIA_ORIGINAL'   , 
            CAST( 6 AS INT ) as 'PROMOCAO'   , 
            CAST( 3 AS DECIMAL(16,2) ) as 'PRECO_MINIMO'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'CGF_CENTRO_CUSTO'   , 
            CAST( 2 AS INT ) as 'DIAS_PREVISTOS_ENTREGA'   , 
            CAST( 1 AS INT ) as 'SIM_MOEDA'   , 
            CAST( 5 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO_MOEDA'   , 
            CAST( 4 AS DECIMAL(20,6) ) as 'PRECO_UNITARIO_BASE_MOEDA'   , 
            CAST( 6 AS INT ) as 'CTO_LOCAL'   , 
            CAST( 9 AS DECIMAL(8) ) as 'CTO_CONTRATO'   , 
            CAST( 5 AS DECIMAL(16,4) ) as 'QUANTIDADE_FATURADA'   , 
            CAST( 54 AS INT ) as 'PENDENTE'   , 
            CAST( 65 AS INT ) as 'PCV_STATUS'   , 
            CAST( GETDATE() AS DATE ) as 'PREVISAO_ENTREGA_COMERCIAL'   , 
            CAST( ANOME AS VARCHAR(50) ) as 'OBS_DESCONTO_1'   , 
            CAST( ANOME AS VARCHAR(90) ) as 'OBS_DESCONTO_2'   , 
            CAST( ANOME AS VARCHAR(70) ) as 'NIT_OBSERVACAO_TINTURARIA'   , 
            CAST( 4 AS INT ) as 'ITEM_BLOQUEADO'   , 
            CAST( GETDATE() AS DATE ) as 'CREATED'   , 
            CAST( GETDATE() AS DATE ) as 'UPDATED'   , 
            CAST( 5 AS DECIMAL(14) ) as 'PCV_PEDIDO_ITEM_ID'   , 
            CAST( 1 AS DECIMAL(16,2) ) as 'VALOR_ICMS_SUBSTITUICAO'   , 
            CAST( ANOME AS VARCHAR(20) ) as 'NUMERO_SERIE'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'SEU_PEDIDO'   , 
            CAST( 5 AS INT ) as 'SEU_PEDIDO_ITEM'   , 
            CAST( 65 AS DECIMAL(14) ) as 'VEI_VEICULO_IMPORTACAO_ID'   , 
            CAST( 84 AS DECIMAL(16,4) ) as 'QTD_CANCELADA_ITEM'   , 
            CAST( 54 AS DECIMAL(14) ) as 'PCE_SERIE_ID'   , 
            CAST( 1 AS DECIMAL(14) ) as 'PCE_SERIE_HISTORICO_ID'    
        
        FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
        ";

        $query = sqlsrv_query($con,$sql);

        $array = PcvPedidoItens::getArray($query);

        $json = json_encode(['PcvPedidoItens' => $array]);

        echo $json;
    }

    public function findPcvPedidoItens($parametro)
    {
        $con = Conexao::conection();

        $sql = "aqui vai um select com where";

        $query = sqlsrv_query($con, $sql);

        $array = PcvPedidoItens::getArray($query);

        $json = json_encode(['PcvPedidoItens' => $array]);

        echo $json;
        
    }
}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];

    PcvPedidoItens::findPcvPedidoItens($parametro);
}else{

    
    PcvPedidoItens::getPcvPedidoItens();
}


?>