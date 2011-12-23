$(document).ready(function() {

/*

function toggleText( showLink, hideLink, hideTextID ) {
	$( showLink ).click(function() {
		$( showLink ).fadeToggle( 'fast', 'swing', function() {
			$( hideTextID ).fadeToggle( 'slow', 'swing');
		});
	});
	
	$( hideLink ).click(function() {
		$( hideTextID ).fadeToggle( 'slow', 'swing', function() {
			$( showLink ).fadeToggle( 'slow', 'swing');
		});
	});
}

*/

	$('.read_more_links').click(function() {
		$('.read_more_links').fadeToggle('fast', 'swing', function() {
			$('#charleston_more_text').fadeToggle('slow', 'swing');
		});
	});
	
	$('.read_less_links').click(function() {
  		$('#charleston_more_text').fadeToggle('slow', 'swing', function() {
  			$('.read_more_links').fadeToggle('slow', 'swing');
  		});
	});

});
