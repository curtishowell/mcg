$(function() { //dom ready
	$('.member_grid').click(function(){
		var needle = '.' + $(this).attr("id")
		$(needle).show('medium')
		$(needle).addClass('white_party_display')
		
		addClosers(); //adds functions to close the displayed MCGer
	})
	
	//two ways to close- click on the x in the upper-right or click on the white party
	function addClosers(){
		
		//clicking the X closes the white party
		$('.white_closer').click(function(){
			$('.white_party_display').hide('medium')
			$('.white_party_display').removeClass('white_party_display')
		
		});
		
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { // esc
				$('.white_party_display').hide('medium')
				$('.white_party_display').removeClass('white_party_display')
			}
		});
		
		//clicking outside the inner party closes the displayed white party
		$('.white_party_display').click(function(){
			$(this).hide("medium")
			$(this).removeClass('white_party_display')
		}).children().click(function(e) {
			return false;
		});
		
		//clicking on twitter and linkedin images works
		$('.white_party_display a').click(function(){
			window.location=$(this).attr('href')
		});
	}
	

	//scrolling shit
	$(".white_party").bind('mousewheel', function(e, d) {  
		if (d > 0 && $(this).scrollTop() == 0){
			e.preventDefault(); 
		} else {
			if (d < 0 &&  $(this).scrollTop() == $(this).get(0).scrollHeight - $(this).innerHeight())  
				e.preventDefault()
		}
	});
	
});