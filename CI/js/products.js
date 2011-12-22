$(document).ready(function() {
	$('.read_more_links').click(function() {
	  	$('.read_more_links').toggle('fast', function() {
  			$('#charleston_more_text').slideToggle('slow', 'swing');	  	
	  	});
	});
	
	$('.read_less_links').click(function() {
	  	
  		$('#charleston_more_text').fadeToggle('fast', 'swing', function() {
  			$('.read_more_links').toggle('slow', 'linear');
  		});
	});
});
