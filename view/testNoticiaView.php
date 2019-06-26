<?php
require "../test/testNoticia.php";

use Noticia\Noticia;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando Noticia</title>    

</head>
<body>
    <h1>Olá se aparecer alguma coisa abaixo significa que está funcionando</h1>
    <?php Noticia::getNoticia(); ?>

</body>
</html>