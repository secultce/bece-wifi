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
        "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
        "infoFiltered":   "(filtered from _MAX_ total entries)",
    });
});

$(document).ready(function($){
    $('#cpf').mask("999.999.999-99");
   //Executa a requisição quando o campo username perder o foco
   $('#cpf').blur(function()
   {
       var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();
       
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

               $('#cpf').val('');
               $('#cpf').focus();
           }
       }
       else
       {
           alert('CPF inválido:' + cpf);

           $('#cpf').val('');
           $('#cpf').focus();
       }
   });

  
  // $('.form-control.cpfOuCnpj').blur(function () {
  //   var id=$(this).attr("id");
  //   var val=$(this).val();
  //   var pattern = new RegExp(/[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}/);

  //   if(val.match(pattern) == null){
  //     $("#"+id+"_error").html("Digite um CPF válido");
  //   }
  // });
});