$(function() { //dom ready
	
	fixWindowSize()
	
	//fixes main dev height on resize
	$(window).resize(fixWindowSize)
	
});

function fixWindowSize(){
	if($(window).width() < 960 ){
		if($('#hat').css('position') != 'static'){
			$('#hat').css('position', 'static')
			$('#invisibilitycloak').hide()
		}
		$('#hat').css('width', '960')
	} else {
		if($('#hat').css('position') != 'fixed'){
			$('#hat').css('position', 'fixed')
			$('#invisibilitycloak').show()
			$('#hat').css('width', '100%')
		}
	}
		
}

