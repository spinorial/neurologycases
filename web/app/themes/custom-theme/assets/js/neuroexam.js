var $ = jQuery;


function revealExamination(){


		$('#neuroexam').css("display","block");
		$('#exambutton').fadeOut('100', function() {
		$('#exambutton').addClass("exambuttonHide");
		$('#examprompt').css("display","none");
		
    });
	
}