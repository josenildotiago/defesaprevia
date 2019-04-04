function aoClicarOb(){
    $('#auto').attr('rows','3');
}

function aoClicarOb2(){
    $('#fato').attr('rows','3');
}

function aoClicarOb3(){
    $('#merito').attr('rows','3');
}

function aoClicarOb5(){
    $('#decisao').attr('rows','3');
}

function aoClicarOb4(){
    $('#penalidade').attr('rows','3');
}

function aoSairOb(){
    $('#auto').attr('rows','1');
}

function aoSairOb2(){
    $('#fato').attr('rows','1');
}

function aoSairOb3(){
    $('#merito').attr('rows','1');
}

function aoSairOb4(){
    $('#penalidade').attr('rows','1');
}

function aoSairOb5(){
    $('#decisao').attr('rows','1');
}

$(document).ready(function(){

});

//MASCARAS
$(function(){
    $("#data").mask("00/00/0000")
    $("#placa").mask("SSS-0A00")
    $("#cpf").mask("000.000.000-00")
    $("#ano_fab").mask("0000")
    $("#processo").mask("0000/0000")
});


//MODAL 
function editar(){
    //$('#modal').modal('show');
    var artigo = $("input[name=artigo]").val();
    if ($("input[name=artigo]").val()=='') {
        artigo = "Nenhum artigo selecionado.";
    }
    $.ajax({
        url:'http://localhost/defesaprevia/views/modal/dos_fatos.php',
        type:'POST',
        data:{artigo:artigo},
        beforeSend:function(){
            $('#modal').find('.modal-body').html('carregando...');
            $('#modal').modal('show');
        },
        success:function(html){
            $('#modal').find('.modal-body').html(html);
            $('#modal').modal('show');
        }
    });
}

//PEGAR DO BANCO
function pegar(){
    var artigo = $("input[name=artigo]").val();
    $.ajax({
        url:'http://localhost/defesaprevia/views/modal/pegar.php',
        type:'POST',
        data:{artigo:artigo},
        success:function(html){
            $('#penalidade').val(html);
        }
    });
}

//PELO JSON
function pegarPorJson(){
    var artigo = $("input[name=artigo]").val();
    $.ajax({
        url:'http://localhost/defesaprevia/views/modal/pegar.php',
        type:'POST',
        data:{artigo:artigo},
        dataType: 'json',
        success:function(dado){
            console.log(dado);
            
            $('#codigoinfra').val(dado['codigo_init']+'-'+dado['desdobramento_init']);
            $('#penalidade').val(dado['decricao']);
            $('#penalidade').attr('rows','3');
        },
        error:function(){
            $('#penalidade').val('Nenhuma infração encontrada para esse artigo '+artigo);
        }
    });
}