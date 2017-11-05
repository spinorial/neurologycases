var $ = jQuery;

// Reveals hidden data when button is clicked

function revealContent(){

	var buttonid = event.target.id;
	var contentid = buttonid.replace('button','content');
	var promptid = buttonid.replace('button','prompt');
	
	$('#'+contentid).fadeIn('1000', function() {

		$('#'+buttonid).fadeOut('1000', function() {
			
		});

		$('#'+promptid).fadeOut('1000', function() {
			
		});
		
	});
}