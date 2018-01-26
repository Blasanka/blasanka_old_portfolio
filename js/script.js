/*
$(document).ready(function() {
  $('.navbar-nav li a').click(function(e) {

    $('.navbar-nav li.active').removeClass('active');

    var $parent = $(this).parent();
    $parent.addClass('active');
    e.preventDefault();
	
  });
});

*/

$(function(){
	//navbar active link
	switch(menu){
		case 'About me':
			$('#home').removeClass('active');
			$('#about').addClass('active');
			break;
		case 'My Works':
			$('#home').removeClass('active');
			$('#works').addClass('active');
			break;
		case 'Contact me':
			$('#home').removeClass('active');
			$('#contact').addClass('active');
			break;
		default:
			$('#home').addClass('active');
			break;
	}
	
});