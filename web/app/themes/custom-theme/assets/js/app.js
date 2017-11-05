var $ = jQuery;



// $('.prompt-button').click(function() {
//      alert($(this).attr('id'));
// });

function revealContent(){

	var buttonid = event.target.id;
	var contentid = buttonid.replace('button','content');
	var promptid = buttonid.replace('button','prompt');
	
	$('#'+contentid).fadeIn('1000', function() {

		$('#'+buttonid).fadeOut('1000', function() {
			
		});;
		
	});
}