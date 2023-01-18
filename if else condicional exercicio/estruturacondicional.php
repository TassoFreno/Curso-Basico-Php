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
    if ($i < 16) {
        $tipo = "nao vota";
    }
        else {
            if (($i >=16 && $i <18) || ($i>65)) { // Ao inserir o valor || ou / colocar entre paranteses para funcionar
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "VotoOpcional"
            }
        }
    ?>
    // abaixo estrutura elseif ( economizando linhas 
    */
    if ($i < 16) {
    $tipo = "nao vota";
    }
    else if (($i >=16 && $i <18) || ($i>65)) { // Ao inserir o valor || ou / colocar entre paranteses para funcionar
    $tipoVoto = "voto opcional";
    }
    else {
    $tipoVoto = "VotoOpcional"
    }
    /*


</div>
</body>
</html>
 