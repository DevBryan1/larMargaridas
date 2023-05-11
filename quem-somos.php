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
    3 => [ 'attr' => 'assets/css/quem-somos.css' ] // css da pag. mudar para cada pag
];

$GLOBALS['css'] = $css;
$js = [
    1 => [ 'attr' => 'assets/frames/jQuery.min.js' ], //puxamos o JQUERY
    2 => [ 'attr' => 'assets/frames/bootstrap/bootstrap.min.js' ], // puxamos o bootstrap js
    3 => [ 'attr' => 'assets/js/quem-somos.js' ] // js da pagina, aqui muda conforme a pag.
];
$GLOBALS['js'] = $js;
//aqui puxa o head das paginas
require 'partials/head.php';
?>
<div class="body-site">
    
</div>

<?php
require 'partials/foot.php';
?>