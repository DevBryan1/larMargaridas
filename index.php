<?php
$head = [
    'title' => 'Lar Margaridas', //aqui puxa o título da minha pag
    'desc' => 'desc',
    'og' => 'index' 
];
$GLOBALS['head'] = $head;

$css = [
    1 => [ 'attr' => 'assets/frames/bootstrap/bootstrap.min.css' ], //puxamos o bootstrap css
    2 => [ 'attr' => 'assets/css/root.css'],
    3 => [ 'attr' => 'assets/css/index.css' ] // css da pag. mudar para cada pag
];

$GLOBALS['css'] = $css;

$js = [
    1 => [ 'attr' => 'assets/frames/jQuery.min.js' ], //puxamos o JQUERY
    2 => [ 'attr' => 'assets/frames/bootstrap/bootstrap.min.js' ], // puxamos o bootstrap js
    3 => [ 'attr' => 'assets/js/index.js' ] // js da pagina, aqui muda conforme a pag.
];
$GLOBALS['js'] = $js;
//aqui puxa o head das paginas
require 'partials/head.php';
?>
<div class="body-site">
    <div class="imgFundo"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="./assets/images/Idosos Mãos Dadas.jpg" alt="Foto Idosos">
            </div>
            <div class="col-sm-7">
                <h1>Um pouco sobre nós</h1>
                <p>O Lar Margaridas iniciou suas atividades para proporcionar aos seus residentes qualidade de vida, entretenimento, segurança e cuidados especiais. Contamos com uma ótima estrutura, com capacidade de acolher confortavelmente e fornecer as condições necessárias para o bem estar dos nossos residentes, sempre respeitando as necessidades individuais de cada um. Confira nossa estrutura e serviços aqui no site, e fique à vontade para deixar um recadinho ou nos ligar, aguardamos sua ligação para esclarecer qualquer dúvida e ajudá-lo a tomar a decisão mais adequada.</p>
            </div>
        </div>
    </div>
    
</div>

<?php

require 'partials/foot.php';
?>