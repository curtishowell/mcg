$(function() { //dom ready
	$(".story").hover(
	  function () {
	    $($(this)).children(0)[0].style.textDecoration = 'underline';
		$($(this)).children(0)[3].style.textDecoration = 'underline';
	  },
	  function () {
	    $($(this)).children(0)[0].style.textDecoration = 'none';
		$($(this)).children(0)[3].style.textDecoration = 'none';
	  }
	);
	
	$(".story").click(
	  function () {
	    //window.location = $($(this)).children(0)[3].children(0).href;
		window.location = $(this).find('a').attr('href');
	  }
	);
});