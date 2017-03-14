$(document).ready(function() {

$('#example').dataTable( {
	 //"bPaginate": false,
	 
    bFilter:false,
	 info: false, 
	 ordering: false,
	 bLengthChange: false,
    "pageLength": 5
});

} );