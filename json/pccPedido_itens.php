<?php
namespace PccPedidoItens;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class PccPedidoItens
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'PCC_EMPRESA'  => $registro['PCC_EMPRESA'],
                'PCC_LOCAL'  => $registro['PCC_LOCAL'],
                'PCC_PEDIDO'  => $registro['PCC_PEDIDO'],
                'PCC_SEQUENCIA'  => $registro['PCC_SEQUENCIA'],
                'PCC_ITEM'  => $registro['PCC_ITEM'],
                'PCC_MARCA'  => $registro['PCC_MARCA'],
                'SIM_UNIDADE_COMPRA'  => $registro['SIM_UNIDADE_COMPRA'],
                'SIM_UNIDADE_ITEM'  => $registro['SIM_UNIDADE_ITEM'],
                'SIM_APLICACAO'  => $registro['SIM_APLICACAO'],
                'DESCRICAO_ITEM'  => $registro['DESCRICAO_ITEM'],
                'OBSERVACAO'  => $registro['OBSERVACAO'],
                'TIPO_ITEM'  => $registro['TIPO_ITEM'],
                'QUANTIDADE'  => $registro['QUANTIDADE'],
                'VALOR_UNITARIO'  => $registro['VALOR_UNITARIO'],
                'PERC_IPI'  => $registro['PERC_IPI'],
                'PERC_ICMS'  => $registro['PERC_ICMS'],
                'SITUACAO'  => $registro['SITUACAO'],
                'QUANTIDADE_CANCELADA'  => $registro['QUANTIDADE_CANCELADA'],
                'PERC_DESCONTO'  => $registro['PERC_DESCONTO'],
                'VALOR_DESCONTO'  => $registro['VALOR_DESCONTO'],
                'VALOR_UNITARIO_BRUTO'  => $registro['VALOR_UNITARIO_BRUTO'],
                'PERC_DESPESAS_FINANCEIRAS'  => $registro['PERC_DESPESAS_FINANCEIRAS'],
                'VALOR_DESPESAS_FINANCEIRAS'  => $registro['VALOR_DESPESAS_FINANCEIRAS'],
                'SIM_ORIGEM'  => $registro['SIM_ORIGEM'],
                'PCC_PEDIDO_ANO'  => $registro['PCC_PEDIDO_ANO'],
                'IMP_FABRICANTE'  => $registro['IMP_FABRICANTE'],
                'IMP_ENDERECO_FABRICANTE'  => $registro['IMP_ENDERECO_FABRICANTE'],
                'IMP_CARTA_CREDITO'  => $registro['IMP_CARTA_CREDITO'],
                'PESO_LIQUIDO'  => $registro['PESO_LIQUIDO'],
                'PESO_BRUTO'  => $registro['PESO_BRUTO'],
                'PCC_LOCAL_ENTREGA'  => $registro['PCC_LOCAL_ENTREGA'],
                'PCC_LOCAL_ENDERECO'  => $registro['PCC_LOCAL_ENDERECO'],
                'IMP_LICENCA'  => $registro['IMP_LICENCA'],
                'PCC_TIPO_TAB_PRECO'  => $registro['PCC_TIPO_TAB_PRECO'],
                'CMO_CODIGO_ERRO'  => $registro['CMO_CODIGO_ERRO'],
                'MENSAGEM'  => $registro['MENSAGEM'],
                'MENSAGEM_CAN'  => $registro['MENSAGEM_CAN'],
                'PCC_GRUPO_COTACAO'  => $registro['PCC_GRUPO_COTACAO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'ATUALIZA_NPC'  => $registro['ATUALIZA_NPC'],
                'PCC_STATUS_DSH'  => $registro['PCC_STATUS_DSH'],
                'ITEM_LI'  => $registro['ITEM_LI'],
                'ITEM_FREE_OF_CHARGE'  => $registro['ITEM_FREE_OF_CHARGE']
            ];
        }

        return $array;
    }

    public function getPccPedidoItens()
    {
        $con = Conexao::conection();
        
        $sql = "Select 
            CAST( 5 AS INT ) as 'PCC_EMPRESA'   , 
            CAST( 4 AS INT ) as 'PCC_LOCAL'   , 
            CAST( 1 AS DECIMAL(10) ) as 'PCC_PEDIDO'   , 
            CAST( 5 AS INT ) as 'PCC_SEQUENCIA'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'PCC_ITEM'   , 
            CAST( 54 AS INT ) as 'PCC_MARCA'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE_COMPRA'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_UNIDADE_ITEM'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'SIM_APLICACAO'   , 
            CAST( ANOME AS VARCHAR(512) ) as 'DESCRICAO_ITEM'   , 
            CAST( ANOME AS VARCHAR(4000) ) as 'OBSERVACAO'   , 
            CAST( 65 AS INT ) as 'TIPO_ITEM'   , 
            CAST( 65 AS DECIMAL(16,4) ) as 'QUANTIDADE'   , 
            CAST( 5 AS DECIMAL(18,6) ) as 'VALOR_UNITARIO'   , 
            CAST( 1 AS DECIMAL(5,2) ) as 'PERC_IPI'   , 
            CAST( 4 AS DECIMAL(5,2) ) as 'PERC_ICMS'   , 
            CAST( 6 AS INT ) as 'SITUACAO'   , 
            CAST( 5 AS DECIMAL(16,4) ) as 'QUANTIDADE_CANCELADA'   , 
            CAST( 4 AS DECIMAL(5,2) ) as 'PERC_DESCONTO'   , 
            CAST( 12 AS DECIMAL(16,4) ) as 'VALOR_DESCONTO'   , 
            CAST( 32 AS DECIMAL(18,6) ) as 'VALOR_UNITARIO_BRUTO'   , 
            CAST( 51 AS DECIMAL(5,2) ) as 'PERC_DESPESAS_FINANCEIRAS'   , 
            CAST( 45 AS DECIMAL(16,4) ) as 'VALOR_DESPESAS_FINANCEIRAS'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_ORIGEM'   , 
            CAST( 65 AS INT ) as 'PCC_PEDIDO_ANO'   , 
            CAST( 5 AS DECIMAL(14) ) as 'IMP_FABRICANTE'   , 
            CAST( 65 AS INT ) as 'IMP_ENDERECO_FABRICANTE'   , 
            CAST( 1 AS DECIMAL(14) ) as 'IMP_CARTA_CREDITO'   , 
            CAST( 4 AS DECIMAL(18,6) ) as 'PESO_LIQUIDO'   , 
            CAST( 5 AS DECIMAL(18,6) ) as 'PESO_BRUTO'   , 
            CAST( 6 AS INT ) as 'PCC_LOCAL_ENTREGA'   , 
            CAST( 9 AS INT ) as 'PCC_LOCAL_ENDERECO'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'IMP_LICENCA'   , 
            CAST( 2 AS INT ) as 'PCC_TIPO_TAB_PRECO'   , 
            CAST( ANOME AS VARCHAR(4) ) as 'CMO_CODIGO_ERRO'   , 
            CAST( 3 AS INT ) as 'MENSAGEM'   , 
            CAST( 6 AS INT ) as 'MENSAGEM_CAN'   , 
            CAST( 4 AS INT ) as 'PCC_GRUPO_COTACAO'   , 
            CAST( GETDATE() AS DATE ) as 'CREATED'   , 
            CAST( GETDATE() AS DATE ) as 'UPDATED'   , 
            CAST( 1 AS INT ) as 'ATUALIZA_NPC'   , 
            CAST( ANOME AS VARCHAR(1) ) as 'PCC_STATUS_DSH'   , 
            CAST( 3 AS INT ) as 'ITEM_LI'   , 
            CAST( 6 AS INT ) as 'ITEM_FREE_OF_CHARGE'   
        
        FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
        ";

        $query = sqlsrv_query($con, $sql);

        $array = PccPedidoItens::getArray($query);

        $json = json_encode(['PccPedidoItens' => $array]);

        echo $json;
    }
    
    public function findPccPedidoItens()
    {
        $con = Conexao::conection();

        $sql  ="sel com paramtro";

        $query = sqlsrv_query($con, $sql);

        $array = PccPedidoItens::getArray($query);

        $json = json_encode(['PccPedidoItens' => $array]);	
        
        echo $json;
    }
}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];

    PccPedidoItens::findPccPedidoItens($parametro);
}else{

    PccPedidoItens::getPccPedidoItens();
}






?>