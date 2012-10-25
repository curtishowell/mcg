$(function() { //dom ready
	
	//go to correct tab based on hash in url
	var hash = window.location.hash;
	if (hash == '#alumni') {
		
		removeSelected()
		var alumni = $('#menu-1')
		selectMenuItem( alumni )
		showFeature( alumni )
		
	} else if (hash == '#cases') {
		
		removeSelected()
		var caseComps = $('#menu-2')
		selectMenuItem( caseComps )
		showFeature( caseComps )
		
	}
	
	//listeners for sidebar
	$('#sidebar li').click(function(){	

		if( ! $(this).hasClass('selected') ) {
			
			addHash($(this))

			removeSelected()

			selectMenuItem( $(this) )
			
			showFeature( $(this) )
		}
	})
});

function addHash(element) {
	var id = $(element).attr('id')
	if(id == 'menu-0'){
		window.location.hash = '';
	} else if (id == 'menu-1') {
		window.location.hash = 'alumni';
	} else if (id == 'menu-2') {
		window.location.hash = 'cases';
	}
}

function selectMenuItem(element){
	element.addClass('selected')
}

//show the feature corresponding to the passed item
function showFeature(menuItem){
	
		var name = $(menuItem).attr('id').replace('menu','feature');
		
		var nextFeature = $('#' + name)
		nextFeature.toggle()
		nextFeature.removeClass('hide_me')
		nextFeature.addClass('show_me')
}

//removes selected class from the currently displayed sidebar menu item and hides displayed content
function removeSelected(){
	$('#sidebar .selected').removeClass('selected')
	var currentFeature = $('.show_me')
	currentFeature.hide()
	currentFeature.removeClass('show_me')
	currentFeature.addClass('hide_me') //changed from removeClass to addClass 11/19 blindly- didn't test
}