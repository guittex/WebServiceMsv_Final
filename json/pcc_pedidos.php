<?php   
namespace PccPedidos;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class PccPedidos
{
    public function array($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'PCC_EMPRESA'  => $registro['PCC_EMPRESA'],
                'PCC_LOCAL'  => $registro['PCC_LOCAL'],
                'PCC_PEDIDO'  => $registro['PCC_PEDIDO'],
                'DATA_PEDIDO'  => $registro['DATA_PEDIDO'],
                'PCC_FORNECEDOR'  => $registro['PCC_FORNECEDOR'],
                'PCC_FORNECEDOR_ENDERECO'  => $registro['PCC_FORNECEDOR_ENDERECO'],
                'PCC_COMPRADOR'  => $registro['PCC_COMPRADOR'],
                'PCC_LOCAL_ENTREGA'  => $registro['PCC_LOCAL_ENTREGA'],
                'PCC_LOCAL_ENDERECO'  => $registro['PCC_LOCAL_ENDERECO'],
                'TIPO_FRETE'  => $registro['TIPO_FRETE'],
                'SIM_MOEDA'  => $registro['SIM_MOEDA'],
                'SIM_ORIGEM'  => $registro['SIM_ORIGEM'],
                'OBSERVACAO'  => $registro['OBSERVACAO'],
                'CONDICAO_PAGAMENTO'  => $registro['CONDICAO_PAGAMENTO'],
                'PCC_USUARIO_LIBERACAO'  => $registro['PCC_USUARIO_LIBERACAO'],
                'DATA_LIBERACAO'  => $registro['DATA_LIBERACAO'],
                'PCC_USUARIO_APROVACAO_1'  => $registro['PCC_USUARIO_APROVACAO_1'],
                'PCC_USUARIO_APROVACAO_2'  => $registro['PCC_USUARIO_APROVACAO_2'],
                'PCC_USUARIO_APROVACAO_3'  => $registro['PCC_USUARIO_APROVACAO_3'],
                'DATA_APROVACAO_1'  => $registro['DATA_APROVACAO_1'],
                'DATA_APROVACAO_2'  => $registro['DATA_APROVACAO_2'],
                'DATA_APROVACAO_3'  => $registro['DATA_APROVACAO_3'],
                'ORIGEM'  => $registro['ORIGEM'],
                'SITUACAO'  => $registro['SITUACAO'],
                'FCA_LINHA'  => $registro['FCA_LINHA'],
                'CONTATO'  => $registro['CONTATO'],
                'VALOR_FRETE'  => $registro['VALOR_FRETE'],
                'PCV_PLANO_PAGAMENTO'  => $registro['PCV_PLANO_PAGAMENTO'],
                'DATA_VENCIMENTO'  => $registro['DATA_VENCIMENTO'],
                'NUM_PEDIDO_FORNECEDOR'  => $registro['NUM_PEDIDO_FORNECEDOR'],
                'PRIORIDADE'  => $registro['PRIORIDADE'],
                'CGF_CENTRO_CUSTO'  => $registro['CGF_CENTRO_CUSTO'],
                'FORNECEDOR_DEVEDOR_INSS'  => $registro['FORNECEDOR_DEVEDOR_INSS'],
                'SITUACAO_ANTERIOR'  => $registro['SITUACAO_ANTERIOR'],
                'PCC_PEDIDO_ANO'  => $registro['PCC_PEDIDO_ANO'],
                'IMP_MODALIDADE'  => $registro['IMP_MODALIDADE'],
                'TIPO_IMPORTACAO'  => $registro['TIPO_IMPORTACAO'],
                'IMP_EMBARQUE_ID'  => $registro['IMP_EMBARQUE_ID'],
                'IMP_TRANSPORTE'  => $registro['IMP_TRANSPORTE'],
                'IMP_REPRESENTANTE'  => $registro['IMP_REPRESENTANTE'],
                'IMP_REPRESENTANTE_ENDERECO'  => $registro['IMP_REPRESENTANTE_ENDERECO'],
                'IMP_IMPORTADOR'  => $registro['IMP_IMPORTADOR'],
                'IMP_IMPORTADOR_ENDERECO'  => $registro['IMP_IMPORTADOR_ENDERECO'],
                'IMP_TRANSPORTADORA'  => $registro['IMP_TRANSPORTADORA'],
                'IMP_TRANSPORTADORA_ENDERECO'  => $registro['IMP_TRANSPORTADORA_ENDERECO'],
                'MARCACAO_NOME'  => $registro['MARCACAO_NOME'],
                'MARCACAO_COR'  => $registro['MARCACAO_COR'],
                'IMP_LICENCA'  => $registro['IMP_LICENCA'],
                'PCC_LOCAL_COBRANCA'  => $registro['PCC_LOCAL_COBRANCA'],
                'PCC_LOCAL_ENDERECO_COBRANCA'  => $registro['PCC_LOCAL_ENDERECO_COBRANCA'],
                'CMO_LINHA_ID'  => $registro['CMO_LINHA_ID'],
                'NUM_PEDIDO_FORNECEDOR_2'  => $registro['NUM_PEDIDO_FORNECEDOR_2'],
                'PCC_TIPO_TAB_PRECO'  => $registro['PCC_TIPO_TAB_PRECO'],
                'PCC_LOCAL_ENDERECO_FATURAMENTO'  => $registro['PCC_LOCAL_ENDERECO_FATURAMENTO'],
                'PCC_LOCAL_FATURAMENTO'  => $registro['PCC_LOCAL_FATURAMENTO'],
                'PCC_USUARIO_EMISSAO'  => $registro['PCC_USUARIO_EMISSAO'],
                'DATA_EMISSAO'  => $registro['DATA_EMISSAO'],
                'QTD_AUTORIZACOES'  => $registro['QTD_AUTORIZACOES'],
                'AUTORIZACAO_ALTERADA'  => $registro['AUTORIZACAO_ALTERADA'],
                'AUTORIZADO'  => $registro['AUTORIZADO'],
                'PCC_USUARIO_CADASTRO'  => $registro['PCC_USUARIO_CADASTRO'],
                'ULTIMA_AUTORIZACAO'  => $registro['ULTIMA_AUTORIZACAO'],
                'PCC_USUARIO_ULT_AUT'  => $registro['PCC_USUARIO_ULT_AUT'],
                'TIPO_PEDIDO'  => $registro['TIPO_PEDIDO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],                  
            ];
        }

        return $array;
    }

    public function getPccPedidos()
    {
        $con = Conexao::conection();
        $sql = "Select 
            CAST( 1 AS INT ) as 'PCC_EMPRESA'   , 
            CAST( 2 AS INT ) as 'PCC_LOCAL'   , 
            CAST( 14 AS DECIMAL ) as 'PCC_PEDIDO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PEDIDO'   , 
            CAST( 5 AS DECIMAL ) as 'PCC_FORNECEDOR'   , 
            CAST( 15 AS INT ) as 'PCC_FORNECEDOR_ENDERECO'   , 
            CAST( 15 AS DECIMAL ) as 'PCC_COMPRADOR'   , 
            CAST( 1 AS INT ) as 'PCC_LOCAL_ENTREGA'   , 
            CAST( 1 AS INT ) as 'PCC_LOCAL_ENDERECO'   , 
            CAST( 1 AS INT ) as 'TIPO_FRETE'   , 
            CAST( 1 AS INT ) as 'SIM_MOEDA'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_ORIGEM'   , 
            CAST( ANOME AS VARCHAR(2000) ) as 'OBSERVACAO'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'CONDICAO_PAGAMENTO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_LIBERACAO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_LIBERACAO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_APROVACAO_1'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_APROVACAO_2'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_APROVACAO_3'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_APROVACAO_1'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_APROVACAO_2'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_APROVACAO_3'   , 
            CAST( 2 AS INT ) as 'ORIGEM'   , 
            CAST( 3 AS INT ) as 'SITUACAO'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'FCA_LINHA'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'CONTATO'   , 
            CAST( 65 AS DECIMAL(16,4) ) as 'VALOR_FRETE'   , 
            CAST( ANOME AS VARCHAR(4) ) as 'PCV_PLANO_PAGAMENTO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_VENCIMENTO'   , 
            CAST( ANOME AS VARCHAR(12) ) as 'NUM_PEDIDO_FORNECEDOR'   , 
            CAST( 6 AS INT ) as 'PRIORIDADE'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'CGF_CENTRO_CUSTO'   , 
            CAST( 8 AS INT ) as 'FORNECEDOR_DEVEDOR_INSS'   , 
            CAST( 9 AS INT ) as 'SITUACAO_ANTERIOR'   , 
            CAST( 6 AS INT ) as 'PCC_PEDIDO_ANO'   , 
            CAST( 63 AS INT ) as 'IMP_MODALIDADE'   , 
            CAST( 1 AS INT ) as 'TIPO_IMPORTACAO'   , 
            CAST( 45 AS DECIMAL ) as 'IMP_EMBARQUE_ID'   , 
            CAST( 1 AS INT ) as 'IMP_TRANSPORTE'   , 
            CAST( 2 AS DECIMAL ) as 'IMP_REPRESENTANTE'   , 
            CAST( 6 AS INT ) as 'IMP_REPRESENTANTE_ENDERECO'   , 
            CAST( 3 AS DECIMAL ) as 'IMP_IMPORTADOR'   , 
            CAST( 6 AS INT ) as 'IMP_IMPORTADOR_ENDERECO'   , 
            CAST( 5 AS DECIMAL ) as 'IMP_TRANSPORTADORA'   , 
            CAST( 6 AS INT ) as 'IMP_TRANSPORTADORA_ENDERECO'   , 
            CAST( ANOME AS VARCHAR(60) ) as 'MARCACAO_NOME'   , 
            CAST( ANOME AS VARCHAR(60) ) as 'MARCACAO_COR'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'IMP_LICENCA'   , 
            CAST( 9 AS INT ) as 'PCC_LOCAL_COBRANCA'   , 
            CAST( 9 AS INT ) as 'PCC_LOCAL_ENDERECO_COBRANCA'   , 
            CAST( 5 AS DECIMAL ) as 'CMO_LINHA_ID'   , 
            CAST( ANOME AS VARCHAR(20) ) as 'NUM_PEDIDO_FORNECEDOR_2'   , 
            CAST( 6 AS INT ) as 'PCC_TIPO_TAB_PRECO'   , 
            CAST( 3 AS INT ) as 'PCC_LOCAL_ENDERECO_FATURAMENTO'   , 
            CAST( 2 AS INT ) as 'PCC_LOCAL_FATURAMENTO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_EMISSAO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_EMISSAO'   , 
            CAST( 4 AS INT ) as 'QTD_AUTORIZACOES'   , 
            CAST( 4 AS INT ) as 'AUTORIZACAO_ALTERADA'   , 
            CAST( 1 AS INT ) as 'AUTORIZADO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_CADASTRO'   , 
            CAST( 6 AS INT ) as 'ULTIMA_AUTORIZACAO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PCC_USUARIO_ULT_AUT'   , 
            CAST( 6 AS INT ) as 'TIPO_PEDIDO'   , 
            CAST( GETDATE() AS DATE ) as 'CREATED'   , 
            CAST( GETDATE() AS DATE ) as 'UPDATED'   
        
        FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
        ";
        $query = sqlsrv_query($con,$sql);

        $array = PccPedidos::array($query);

        $json = json_encode(['PccPedidos' => $array]);

        echo $json;
    }

    public function findPccPedidos($parametro)
    {
        $con = Conexao::conection();
        $sql = 'AQUI VAI UM SELECT COM WHERE';
        $query = sqlsrv_query($con, $sql);

        $array = PccPedidos::aray($query);

        $json = json_encode(['PccPedidos' => $array]);

        echo $json;
    }
}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];

    PccPedidos::findPccPedidos($parametro);

}else{
    PccPedidos::getPccPedidos();

}


?>