$(document).ready(function(){
    function abrirModal(){
        $('#fade').css('display', 'flex');
        $('#modal').css('display', 'flex');
    }

    function fecharModal(){
        $('#fade').css('display', 'none');
        $('#modal').css('display', 'none')
    }

    $('#btnFechar').on('click', function(){
        fecharModal();
    });

    $('#fade').on('click', function(){
        fecharModal();
    })
})