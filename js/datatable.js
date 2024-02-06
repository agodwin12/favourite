$(document).ready(function () {
    $('#example').DataTable();
});

$('#myTable').DataTable( {
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );