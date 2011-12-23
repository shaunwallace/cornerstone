/*
$(document).ready(function() {

	$('.read_more_links').click(function() {
		$('.read_more_links').fadeToggle('fast', 'swing', function() {
			$('#charleston_long_desc').fadeToggle('slow', 'swing');
		});
	});
	
	$('.read_less_links').click(function() {
  		$('#charleston_long_desc').fadeToggle('slow', 'swing', function() {
  			$('.read_more_links').fadeToggle('slow', 'swing');
  		});
	});

});

*/

function toggleText( hideTextID, flag ) {
	
	var showLink = $(this).attr('class');
	var hideLink = '.read_less_links';

	if(flag) {
		$( showLink ).fadeToggle( 'fast', 'swing', function() {
			$( '#' + hideTextID ).fadeToggle( 'slow', 'swing');
		});
	}else if(!flag){
		$( '#' + hideTextID ).fadeToggle( 'slow', 'swing', function() {
			$( showLink ).fadeToggle( 'slow', 'swing');
		});
	}
}






