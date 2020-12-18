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



