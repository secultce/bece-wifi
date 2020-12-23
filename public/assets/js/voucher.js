$(document).ready(function($){
    $('.showCPF').mask("999.999.999-99");
});


$(document).ready(function(){
    $('#myTable').dataTable({
        "pagingType": "simple",
        "language": {
            "url": 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
        }
    });
       
});