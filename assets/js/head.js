$(document).ready(function(){
    function abrirMenu(){
        $('.mobile-menu').css('display', 'flex');
    }
    function fecharMenu(){
        $('.mobile-menu').css('display', 'none');
    }
    
    $('.btnIcon').on('click', function(){
        if($('.mobile-menu').css('display') == 'none'){
           abrirMenu();
        }else{
            fecharMenu();
        }
    })
})