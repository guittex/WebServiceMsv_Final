<?php
namespace Entidades;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class Entidades
{
    public function getArray($query)
    {
        //Cria um fetch array dos dados
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'SIM_ENTIDADE'  => $registro['SIM_ENTIDADE'],
                'RAZAO_SOCIAL'  => $registro['RAZAO_SOCIAL'],
                'NOME'  => $registro['NOME'],
                'ABREVIATURA'  => $registro['ABREVIATURA'],
                'TIPO_INSCRICAO'  => $registro['TIPO_INSCRICAO'],
                'SITE'  => $registro['SITE'],
                'TIPO_INSCRICAO_FEDERAL'  => $registro['TIPO_INSCRICAO_FEDERAL'],
                'APLICACAO'  => $registro['APLICACAO'],
                'CONTRIBUINTE_ICMS'  => $registro['CONTRIBUINTE_ICMS'],
                'ATIVA'  => $registro['ATIVA'],
                'CSLL_COFINS_PIS_RETIDO'  => $registro['CSLL_COFINS_PIS_RETIDO'],
                'ISS_RETIDO'  => $registro['ISS_RETIDO'],
                'TIPO_ENTIDADE'  => $registro['TIPO_ENTIDADE'],
                'BASE_ISENTA_PIS_COFINS_CSLL'  => $registro['BASE_ISENTA_PIS_COFINS_CSLL'],
                'GRUPO_CREDITO_CONSOLIDADO'  => $registro['GRUPO_CREDITO_CONSOLIDADO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'RAIZ_CNPJ'  => $registro['RAIZ_CNPJ'],
                'CODIGO_TELEMAGIC'  => $registro['CODIGO_TELEMAGIC'],
                'IFV_REGIAO'  => $registro['IFV_REGIAO'],
                'IFV_EMPRESA'  => $registro['IFV_EMPRESA'],
                'IFV_PROSPECT_ID'  => $registro['IFV_PROSPECT_ID'],
                'DATA_VALIDADE_SINTEGRA'  => $registro['DATA_VALIDADE_SINTEGRA'],
                'DATA_VALIDADE_SERASA'  => $registro['DATA_VALIDADE_SERASA'],
                'DATA_VALIDADE_RECEITA'  => $registro['DATA_VALIDADE_RECEITA'],
                'TIPO_TRIBUTACAO'  => $registro['TIPO_TRIBUTACAO'],
                'SIM_ENTIDADE_ID'  => $registro['SIM_ENTIDADE_ID'],
                'APLICACAO_APEX'  => $registro['APLICACAO_APEX'],
                'AGREGADO'  => $registro['AGREGADO'],
                'FPG_AUTONOMO'  => $registro['FPG_AUTONOMO'],
                'SFA_REGIAO'  => $registro['SFA_REGIAO'],
                'SFA_EMPRESA'  => $registro['SFA_EMPRESA'],
                'SFA_PROSPECT_ID'  => $registro['SFA_PROSPECT_ID'],
                'PCV_ATIVIDADE_CLIENTE'  => $registro['PCV_ATIVIDADE_CLIENTE'],
                'SIM_REPRESENTANTE_ULT_VISITA'  => $registro['SIM_REPRESENTANTE_ULT_VISITA'],
                'SFA_REGIAO_ONIBUS'  => $registro['SFA_REGIAO_ONIBUS'],
                'SFA_TIPO_CLIENTE'  => $registro['SFA_TIPO_CLIENTE'],
                'CNAE'  => $registro['CNAE'],
                'ENTIDADE_PUBLICA'  => $registro['ENTIDADE_PUBLICA'],
                'SIM_TIPO_ENTIDADE'  => $registro['SIM_TIPO_ENTIDADE'],
                'TIPO_SIMPLES'  => $registro['TIPO_SIMPLES'],
                'NAT_OPER_ISS'  => $registro['NAT_OPER_ISS'],
                'INDICADOR_CONTRIBUINTE'  => $registro['INDICADOR_CONTRIBUINTE'],
                'CONTRIB_RECEITA_BRUTA'  => $registro['CONTRIB_RECEITA_BRUTA'],
                'TIPO_APOSENTADORIA_ESPECIAL'  => $registro['TIPO_APOSENTADORIA_ESPECIAL'],
                'NAO_CONS_ICMS_BASE_PIS_COFINS'  => $registro['NAO_CONS_ICMS_BASE_PIS_COFINS'],
                'LFE_REINF_PROCESSO_JUDIC_ID'  => $registro['LFE_REINF_PROCESSO_JUDIC_ID'],
                'DT_ULT_DESATIVACAO'  => $registro['DT_ULT_DESATIVACAO'],
            
            ];            
        }
        
        //retorna o array criado
        return $array;
        
    }

    public function getEntidades($CNPJ)
    {
        //Pega a conexao passando o banco em parametro
        $con = Conexao::conection('vendas');

        //Executa a Procedure
        $sql = "EXEC VENDAS.DBO.MSV_WS_Entidade '$CNPJ' ";

        //Cria a query que salva no banco
        $query = sqlsrv_query($con, $sql);

        //Pega o Array criado
        $array = Entidades::getArray($query);    
    
        //Salva um json do array na variavel
        $json = json_encode(['Entidades' => $array]);

        //Mostra na tela
        echo $json;  
        
        //Chama a função de log
        Entidades::logAcesso();
        
    }

    public function logAcesso()
    {
        //Pega o cnpj passado por parametro
        $getCnpj = $_GET['CNPJ'];

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


if(!empty($_GET['CNPJ'])){
    $CNPJ = $_GET['CNPJ'];
    
    Entidades::getEntidades($CNPJ);

}else{
    echo "Erro, parametro não encontrado!";
}





?>