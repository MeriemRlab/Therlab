$(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "info":     false
    } );
} );


$('#example').on( 'click', 'tbody tr', function () {
  window.location.href = $(this).attr('href');
} );


