var $ = jQuery;

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


$("button").hover(
	function(){
		 $(this).attr("css","background:blue");
		//$(this).css('color', '#aaa');
		console.log("hover");
	},
	function(){
		$(this).attr("css","background:");
		console.log("hover out");
	});