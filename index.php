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
    <div class="imgFundo">
        <p class="title-img">Casa de Repouso</p>
        <p class="desc-img">Lar Margaridas é uma instituição de longa permanência para idosos,com o objetivo de fazer seu familiar se sentir em  casa ,com todos os cuidados necessários ,dando  prioridade ao carinho e atenção a sua saúde física e emocional ! </p>
    </div>
   
    <div class="flex-page vertical-5" id="section1">
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

    <div class="flex-page center vertical-5" id="section2">
       <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Nossos Diferenciais</h1>
                    <p>O Lar Margaridas proporciona aos seus residentes qualidade de vida, entretenimento, segurança e cuidados especiais.</p>
                    <div class="icones">
                        <div class="col-sm-3 xs-sm-6">
                            <span class="svgi aos-init aos-animate" data-os="fade-up">
                                <img src="./assets/images/house.png" alt="Ambiente Qualificado">
                            </span>
                            <h3>Ambiente Qualificado</h3>
                        </div>
                        <div class="col-sm-3 xs-sm-6">
                            <span class="svgi aos-init aos-animate" data-os="fade-up">
                                <img src="./assets/images/doctor.png" alt="Profissionais Capacitados">
                            </span>
                            <h3>Profissionais Capacitados</h3>
                        </div>
                        <div class="col-sm-3 xs-sm-6">
                            <span class="svgi aos-init aos-animate" data-os="fade-up">
                                <img src="./assets/images/support.png" alt="Atendimento Diferenciado">
                            </span>
                            <h3>Atendimento Diferenciado</h3>
                        </div>
                        <div class="col-sm-3 xs-sm-6">
                            <span class="svgi aos-init aos-animate" data-os="fade-up">
                                <img src="./assets/images/shield.png" alt="Segurança Reforçada">
                            </span>
                            <h3>Segurança Reforçada</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
       </div> 
    </div>

    <div class="galeria-image">
        <div class="container-images">
            <h1>Galeria de Fotos</h1>
            <div class="imgs">
                <a href="https://ibb.co/r6TPXzR" class="image"><img src="https://i.ibb.co/r6TPXzR/lareira.webp" alt="lareira" ></a>
                <a href="https://ibb.co/pf4RLDb" class="image"><img src="https://i.ibb.co/pf4RLDb/sala.webp" alt="sala" ></a>
                <a href="https://ibb.co/jz6s2H1" class="image"><img src="https://i.ibb.co/jz6s2H1/varanda2.webp" alt="varanda2" ></a>
                <a href="https://ibb.co/4Tj0qKX" class="image"><img src="https://i.ibb.co/4Tj0qKX/sala-de-jantar2.webp" alt="sala-de-jantar2" ></a>
                <a href="https://ibb.co/xD57HfD" class="image"><img src="https://i.ibb.co/xD57HfD/fachada.webp" alt="fachada" ></a>
                <a href="https://ibb.co/NN2StqG" class="image"><img src="https://i.ibb.co/NN2StqG/quarto.webp" alt="quarto" ></a>
                <a href="https://ibb.co/r6TPXzR" class="image"><img src="https://i.ibb.co/r6TPXzR/lareira.webp" alt="lareira" ></a>
                <a href="https://ibb.co/HPbb78q" class="image"><img src="https://i.ibb.co/HPbb78q/cozinha.jpg" alt="cozinha" ></a>
                <a href="https://ibb.co/RS17tpZ" class="image"><img src="https://i.ibb.co/RS17tpZ/gramado.jpg" alt="gramado"    ></a>
                <a href="https://ibb.co/DtZ76Tn" class="image"><img src="https://i.ibb.co/DtZ76Tn/banheiro.webp" alt="banheiro" ></a>
                <a href="https://ibb.co/Tm7Zf7z" class="image"><img src="https://i.ibb.co/Tm7Zf7z/escrit-rio.webp" alt="escrit-rio" ></a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mapa">
	    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0886188001514!2d-47.055270224988924!3d-23.636997178747883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf096c403d2083%3A0x7875ad8192de631c!2sCasa%20de%20Repouso%20Lar%20Margaridas!5e0!3m2!1spt-BR!2sbr!4v1684941497477!5m2!1spt-BR!2sbr" width="100%" height="390" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
    </div>
    <a href="https://api.whatsapp.com/send?phone=5511954753062" target="_blank" class="whatsapp-fixo"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>

</div>

<?php

require 'partials/foot.php';
?>