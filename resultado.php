<?php 

require_once "src/Produto.php";

$produto = new Produto;
$produto->setTermo($_GET['busca']);
$resultados = $produto->busca();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <h1>Resultado da busca</h1>
            <hr>
            <p>Voçe Buscou Por: <?=$produto->getTermo()?></p>
            <p>Quantidade de resultados: <?=count($resultados)?></p>
            
            <?php foreach($resultados as $dados) { ?>

            <ul class="list-group">
                <li class="list-group-item"><?=$dados['nome']?>
                </li>
                <li class="list-group-item"><?=$produto->formataPreco($dados['preco'])?>
                </li> <li class="list-group-item"><?=$dados['quantidade']?>
                </li> <li class="list-group-item"><?=$dados['descricao']?>
                </li>
            </ul>
            <?php } ?>

            <p class="my-3">
                <a href="index.php" class="btn btn-info">Voltar</a>
            </p>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>