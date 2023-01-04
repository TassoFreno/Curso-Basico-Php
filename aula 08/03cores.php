<!DOCTYPE html>
<html>
<head>ndem,berg
    <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<style>
    span.texto {
        font-size: <?php echo $tam; ?> ;
        color: <?php echo $cor; ?> ;
    }
</style>
<body>
<div>
    <?php
    $txt = ($_GET["t"]) ? $_GET["t"]:"texto generico";
    $tam = ($_GET["tam"]) ? $_GET["tam"]:"12pt";
    $cor = $tam = ($_GET["cor"]) ? $_GET["cor"]:"preto";

    echo "<span class='texto'>$txt</span>"
    ?>
</div>
</body>
</html>
 