<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];

    $rq = sqrt($valor);
    echo "A raiz de $valor é igual á " . number_format($rq, 2);

    ?>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
 