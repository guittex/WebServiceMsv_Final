<?php
namespace TestNoticiaJson;

require "../header/header.php";

require "../services/conexao.php";

use Banco\Conexao;

class TestNoticiaJson
{
    public function getArray($query)
    {
        while($registro = sqlsrv_fetch_array($query)){
            //$response[]=$registro;
            $array[] = [
				"id" => $registro['id'],
                "nome" => $registro['titulo'],
                "subTitulo" => $registro['subTitulo'],
                "corpo" => $registro['corpo']   
            ];            
        }

        return $array;
    }
    public function getNoticiaJson()
    {
        $con = Conexao::conection();
        $sql = "SELECT * from dbo.noticia";
        $query = sqlsrv_query($con, $sql);

        $array = TestNoticiaJson::getArray($query);
		
        $json = json_encode(['Entidades' => $array]);		
        
        echo $json;

    }

    public function findNoticiaJson($id)
    {
        $con = Conexao::conection();
        $sql = "SELECT * from dbo.noticia where id = '$id' ";
        $query = sqlsrv_query($con, $sql);

        $array = TestNoticiaJson::getArray($query);
		
        $json = json_encode(['Entidades' => $array]);		
        
        echo $json;
    }
}

if($_GET['id']){
    $id = $_GET['id'];
    TestNoticiaJson::findNoticiaJson($id);

}else{
    TestNoticiaJson::getNoticiaJson();
}



?>