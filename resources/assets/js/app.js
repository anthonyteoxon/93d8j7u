$(function(){
	/***************** TAB */
	$('.nav-pills a').click(function(e){
		e.preventDefault();
		$(this).parents('.nav-pills').find('li').removeClass('active');
		$(this).parent('li').addClass('active');
	});

	/*$('.img-gallery .gallery-item a').click(function(e){
		if( $(this).hasClass('prevent') ) {
			e.preventDefault();
			var href = $(this).attr('href');
			var hash = href.substring(href.indexOf('#')+1);

			$('.'+hash).one("load", function() {

	    	}).attr('src', href).show('slow');
		}
	});*/

	$('.pop').on('click', function(e) {
		e.preventDefault();
		
		var pop = $(this);

		$('.imagepreview').attr('src', pop.attr('href'));
		$('#imagemodal').modal('show');   
	});

	$("img").one("load", function() {
	  // do stuff
	}).each(function() {
	  if(this.complete) $(this).load();
	});
});