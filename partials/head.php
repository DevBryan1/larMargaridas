<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$GLOBALS['head']['title'];?></title>
    <link rel="stylesheet" href="assets/frames/fonticons/css/all.min.css">
    <?php foreach($GLOBALS['css'] as $c){ ?>
        <link rel="stylesheet" href="<?=$c['attr'];?>?=<?=time();?>">
    <?php } ?>
</head>
<script src="https://kit.fontawesome.com/ca7955397c.js" crossorigin="anonymous"></script>
<body>
<div class="container-header">
        <a href="index.php"><img class="imgLogo" src="./assets/images/Logo Lar.png" alt="Logo"></a>
        <p></p>
        <ul class="navMenu">
            <a href="index.php"><li>Início</li></a>
            <a href="quem-somos.php"><li>Quem Somos</li></a>
            <a href="fotos.php"><li>Fotos</li></a>
            <a href="contato.php"><li>Contato/Localização</li></a>
        </ul>

        <!-- Começa a parte mobile !-->
        <div class="container-menu">
            <div class="mobile-menu-icon">
                <button class="btnIcon"><img src="./assets/images/Hamburguer Icon.png" alt="icon hamburger"></button>
            </div>

        <div class="mobile-menu">
            <ul>
                <a href="index.php"><li class="nav-item">Início</li></a>
                <a href="quem-somos.php"><li class="nav-item">Quem Somos</li></a>
                <a href="fotos.php"><li class="nav-item">Fotos</li></a>
                <a href="contato.php"><li class="nav-item">Contato/Localização</li></a>
            </ul>
        </div>

        </div>
   
</div>
<script src="./assets/frames/jQuery.min.js"></script>
<script src="./assets/js/head.js"></script>
<div class="site-completo">