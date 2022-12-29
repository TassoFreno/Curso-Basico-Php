<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title></title>
</head>
<body>
<div>
    <?php
    $a = 3;
    $b = &$a; // o & faz a referancia a variavel, transformando o valor igual a 8 por
    $b += 5;

    echo " <br>a Variavel A vale $a";
    echo " <br>a Variavel B vale $b";


    ?>

</div>

</body>

</html>
