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
    var der = $("input[name=artigo]").val();
    if ($("input[name=artigo]").val()=='') {
        der = "Nenhum artigo selecionado.";
    }
    $.ajax({
        url:'http://localhost/defesaprevia/views/modal/dos_fatos.php',
        type:'POST',
        data:{der:der},
        beforeSend:function(){
            $('#modal').find('.modal-body').html('carregando...');
            $('#modal').modal('show');
        },
        success:function(html){
            $('#modal').find('.modal-body').html(html);
            $('#modal').modal('show');
        }
    });
    //alert(der);
}



//CORREIOS
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    document.getElementById('ibge').value=("");
}
function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    document.getElementById('ibge').value=(conteudo.ibge);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}
function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";
            document.getElementById('ibge').value="...";
            //Cria um elemento javascript.
            var script = document.createElement('script');
            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

$(document).ready(function () {
    handleDOBChanged();
});
//listener on date of birth field
function handleDOBChanged() {
    $('#data').on('change', function () {
        if (isDate($('#data').val())) {
        var age = calculateAge(parseDate($('#data').val()), new Date());
            if (age >= 60) {
                $("#age").val(age + " Anos");
                $("#age").css('color','green');
                $('#zer').attr('disabled', false);
            } else {
                alert("O Usuário Tem: "+age+" Anos!\nPortanto, Data Inferior a 60 Anos!");
                $("#age").css('color','red');
                $('#zer').attr('disabled', true);
                $("#age").val(age + " Anos");
            }
        }else{
            $("#age").val(''); 
        }
    });
}
//convert the date string in the format of dd/mm/yyyy into a JS date object
function parseDate(dateStr) {
    var dateParts = dateStr.split("/");
    return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
}
//is valid date format
function calculateAge (dateOfBirth, dateToCalculate) {
    var calculateYear = dateToCalculate.getFullYear();
    var calculateMonth = dateToCalculate.getMonth();
    var calculateDay = dateToCalculate.getDate();
    var birthYear = dateOfBirth.getFullYear();
    var birthMonth = dateOfBirth.getMonth();
    var birthDay = dateOfBirth.getDate();
    var age = calculateYear - birthYear;
    var ageMonth = calculateMonth - birthMonth;
    var ageDay = calculateDay - birthDay;

    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
        age = parseInt(age) - 1;
    }
    return age;
}
function isDate(txtDate) {
    var currVal = txtDate;
    if (currVal == '')
    return true;
    //Declare Regex
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var dtArray = currVal.match(rxDatePattern); // is format OK?
    if (dtArray == null)
    return false;
    //Checks for dd/mm/yyyy format.
    var dtDay = dtArray[1];
    var dtMonth = dtArray[3];
    var dtYear = dtArray[5];
    if (dtMonth < 1 || dtMonth > 12)
    return false;
    else if (dtDay < 1 || dtDay > 31)
    return false;
    else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
    return false;
    else if (dtMonth == 2) {
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay > 29 || (dtDay == 29 && !isleap))
        return false;
    }
    return true;
}