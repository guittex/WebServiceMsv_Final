<?php
namespace TestSeguranca;

require "../header/header.php";
require "../services/conexao.php";

use Banco\Conexao;

class TestSeguranca
{

    public function getConection()
    {
        $con = Conexao::conection();
        
        return $con;
    }

    public function autentica()
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVjOTY5NGY5YjI1MGIyZmMwNGQxZjZlMDAyY2NiYzU3YWYxZjdmMDM3YjE3ZDE5Y2YwYjUxMzI4NjdkOWI0NTY4ZmZkYWI1ZTdiOTg2MDBmIn0.eyJhdWQiOiIxIiwianRpIjoiNWM5Njk0ZjliMjUwYjJmYzA0ZDFmNmUwMDJjY2JjNTdhZjFmN2YwMzdiMTdkMTljZjBiNTEzMjg2N2Q5YjQ1NjhmZmRhYjVlN2I5ODYwMGYiLCJpYXQiOjE1NTkyMjA2MjMsIm5iZiI6MTU1OTIyMDYyMywiZXhwIjoxNTkwODQzMDIzLCJzdWIiOiIyMDAyIiwic2NvcGVzIjpbXX0.ZniUQcY3gsh07DbdmWcLqdHiiswk9YPy4vQW7U7JkVdBiMYZgR7dSRvVRu8ZX4MmmsueXwJToey_57calzCznoH4MMYVhC7uGsEJOvuISv9UCEGt8S5gnABUbWsGfkcfFcMHu4jaSoOvZgRCbF8AHv9tqudmb1EZlZyd7Ja7CG7nGq85qIjLzm-Wp_WuK2jginsg94pPy7tjAFhSGzE6M3taMQozzbFRkXAC4ZgTPxXB3DybT7DR4CsTQXuJzI31C6ViGTBBAGqlHstu78fYHWECOqe2k4au94M-3wWCzA1PBXEKHRFiyIyuOP5OzFJV55qpwWm721jBOusoKqCl7ZBn7anr57RQDYoy2MyRYzinP5ejS1_K23ygQ34o9BCTucq16lfRRhHpOhqpXlSHLAiChf4j_61jg2_PQXtc8WzFJBfRCr4hcZ0gQDScK6YIGMMqwYQ8cNMdb7P0WfbG1X1eIr0p7b1FhYzfg0DMUM0Qe0v8pS82AMVz3PI3iiSOQHEKmVUuX9ZVakBbu9z0bZKXEl08U2ndBrpVRyXTuvY3Odgmbgc7v82qrKIVMOCrBhSzAZaYDad5u7oXGHJhtSVKLIaM6Rf950YIwi_pV1TAsAXLTHnbMnPpKBdx786hzjBa01wU3mIqO5Odz-yF_Ys26hxY6AQ-YNCshO4WRB8";

        if($_GET['token']){
            $getToken = $_GET['token'];
            if($getToken == $token){
                echo "passou";
            }else{
                echo "nao passo";
            }
        }
    }
}

TestSeguranca::autentica();

?>