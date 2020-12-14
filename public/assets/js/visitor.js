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

  $('.showCPF').mask("999.999.999-99");
  $(".form-control.cpfOuCnpj").mask("999.999.999-99");
  $('.form-control.cpfOuCnpj').blur(function () {
    var id=$(this).attr("id");
    var val=$(this).val();
    var pattern = new RegExp(/[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}/);

    if(val.match(pattern) == null){
      $("#"+id+"_error").html("Digite um CPF válido");
    }
  });
});