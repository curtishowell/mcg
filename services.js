$(function() { //dom ready
	$('#sidebar li').click(function(){	

		if( ! $(this).hasClass( 'selected' ) ) {
			$('#sidebar .selected').removeClass('selected');
			$(this).addClass( 'selected' );
			
			var currentFeature = $('.show_me');
			currentFeature.toggle('medium');
			currentFeature.removeClass('show_me');
			currentFeature.removeClass('hide_me');
			
			window.setTimeout(showNext, 500, $(this));
		}
	})
});

//show the feature corresponding to the menu item user selected
function showNext(menuItem){
	
		var name = $(menuItem).attr('id').replace('menu','feature');
		
		var nextFeature = $('#' + name);
		nextFeature.toggle('medium');
		nextFeature.removeClass('hide_me');
		nextFeature.addClass('show_me'); 
}