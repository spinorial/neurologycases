var $ = jQuery;

function revealElementById(id, me) {

  // hide the this button and its prompt message
  var $button = $('#' + me.id);
  // $button.parent().hide();
  $button.parent().fadeOut('100', function() {
  	
  });

  // reveal the next element
   $('#' + id).addClass('reveal');



  // scroll to next element
  // scrollToAnchor(nextElementSelector);

}

function scrollToAnchor(anchor_id) {
  var tag = $("#" + anchor_id + "");
  $('html,body').animate({scrollTop: tag.offset().top}, 400);
}

