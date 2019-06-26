<?php
namespace EntidadesEndereco;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class EntidadesEndereco
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'SIM_ENTIDADE'  => $registro['SIM_ENTIDADE'],
                'SIM_ENDERECO_ENTIDADE'  => $registro['SIM_ENDERECO_ENTIDADE'],
                'LOGRADOURO'  => $registro['LOGRADOURO'],
                'ENDERECO'  => $registro['ENDERECO'],
                'NUMERO'  => $registro['NUMERO'],
                'COMPLEMENTO'  => $registro['COMPLEMENTO'],
                'BAIRRO'  => $registro['BAIRRO'],
                'SIM_UF'  => $registro['SIM_UF'],
                'SIM_MUNICIPIO'  => $registro['SIM_MUNICIPIO'],
                'CEP'  => $registro['CEP'],
                'DDD_TELEFONE'  => $registro['DDD_TELEFONE'],
                'TELEFONE'  => $registro['TELEFONE'],
                'RAMAL'  => $registro['RAMAL'],
                'DDD_FAX'  => $registro['DDD_FAX'],
                'FAX'  => $registro['FAX'],
                'TELEX'  => $registro['TELEX'],
                'INSCRICAO_FEDERAL'  => $registro['INSCRICAO_FEDERAL'],
                'INSCRICAO_ESTADUAL'  => $registro['INSCRICAO_ESTADUAL'],
                'INSCRICAO_MUNICIPAL'  => $registro['INSCRICAO_MUNICIPAL'],
                'EMAIL'  => $registro['EMAIL'],
                'CARTEIRA_IDENTIDADE'  => $registro['CARTEIRA_IDENTIDADE'],
                'ORGAO_EXPEDIDOR_IDENTIDADE'  => $registro['ORGAO_EXPEDIDOR_IDENTIDADE'],
                'SIM_UF_EXPEDICAO_IDENTIDADE'  => $registro['SIM_UF_EXPEDICAO_IDENTIDADE'],
                'INSCRICAO_I_TERRITORIAL_RURAL'  => $registro['INSCRICAO_I_TERRITORIAL_RURAL'],
                'CODIGO_ANP'  => $registro['CODIGO_ANP'],
                'DDI_TELEFONE'  => $registro['DDI_TELEFONE'],
                'DDI_FAX'  => $registro['DDI_FAX'],
                'CONTRIBUINTE_ICMS'  => $registro['CONTRIBUINTE_ICMS'],
                'ATIVO'  => $registro['ATIVO'],
                'CODIGO_SIMP'  => $registro['CODIGO_SIMP'],
                'PRODUTOR_RURAL'  => $registro['PRODUTOR_RURAL'],
                'SIM_PAIS'  => $registro['SIM_PAIS'],
                'RAZAO_SOCIAL'  => $registro['RAZAO_SOCIAL'],
                'CODIGO_TOMADOR_SERVICO'  => $registro['CODIGO_TOMADOR_SERVICO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'INSCRICAO_SUFRAMA'  => $registro['INSCRICAO_SUFRAMA'],
                'TIPO_ENDERECO'  => $registro['TIPO_ENDERECO'],
                'DDD_TELEFONE_2'  => $registro['DDD_TELEFONE_2'],
                'TELEFONE_2'  => $registro['TELEFONE_2'],
                'EMAIL_2'  => $registro['EMAIL_2'],
                'EMAIL_3'  => $registro['EMAIL_3'],
                'SITE'  => $registro['SITE'],
                'SERIE_NF'  => $registro['SERIE_NF'],
                'MODELO_NF'  => $registro['MODELO_NF'],
                'TRIBUTACAO_NF'  => $registro['TRIBUTACAO_NF'],
                'SIMPLES_NACIONAL'  => $registro['SIMPLES_NACIONAL'],
                'STATUS'  => $registro['STATUS'],
                'SIM_ENDERECO_ENTIDADE_ID'  => $registro['SIM_ENDERECO_ENTIDADE_ID'],
                'RELACAO_INTERDEPENDENCIA'  => $registro['RELACAO_INTERDEPENDENCIA'],
                'FPG_NIT'  => $registro['FPG_NIT'],
                'FPG_CBO'  => $registro['FPG_CBO'],
                'FPG_CATEGORIA_TRABALHADOR'  => $registro['FPG_CATEGORIA_TRABALHADOR'],
                'FPG_OCORRENCIA'  => $registro['FPG_OCORRENCIA'],
                'SUBST_TRIBUTACAO_DIFERENCIADA'  => $registro['SUBST_TRIBUTACAO_DIFERENCIADA'],
                'PERC_ICMS_SUBST_MEDIO'  => $registro['PERC_ICMS_SUBST_MEDIO'],
                'APLICACAO_APEX'  => $registro['APLICACAO_APEX'],
                'ISS_RETIDO'  => $registro['ISS_RETIDO'],
                'DATA_NASCIMENTO'  => $registro['DATA_NASCIMENTO'],
                'ATIVIDADE_ENCERRADA'  => $registro['ATIVIDADE_ENCERRADA'],
                'TIPO_TRIBUTACAO'  => $registro['TIPO_TRIBUTACAO'],
                'DOC_IDENTIFICACAO_ESTRANGEIRO'  => $registro['DOC_IDENTIFICACAO_ESTRANGEIRO'],
                'CNAE'  => $registro['CNAE'],
                'SIM_TIPO_ENTIDADE'  => $registro['SIM_TIPO_ENTIDADE'],
                'BENEFICIO_SUFRAMA_ICMS'  => $registro['BENEFICIO_SUFRAMA_ICMS'],
                'BENEFICIO_SUFRAMA_PIS_COFINS'  => $registro['BENEFICIO_SUFRAMA_PIS_COFINS'],
                'BENEFICIO_SUFRAMA_IPI'  => $registro['BENEFICIO_SUFRAMA_IPI'],
                'MVA_ITENS_NACIONAIS'  => $registro['MVA_ITENS_NACIONAIS'],
                'MVA_ITENS_IMPORTADOS'  => $registro['MVA_ITENS_IMPORTADOS'],
                'PERC_ICMS_SUBST_ITENS_NACIO'  => $registro['PERC_ICMS_SUBST_ITENS_NACIO'],
                'PERC_ICMS_SUBST_ITENS_IMP'  => $registro['PERC_ICMS_SUBST_ITENS_IMP'],
                'TIPO_SIMPLES'  => $registro['TIPO_SIMPLES'],
                'NAT_OPER_ISS'  => $registro['NAT_OPER_ISS'],
                'SEMPRE_CALCULAR_FECOP'  => $registro['SEMPRE_CALCULAR_FECOP'],
                'DT_ULT_DESATIVACAO'  => $registro['DT_ULT_DESATIVACAO'],
                'SIM_SEGMENTO_ID'  => $registro['SIM_SEGMENTO_ID'],
                'NAO_GERAR_IE_SUBST_TRIBUTARIO'  => $registro['NAO_GERAR_IE_SUBST_TRIBUTARIO'],
                'ROTEIRO_ENTREGA'  => $registro['ROTEIRO_ENTREGA'],
            ]; 
        }
        
        return $array;
    }
    public function getEntidadesEndereco($parametro)
    {
        $con = Conexao::conection('vendas');

        $sql = "PROCEDURE";

        $query = sqlsrv_query($con, $sql);

        $array = EntidadesEndereco::getArray($query);

        $json = json_encode(['Entidades Endereço' => $array]);	
        
        echo $json;

        EntidadesEndereco::logAcesso();

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
    
    EntidadesEndereco::getEntidadesEndereco($parametro);

}else{
    echo "Erro, parametro não encontrado!";
}



?>