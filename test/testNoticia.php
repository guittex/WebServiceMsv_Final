<?php
namespace Noticia;

require '../services/conexao.php';

use Banco\Conexao;

class Noticia
{
    public function getNoticia()
    {
        $con = Conexao::conection();
        $sql = "SELECT * from dbo.noticia";
        $query = sqlsrv_query($con, $sql);
        while($array = sqlsrv_fetch_array($query)){
            echo '<h2>' . $array['titulo'] . '</h2>';
        }
    }
}

/*
$noticia = new Noticia;
echo(($noticia::getNoticia()));
*/


?>