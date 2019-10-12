//Make table dinamic
    $(document).ready(function() {
        var table = $("#tableReport").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            pageLength: 25,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true
        });
    }); 
//Make table dinamic