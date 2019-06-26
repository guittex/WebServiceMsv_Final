<?php
namespace PcvPedidos;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class PcvPedidos
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'PCV_EMPRESA'  => $registro['PCV_EMPRESA'],
                'SIM_LOCAL'  => $registro['SIM_LOCAL'],
                'SIM_ORIGEM'  => $registro['SIM_ORIGEM'],
                'PCV_PEDIDO'  => $registro['PCV_PEDIDO'],
                'PCV_ENTIDADE'  => $registro['PCV_ENTIDADE'],
                'PCV_PLANO_PAGAMENTO'  => $registro['PCV_PLANO_PAGAMENTO'],
                'PCV_STATUS'  => $registro['PCV_STATUS'],
                'PCV_TIPO_TAB_PRECO'  => $registro['PCV_TIPO_TAB_PRECO'],
                'PCV_TRANSPORTADORA'  => $registro['PCV_TRANSPORTADORA'],
                'SIM_ENDERECO_FATURAMENTO'  => $registro['SIM_ENDERECO_FATURAMENTO'],
                'SIM_ENDERECO_ENTREGA'  => $registro['SIM_ENDERECO_ENTREGA'],
                'SIM_ENDERECO_COBRANCA'  => $registro['SIM_ENDERECO_COBRANCA'],
                'SIM_VIA_TRANSPORTE'  => $registro['SIM_VIA_TRANSPORTE'],
                'SIM_OPERACAO'  => $registro['SIM_OPERACAO'],
                'DATA_PEDIDO'  => $registro['DATA_PEDIDO'],
                'DATA_PREVISTA_FATURAMENTO'  => $registro['DATA_PREVISTA_FATURAMENTO'],
                'DATA_PRECO'  => $registro['DATA_PRECO'],
                'COMPROMISSO'  => $registro['COMPROMISSO'],
                'PERC_FRETE'  => $registro['PERC_FRETE'],
                'PERC_SEGURO'  => $registro['PERC_SEGURO'],
                'PERC_DESCONTO'  => $registro['PERC_DESCONTO'],
                'PERC_DESCONTO_FINANCEIRO'  => $registro['PERC_DESCONTO_FINANCEIRO'],
                'PERC_ENCARGOS_FINANCEIROS'  => $registro['PERC_ENCARGOS_FINANCEIROS'],
                'DIAS_DESCONTO_FINANCEIRO'  => $registro['DIAS_DESCONTO_FINANCEIRO'],
                'VALOR_ANTECIPADO'  => $registro['VALOR_ANTECIPADO'],
                'VALOR_FRETE'  => $registro['VALOR_FRETE'],
                'VALOR_SEGURO'  => $registro['VALOR_SEGURO'],
                'VALOR_OUT_DESPESAS'  => $registro['VALOR_OUT_DESPESAS'],
                'VALOR_DESCONTO'  => $registro['VALOR_DESCONTO'],
                'VALOR_ENCARGOS_FINANCEIROS'  => $registro['VALOR_ENCARGOS_FINANCEIROS'],
                'TIPO_FRETE'  => $registro['TIPO_FRETE'],
                'SEU_PEDIDO'  => $registro['SEU_PEDIDO'],
                'OBSERVACAO_FATURAMENTO_01'  => $registro['OBSERVACAO_FATURAMENTO_01'],
                'OBSERVACAO_FATURAMENTO_02'  => $registro['OBSERVACAO_FATURAMENTO_02'],
                'OBSERVACAO_FATURAMENTO_03'  => $registro['OBSERVACAO_FATURAMENTO_03'],
                'OBSERVACAO_NOTA_FISCAL_01'  => $registro['OBSERVACAO_NOTA_FISCAL_01'],
                'OBSERVACAO_NOTA_FISCAL_02'  => $registro['OBSERVACAO_NOTA_FISCAL_02'],
                'OBSERVACAO_NOTA_FISCAL_03'  => $registro['OBSERVACAO_NOTA_FISCAL_03'],
                'SEQ_SOLICITACAO_GERADA'  => $registro['SEQ_SOLICITACAO_GERADA'],
                'CGF_CENTRO_CUSTO'  => $registro['CGF_CENTRO_CUSTO'],
                'PESO_LIQUIDO'  => $registro['PESO_LIQUIDO'],
                'PESO_BRUTO'  => $registro['PESO_BRUTO'],
                'FCA_LINHA'  => $registro['FCA_LINHA'],
                'TIPO_PEDIDO'  => $registro['TIPO_PEDIDO'],
                'PERC_DESC_PLANO_PAG'  => $registro['PERC_DESC_PLANO_PAG'],
                'PERC_DESC_CLIENTE'  => $registro['PERC_DESC_CLIENTE'],
                'SIM_REPRESENTANTE'  => $registro['SIM_REPRESENTANTE'],
                'SIM_SEGMENTO'  => $registro['SIM_SEGMENTO'],
                'VALIDADE_ORCAMENTO'  => $registro['VALIDADE_ORCAMENTO'],
                'PRAZO_ENTREGA'  => $registro['PRAZO_ENTREGA'],
                'PEDIDO_INTERNO'  => $registro['PEDIDO_INTERNO'],
                'PEDIDO_EDI'  => $registro['PEDIDO_EDI'],
                'RETIRA_PEDIDO'  => $registro['RETIRA_PEDIDO'],
                'DATA_PREVISTA_ENTREGA'  => $registro['DATA_PREVISTA_ENTREGA'],
                'FAT_MINUTA'  => $registro['FAT_MINUTA'],
                'SIM_BANCO'  => $registro['SIM_BANCO'],
                'SIM_AGENCIA'  => $registro['SIM_AGENCIA'],
                'SIM_CONTA_CORRENTE'  => $registro['SIM_CONTA_CORRENTE'],
                'GERA_SERVICO'  => $registro['GERA_SERVICO'],
                'FAT_LOCAL_SERVICO'  => $registro['FAT_LOCAL_SERVICO'],
                'PERC_APROVEITAMENTO'  => $registro['PERC_APROVEITAMENTO'],
                'BLOQUEADO'  => $registro['BLOQUEADO'],
                'PERC_SERVICO_NF'  => $registro['PERC_SERVICO_NF'],
                'DATA_PEDIDO_EDI'  => $registro['DATA_PEDIDO_EDI'],
                'CAR_TIPO_COBRANCA'  => $registro['CAR_TIPO_COBRANCA'],
                'CAR_CONTRATO_VENDOR'  => $registro['CAR_CONTRATO_VENDOR'],
                'PRAZO_VENDOR'  => $registro['PRAZO_VENDOR'],
                'FRETE_VENDA'  => $registro['FRETE_VENDA'],
                'PCV_TIPO_CLIENTE'  => $registro['PCV_TIPO_CLIENTE'],
                'OBSERVACAO_NOTA_FISCAL_04'  => $registro['OBSERVACAO_NOTA_FISCAL_04'],
                'OBSERVACAO_NOTA_FISCAL_05'  => $registro['OBSERVACAO_NOTA_FISCAL_05'],
                'DATA_EMISSAO_OSM'  => $registro['DATA_EMISSAO_OSM'],
                'PESO_MINIMO_FRETE'  => $registro['PESO_MINIMO_FRETE'],
                'VENDA_VISTA_CHEQUE'  => $registro['VENDA_VISTA_CHEQUE'],
                'PCV_VEICULO'  => $registro['PCV_VEICULO'],
                'PROPOSTA_BANCO'  => $registro['PROPOSTA_BANCO'],
                'QTD_DIAS_PRORROGAR_NF'  => $registro['QTD_DIAS_PRORROGAR_NF'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'SIM_REPRESENTANTE_VENDEDOR'  => $registro['SIM_REPRESENTANTE_VENDEDOR'],
                'DESCONTO_ITENS'  => $registro['DESCONTO_ITENS'],
                'PCV_PEDIDO_ID'  => $registro['PCV_PEDIDO_ID'],
                'EX_LOCAL_EMBARQUE'  => $registro['EX_LOCAL_EMBARQUE'],
                'EX_LOCAL_EMBARQUE_UF'  => $registro['EX_LOCAL_EMBARQUE_UF'],
                'AFV_STATUS_PEDIDO'  => $registro['AFV_STATUS_PEDIDO'],
                'AFV_OFF_PEDIDO'  => $registro['AFV_OFF_PEDIDO'],
                'SAC_USUARIO_LIBERACAO'  => $registro['SAC_USUARIO_LIBERACAO'],
                'DISTRIBUIDO_CORREDOR'  => $registro['DISTRIBUIDO_CORREDOR'],
                'PCV_PEDIDO_CORREDOR'  => $registro['PCV_PEDIDO_CORREDOR'],
                'ORDEM_SEPAR_CORREDOR'  => $registro['ORDEM_SEPAR_CORREDOR'],
                'INDICADOR_PRESENCA_COMPRADOR'  => $registro['INDICADOR_PRESENCA_COMPRADOR'],
                'CAIXA_INDICADO_FAT'  => $registro['CAIXA_INDICADO_FAT'],
                'CAIXA_FAT_SOL_SEQ'  => $registro['CAIXA_FAT_SOL_SEQ'],
                'CORREIOS_RAZAO_CLIENTE'  => $registro['CORREIOS_RAZAO_CLIENTE'],
                'CORREIOS_ENDERECO_CLIENTE'  => $registro['CORREIOS_ENDERECO_CLIENTE'],
                'CORREIOS_BAIRRO_CLIENTE'  => $registro['CORREIOS_BAIRRO_CLIENTE'],
                'CORREIOS_MUNICIPIO_CLIENTE'  => $registro['CORREIOS_MUNICIPIO_CLIENTE'],
                'CORREIOS_UF_CLIENTE'  => $registro['CORREIOS_UF_CLIENTE'],
                'CORREIOS_CEP_CLIENTE'  => $registro['CORREIOS_CEP_CLIENTE'],
                'VALE_NUMERO'  => $registro['VALE_NUMERO'],
                'VALE_VALOR'  => $registro['VALE_VALOR'],
            
            ];
                    
        }

        return $array;
    }

    public function getPcvPedidos()
    {
        $con = Conexao::conection();

        $sql = "Select 
            CAST( 5 AS INT ) as 'PCV_EMPRESA'   , 
            CAST( 1 AS INT ) as 'SIM_LOCAL'   , 
            CAST( ANOME AS VARCHAR(3) ) as 'SIM_ORIGEM'   , 
            CAST( 6 AS INT ) as 'PCV_PEDIDO'   , 
            CAST( 41 AS DECIMAL(14) ) as 'PCV_ENTIDADE'   , 
            CAST( ANOME AS VARCHAR(4) ) as 'PCV_PLANO_PAGAMENTO'   , 
            CAST( 5 AS INT ) as 'PCV_STATUS'   , 
            CAST( 5 AS INT ) as 'PCV_TIPO_TAB_PRECO'   , 
            CAST( 14 AS DECIMAL(14) ) as 'PCV_TRANSPORTADORA'   , 
            CAST( 6 AS INT ) as 'SIM_ENDERECO_FATURAMENTO'   , 
            CAST( 3 AS INT ) as 'SIM_ENDERECO_ENTREGA'   , 
            CAST( 2 AS INT ) as 'SIM_ENDERECO_COBRANCA'   , 
            CAST( 5 AS INT ) as 'SIM_VIA_TRANSPORTE'   , 
            CAST( 4 AS INT ) as 'SIM_OPERACAO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PEDIDO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PREVISTA_FATURAMENTO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PRECO'   , 
            CAST( 6 AS INT ) as 'COMPROMISSO'   , 
            CAST( 41 AS DECIMAL(5,2) ) as 'PERC_FRETE'   , 
            CAST( 41 AS DECIMAL(5,2) ) as 'PERC_SEGURO'   , 
            CAST( 51 AS DECIMAL(5,2) ) as 'PERC_DESCONTO'   , 
            CAST( 65 AS DECIMAL(5,2) ) as 'PERC_DESCONTO_FINANCEIRO'   , 
            CAST( 95 AS DECIMAL(5,2) ) as 'PERC_ENCARGOS_FINANCEIROS'   , 
            CAST( 84 AS INT ) as 'DIAS_DESCONTO_FINANCEIRO'   , 
            CAST( 54 AS DECIMAL(16,2) ) as 'VALOR_ANTECIPADO'   , 
            CAST( 15 AS DECIMAL(16,2) ) as 'VALOR_FRETE'   , 
            CAST( 62 AS DECIMAL(16,2) ) as 'VALOR_SEGURO'   , 
            CAST( 32 AS DECIMAL(16,2) ) as 'VALOR_OUT_DESPESAS'   , 
            CAST( 95 AS DECIMAL(16,2) ) as 'VALOR_DESCONTO'   , 
            CAST( 6 AS DECIMAL(16,2) ) as 'VALOR_ENCARGOS_FINANCEIROS'   , 
            CAST( 51 AS INT ) as 'TIPO_FRETE'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'SEU_PEDIDO'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_FATURAMENTO_01'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_FATURAMENTO_02'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_FATURAMENTO_03'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_NOTA_FISCAL_01'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_NOTA_FISCAL_02'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_NOTA_FISCAL_03'   , 
            CAST( 84 AS INT ) as 'SEQ_SOLICITACAO_GERADA'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'CGF_CENTRO_CUSTO'   , 
            CAST( 5 AS DECIMAL(14,4) ) as 'PESO_LIQUIDO'   , 
            CAST( 95 AS DECIMAL(14,4) ) as 'PESO_BRUTO'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'FCA_LINHA'   , 
            CAST( 6 AS INT ) as 'TIPO_PEDIDO'   , 
            CAST( 41 AS DECIMAL(5,2) ) as 'PERC_DESC_PLANO_PAG'   , 
            CAST( 5 AS DECIMAL(5,2) ) as 'PERC_DESC_CLIENTE'   , 
            CAST( 65 AS DECIMAL(14) ) as 'SIM_REPRESENTANTE'   , 
            CAST( ANOME AS VARCHAR(6) ) as 'SIM_SEGMENTO'   , 
            CAST( 8 AS INT ) as 'VALIDADE_ORCAMENTO'   , 
            CAST( ANOME AS VARCHAR(10) ) as 'PRAZO_ENTREGA'   , 
            CAST( ANOME AS VARCHAR(20) ) as 'PEDIDO_INTERNO'   , 
            CAST( 7 AS INT ) as 'PEDIDO_EDI'   , 
            CAST( 4 AS INT ) as 'RETIRA_PEDIDO'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PREVISTA_ENTREGA'   , 
            CAST( 1 AS INT ) as 'FAT_MINUTA'   , 
            CAST( 1 AS INT ) as 'SIM_BANCO'   , 
            CAST( 2 AS INT ) as 'SIM_AGENCIA'   , 
            CAST( 6 AS DECIMAL(12) ) as 'SIM_CONTA_CORRENTE'   , 
            CAST( 9 AS INT ) as 'GERA_SERVICO'   , 
            CAST( 8 AS INT ) as 'FAT_LOCAL_SERVICO'   , 
            CAST( 7 AS DECIMAL(5,2) ) as 'PERC_APROVEITAMENTO'   , 
            CAST( 4 AS INT ) as 'BLOQUEADO'   , 
            CAST( 5 AS DECIMAL(5,2) ) as 'PERC_SERVICO_NF'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_PEDIDO_EDI'   , 
            CAST( 1 AS INT ) as 'CAR_TIPO_COBRANCA'   , 
            CAST( ANOME AS VARCHAR(25) ) as 'CAR_CONTRATO_VENDOR'   , 
            CAST( 2 AS INT ) as 'PRAZO_VENDOR'   , 
            CAST( 3 AS DECIMAL(16,4) ) as 'FRETE_VENDA'   , 
            CAST( 6 AS INT ) as 'PCV_TIPO_CLIENTE'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_NOTA_FISCAL_04'   , 
            CAST( ANOME AS VARCHAR(140) ) as 'OBSERVACAO_NOTA_FISCAL_05'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_EMISSAO_OSM'   , 
            CAST( 4 AS DECIMAL(14,4) ) as 'PESO_MINIMO_FRETE'   , 
            CAST( 1 AS INT ) as 'VENDA_VISTA_CHEQUE'   , 
            CAST( ANOME AS VARCHAR(8) ) as 'PCV_VEICULO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'PROPOSTA_BANCO'   , 
            CAST( 5 AS INT ) as 'QTD_DIAS_PRORROGAR_NF'   , 
            CAST( GETDATE() AS DATE ) as 'CREATED'   , 
            CAST( GETDATE() AS DATE ) as 'UPDATED'   , 
            CAST( 51 AS DECIMAL(14) ) as 'SIM_REPRESENTANTE_VENDEDOR'   , 
            CAST( 6 AS DECIMAL(4,2) ) as 'DESCONTO_ITENS'   , 
            CAST( 95 AS DECIMAL(14) ) as 'PCV_PEDIDO_ID'   , 
            CAST( ANOME AS VARCHAR(60) ) as 'EX_LOCAL_EMBARQUE'   , 
            CAST( ANOME AS VARCHAR(2) ) as 'EX_LOCAL_EMBARQUE_UF'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'AFV_STATUS_PEDIDO'   , 
            CAST( 1 AS INT ) as 'AFV_OFF_PEDIDO'   , 
            CAST( ANOME AS VARCHAR(15) ) as 'SAC_USUARIO_LIBERACAO'   , 
            CAST( 5 AS INT ) as 'DISTRIBUIDO_CORREDOR'   , 
            CAST( 6 AS INT ) as 'PCV_PEDIDO_CORREDOR'   , 
            CAST( 3 AS INT ) as 'ORDEM_SEPAR_CORREDOR'   , 
            CAST( 2 AS INT ) as 'INDICADOR_PRESENCA_COMPRADOR'   , 
            CAST( 4 AS INT ) as 'CAIXA_INDICADO_FAT'   , 
            CAST( 7 AS INT ) as 'CAIXA_FAT_SOL_SEQ'   , 
            CAST( ANOME AS VARCHAR(100) ) as 'CORREIOS_RAZAO_CLIENTE'   , 
            CAST( ANOME AS VARCHAR(100) ) as 'CORREIOS_ENDERECO_CLIENTE'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'CORREIOS_BAIRRO_CLIENTE'   , 
            CAST( ANOME AS VARCHAR(30) ) as 'CORREIOS_MUNICIPIO_CLIENTE'   , 
            CAST( ANOME AS VARCHAR(2) ) as 'CORREIOS_UF_CLIENTE'   , 
            CAST( 9 AS INT ) as 'CORREIOS_CEP_CLIENTE'   , 
            CAST( 41 AS DECIMAL(14) ) as 'VALE_NUMERO'   , 
            CAST( 5 AS DECIMAL(14,2) ) as 'VALE_VALOR'   
        
        FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
        ";

        $query = sqlsrv_query($con, $sql);

        $array = PcvPedidos::getArray($query);

        $json = json_encode(['Pcv_Pedidos' => $array]);	
        
        echo $json;
    }

    public function findPcvPedidos($parametro)
    {
        $con = Conexao::conection();

        $sql = "AQUI VAI UM SELECT COM WHERE";

        $query = sqlsrv_query($con, $sql);

        $array = PcvPedidos::getArray($query);

        $json = json_encode(['Pcv_Pedidos' => $array]);

        echo $json;
    }
}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];

    PcvPedidos::findPcvPedidos($query);
}else{

    PcvPedidos::getPcvPedidos();

}








?>