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

    <div class="container-fluid">
	    <div class="container">
		    <div class="row">
                <div class="col-sm-12 galeria-home">
                    <h1>Galeria de fotos</h1>
                    <div id="jig1" class="justified-image-grid jig-74f49332d1b92202dbf16d72ab637a2b jig-preset-global" style="width: 940px;"><div class="jig-imageContainer jig-contentID-ML-1340"><div class="jig-overflow" style="opacity: 1; width: 230px; height: 172px;"><a class="jig-link jig-loaded" rel="jig[1]" href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_144139-1.jpg"><img alt="20191105_144139" src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_144139-1.jpg" width="230" height="173" style="width: 230px; height: 173px; margin-top: 0px;"></a></div></div><div class="jig-imageContainer jig-contentID-ML-1338"><div class="jig-overflow" style="opacity: 1; width: 230px; height: 172px;"><a class="jig-link jig-loaded" rel="jig[1]" href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_143824.jpg"><img alt="20191105_143824" src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_143824.jpg" width="230" height="173" style="width: 230px; height: 173px; margin-top: 0px;"></a></div></div><div class="jig-imageContainer jig-contentID-ML-1342"><div class="jig-overflow" style="opacity: 1; width: 231px; height: 172px;"><a class="jig-link jig-loaded" rel="jig[1]" href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191120_114341.jpg"><img alt="20191120_114341" src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191120_114341.jpg" width="231" height="173" style="width: 231px; height: 173px; margin-top: 0px;"></a></div></div><div class="jig-imageContainer jig-contentID-ML-1350 jig-last"><div class="jig-overflow" style="opacity: 1; width: 231px; height: 172px;"><a class="jig-link jig-loaded" rel="jig[1]" href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191125_211231.jpg"><img alt="20191125_211231" src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191125_211231.jpg" width="231" height="173" style="width: 231px; height: 173px; margin-top: 0px;"></a></div></div><div class="jig-clearfix"></div><noscript id="jig1-html" class="justified-image-grid-html" data-lazy-src="skiplazyload" data-src="skipunveillazyload"><ul><li><a href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_144139-1.jpg"><img src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_144139-1.jpg" alt="20191105_144139" width="340" height="255" /></a><p class="jig-HTMLdescription">20191105_144139<br/></p></li><li><a href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_143824.jpg" title="20191105_143824"><img src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191105_143824.jpg" alt="20191105_143824" width="340" height="255" /></a><p class="jig-HTMLdescription">20191105_143824</p></li><li><a href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191120_114341.jpg" title="20191120_114341"><img src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191120_114341.jpg" alt="20191120_114341" width="340" height="255" /></a><p class="jig-HTMLdescription">20191120_114341</p></li><li><a href="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191125_211231.jpg" title="20191125_211231"><img src="https://geriatriadarma.com.br/site/wp-content/uploads/2020/01/20191125_211231.jpg" alt="20191125_211231" width="340" height="255" /></a><p class="jig-HTMLdescription">20191125_211231</p></li></ul></noscript></div>
			    </div>
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