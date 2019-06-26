<?php
namespace EndEntidadesContato;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class EndEntidadesContato
{

    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            $array[] = [
                'SIM_ENDCON_ID'  => $registro['SIM_ENDCON_ID'],
                'SIM_ENTIDADE'  => $registro['SIM_ENTIDADE'],
                'SIM_ENDERECO_ENTIDADE'  => $registro['SIM_ENDERECO_ENTIDADE'],
                'CONTATO'  => $registro['CONTATO'],
                'ATIVO'  => $registro['ATIVO'],
                'DDD_TELEFONE'  => $registro['DDD_TELEFONE'],
                'TELEFONE'  => $registro['TELEFONE'],
                'DDD_CELULAR'  => $registro['DDD_CELULAR'],
                'CELULAR'  => $registro['CELULAR'],
                'DATA_NASCIMENTO'  => $registro['DATA_NASCIMENTO'],
                'EMAIL'  => $registro['EMAIL'],
                'OBSERVACAO'  => $registro['OBSERVACAO'],
                'DDI_TELEFONE'  => $registro['DDI_TELEFONE'],
                'TIPO_CONTATO'  => $registro['TIPO_CONTATO'],
                'MSN'  => $registro['MSN'],
                'CARGO'  => $registro['CARGO'],
                'CREATED'  => $registro['CREATED'],
                'UPDATED'  => $registro['UPDATED'],
                'SIM_END_ENT_CONT_ID'  => $registro['SIM_END_ENT_CONT_ID'],
                'CODIGO_TELEMAGIC'  => $registro['CODIGO_TELEMAGIC'],
                'APLICACAO_APEX'  => $registro['APLICACAO_APEX'],
            ];            
        }

        return $array;
    }


    public function getEndEntidadesContato()
    {
        $con = Conexao::conection();
        $sql = "Select 
            CAST( 4 AS DECIMAL(14) ) as 'SIM_ENDCON_ID'   , 
            CAST( 5 AS DECIMAL(14) ) as 'SIM_ENTIDADE'   , 
            CAST( 2 AS INT ) as 'SIM_ENDERECO_ENTIDADE'   , 
            CAST( ANOME AS VARCHAR(80) ) as 'CONTATO'   , 
            CAST( 45 AS INT ) as 'ATIVO'   , 
            CAST( ANOME AS VARCHAR(4) ) as 'DDD_TELEFONE'   , 
            CAST( 46 AS DECIMAL(11) ) as 'TELEFONE'   , 
            CAST( ANOME AS VARCHAR(4) ) as 'DDD_CELULAR'   , 
            CAST( 45 AS DECIMAL(11) ) as 'CELULAR'   , 
            CAST( GETDATE() AS DATE ) as 'DATA_NASCIMENTO'   , 
            CAST( ANOME AS VARCHAR(80) ) as 'EMAIL'   , 
            CAST( ANOME AS VARCHAR(255) ) as 'OBSERVACAO'   , 
            CAST( ANOME AS VARCHAR(11) ) as 'DDI_TELEFONE'   , 
            CAST( 4 AS INT ) as 'TIPO_CONTATO'   , 
            CAST( ANOME AS VARCHAR(40) ) as 'MSN'   , 
            CAST( ANOME AS VARCHAR(20) ) as 'CARGO'   , 
            CAST( GETDATE() AS DATE ) as 'CREATED'   , 
            CAST( GETDATE() AS DATE ) as 'UPDATED'   , 
            CAST( 98 AS DECIMAL(14) ) as 'SIM_END_ENT_CONT_ID'   , 
            CAST( ANOME AS VARCHAR(14) ) as 'CODIGO_TELEMAGIC'   , 
            CAST( ANOME AS VARCHAR(5) ) as 'APLICACAO_APEX'   
        
        FROM  FS_NEW.FSMASTER.ARQ01 WHERE     ACODI = 350
        ";
        $query = sqlsrv_query($con, $sql);

        $array = EndEntidadesContato::getArray($query);
        
        $json = json_encode(['Entidades Contato' => $array]);	
        
        echo $json;
    }

    public function findEndEntidadesContato($parametro)
    {
        $con = Conexao::conection();
        $sql = "AQUI VAI UM SELECT COM WHERE";
        $query = sqlsrv_query($con, $sql);

        $array = EndEntidadesContato::getArray($query);

        $json = json_encode(['Entidade Contato' => $array]);

        echo $json;

    }

}

if(!empty($_GET['parametro'])){
    $parametro = $_GET['parametro'];

    EndEntidadesContato::findEndEntidadesContato($parametro);
}else{
    EndEntidadesContato::getEndEntidadesContato();
}















?>