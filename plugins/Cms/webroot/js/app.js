$(document).ready(function() {

    $('.table-datatable').dataTable({
        aaSorting : [[0, 'desc']]
    });

    $(".validate").validate();
});