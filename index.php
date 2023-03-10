<?
require_once("define.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? include("includes/scripts.php") ?>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="imagens/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagens/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagens/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagens/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagens/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagens/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagens/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagens/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="imagens/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="imagens/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imagens/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- css  -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/variaveis.css">
    <link rel="stylesheet" href="css/whats.css">
    <link rel="stylesheet" href="css/mobile.css">

    <title>Farmácias Associadas</title>
</head>

<body>
    <? include("modulos/head.php"); ?>
    <div class="corpo">
        <? include("modulos/produtos.php"); ?>
        <? include("modulos/quemsomos.php"); ?>
        <? include("modulos/instagram.php"); ?>
    </div>
    <? include("modulos/footer.php"); ?>
    <? include("modulos/whats.php"); ?>

</html>