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