<!DOCTYPE html>
<html>
<head>ndem,berg
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;

    echo "$nome tem $idade anos.";


    ?>
    <a href="02.exercicio.html">voltar</a>

</div>
</body>
</html>
 