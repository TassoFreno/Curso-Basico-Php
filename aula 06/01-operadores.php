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
$preco = $_GET["p"];
echo "O preço do Produto é R$" . number_format ($preco, 2);
$preco = $preco -= $preco*10/100;
echo " E o novo preco 10% de desconto sera " . number_format ($preco, 2)

?>

</div>

</body>

</html>