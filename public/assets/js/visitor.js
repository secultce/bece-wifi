$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function(){
    $('#myTable').dataTable({
        "pagingType": "simple",
        "language": {
            "url": 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
        }
    });
});

$(document).ready(function($){
    $('.cpfOuCnpj').mask("999.999.999-99");
   //Executa a requisição quando o campo username perder o foco
   $('.cpfOuCnpj').blur(function()
   {
       var cpf = $(this).val().replace(/[^0-9]/g, '').toString();
       
       if( cpf.length == 11 )
       {
           var v = [];

           //Calcula o primeiro dígito de verificação.
           v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
           v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
           v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
           v[0] = v[0] % 11;
           v[0] = v[0] % 10;

           //Calcula o segundo dígito de verificação.
           v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
           v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
           v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
           v[1] = v[1] % 11;
           v[1] = v[1] % 10;

           //Retorna Verdadeiro se os dígitos de verificação são os esperados.
           if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
           {
               alert('CPF inválido: ' + cpf);

               $(this).val('');
               $(this).focus();
           }
       }
       else
       {
           alert('CPF inválido:' + cpf);

           $(this).val('');
           $(this).focus();
       }
   });

});