// accept only number -==============================
function allowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}
// data table ===========================================================
// $(document).ready(function() {
//     $('#country_table').dataTable();
// });
$(document).ready(function() {
    $('#country_table').DataTable();
  } );
// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'print']
//     } );
 
//     table.buttons().container()
//         .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
// } );