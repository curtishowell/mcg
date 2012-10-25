<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ask an Alumni - Member Pages - Montlake Consulting Group</title>
<link type="text/css" href="../../menu.css" rel="stylesheet" />
<link rel="shortcut icon" href="../../favicon.ico" >
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/menu.js"></script>
<script type="text/javascript" src="../../js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/functionAddEvent.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/xmlHttp.js"></script>
<script type="text/javascript">
$(document).ready(function() {		
	
	//Execute the slideShow, set 4 seconds for each images
	slideShow(4000);

});

function slideShow(speed) {


	//append a LI item to the UL list for displaying caption
	$('ul.slideshow').append('<li id="slideshow-caption" class="caption"><div class="slideshow-caption-container"><h3></h3><p></p></div></li>');

	//Set the opacity of all images to 0
	$('ul.slideshow li').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('ul.slideshow li:first').css({opacity: 1.0});
	
	//Get the caption of the first image from REL attribute and display it
	$('#slideshow-caption h3').html($('ul.slideshow a:first').find('img').attr('title'));
	$('#slideshow-caption p').html($('ul.slideshow a:first').find('img').attr('alt'));
		
	//Display the caption
	$('#slideshow-caption').css({opacity: 0.7, bottom:0});
	
	//Call the gallery function to run the slideshow	
	var timer = setInterval('gallery()',speed);
	
	//pause the slideshow on mouse over
	$('ul.slideshow').hover(
		function () {
			clearInterval(timer);	
		}, 	
		function () {
			timer = setInterval('gallery()',speed);			
		}
	);
	
}

function gallery() {


	//if no IMGs have the show class, grab the first image
	var current = ($('ul.slideshow li.show')?  $('ul.slideshow li.show') : $('#ul.slideshow li:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().attr('id') == 'slideshow-caption')? $('ul.slideshow li:first') :current.next()) : $('ul.slideshow li:first'));
		
	//Get next image caption
	var title = next.find('img').attr('title');	
	var desc = next.find('img').attr('alt');	

	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);
	
	//Hide the caption first, and then set and display the caption
	$('#slideshow-caption').animate({bottom:-70}, 300, function () {
			//Display the content
			$('#slideshow-caption h3').html(title);
			$('#slideshow-caption p').html(desc);				
			$('#slideshow-caption').animate({bottom:0}, 500);	
	});		

	//Hide the current image
	current.animate({opacity: 0.0}, 1000).removeClass('show');

}
</script>
<script> 
	$(document).ready(function(){
		$("dd:not(:first)").hide();
		$("dt a").click(function(){
			$("dd:visible").slideUp("slow");
			$(this).parent().next().slideDown("slow");
			return false;
		});
	});
	</script> 
<style type="text/css">
/*tooltips*/
div#tip1 {
	height:200px;
	width:200px;
	position:absolute;
	top:356px;
	right:225px;
	width:50px;
	height:50px;
}
a.tiplink {
	display:block;
	height: 100%; 
}
.tooltip {
	display:none;
	background:transparent url(../../images/tooltip/white_arrow.png);
	font-size:12px;
	height:70px;
	width:160px;
	padding:25px;
	color:#0f0f0f;
	z-index:25;
}
/*layout crap*/
div#centercontent {
	width:1200px; 
	margin: 0 auto;
	position:relative;
	top:0px;
	}
div#menu {
	bottom:1%;
	width:1200px;
	position:fixed;
	z-index:6;
}
#page-background {
	position:fixed; 
	top:0; 
	left:0; 
	width:100%; 
	height:100%;
	z-index:-99;
}
div#slideshow {
	top:55%;
	left:1%;
	width:450px;
	margin-top: 0px;
	position: absolute;
	z-index:2;
}
#MCGLogo {
	top:1%;
	left:1%;
	width:200px;
	margin-top: 0px;
	position:absolute;
	z-index:2;
	
}
#attentiontext {
	top:20%;
	left:10%;
	margin-top: 0px;
	position:absolute;
	z-index:2;
	padding:10px;
	background-image:url('../../images/gr-bg.png');
	width:475px;
}
div#attentiontext h1,p,ul{
	color:#FFFFFF;
	text-shadow: 1px 1px 1px #000;
	font-size:17px;
}
/*slideshow css*/
ul.slideshow {
	list-style:none;
	width:450px;
	height:200px;
	overflow:hidden;
	position:relative;
	margin:0;
	padding:0;
	
}	
ul.slideshow li {
	position:absolute;
	left:0;
	right:0;
}
ul.slideshow li.show {
	z-index:500;	
}
ul img {
	border:none;	
}
#slideshow-caption {
	width:450px;
	height:70px;
	position:absolute;
	bottom:0;
	left:0;	
	color:#fff;
	background:#000;
	z-index:500;
}
#slideshow-caption .slideshow-caption-container {
	padding:5px 10px;		
	z-index:1000;
}
#slideshow-caption h3 {
	margin:0;
	padding:0;	
	font-size:14px;
}
#slideshow-caption p {
	margin:5px 0 0 0;
	padding:0;
}
/*make any div invisible*/
#hideme {
	display:none;
}
/*sliding content box*/
	#attentiontext body { font-family: Arial; font-size: 16px; }
	dl { width: 300px; }
	dl,dd { margin: 0; }
	dt { font-size: 28px; padding: 5px; margin: 2px; text-shadow: 1px 1px 1px #000; font-family:"Arial Black"; background-color:#4e4c4c; }
	dt a { color: #FFF; text-decoration:none;}
	dd a { color: #FFFFFF; text-shadow: 1px 1px 1px #000; text-decoration:none; padding: 5px; font-family:"Arial Black"; }
	ul { list-style: none; padding: 5px; }
</style>
<style type='text/css' media='screen,projection'>
	fieldset { border:0;margin:0;padding:0; }
	label { 
	display:block;
	color:#FFFFFF;
	text-shadow: 1px 1px 1px #000;
	font-size:17px;
	}
	input.text,textarea { width:450px;font:12px/12px 'courier new',courier,monospace;color:#333;padding:3px;margin:1px 0;border:1px solid #ccc; }
	input.submit { padding:2px 5px;font:bold 12px/12px verdana,arial,sans-serif; }
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18917672-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="page-background"><img src="../../images/Site_Elements/blackBGcopy.jpg" width="100%" height="100%" alt="bghoundstooth"></div>
<div id="centercontent"><img width="1200px" src="../../images/Stock_Photos/kayaknavigate.jpg" alt="Kayak" />
     	<div id="menu">
        <ul class="menu">
            <li><a href="../../index.html" class="parent"><span>Home</span></a></li>
			<li><a href="../../about_us.html" class="parent"><span>About Us</span></a>
            </li>
            <li><a href="../../services.html" class="parent"><span>Services</span></a>
                <ul>
                    <li><a href="../../services.html#financial" ><span>Financial</span></a>
                    </li>
                    <li><a href="../../services.html#sales" ><span>Marketing</span></a>
                    </li>
                    <li><a href="../../services.html#strategy"><span>Operations</span></a></li>
                    <li><a href="../../services.html#strategy"><span>Strategy</span></a></li>
                    <li><a href="../../services.html#financial"><span>Accounting</span></a></li>
                    <li><a href="../../services.html#specialty"><span>Information Systems</span></a></li>
                    <li><a href="../../services.html#specialty"><span>Human Resources</span></a></li>
                </ul>
            </li>
            <li><a href="../../past_projects.html"><span>Past Projects</span></a></li>
            <li><a href="../../members.html"><span>Member Roster</span></a></li>
            <li><a href="../../news.html"><span>News</span></a></li>
            <li><a href="../../contact.html"><span>Contact Us</span></a></li>
            <li><a href="../../join.html"><span>Join Us</span></a></li>
           <li class="last"><a href="../index.html" class="parent"><span>Member Resources</span></a>
                <ul>
                <li><a href="../askalumni/index.php"><span>Ask an Alumni</span></a></li>
                <li><a href="../past_projects.html"><span>Past Project Files</span></a></li>
                <li><a href="../projmaterials_frameworks.html"><span>Strategic Frameworks</span></a></li>
                <li><a href="../recruiter_info.html"><span>Recruiter Information</span></a></li>
                <li><a href="../resume_upload.html"><span>Resume Upload</span></a></li>
                <li><a href="../marketing_resources.html"><span>Marketing Materials</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    <div id="MCGLogo"><a href="../../index.html"><img src="../../images/MCG_Logos/members_08.jpg" width="395" height="137" alt="MCG" /></a></div>
	<div id="attentiontext">
	<h1 style="font-size: 28px; padding: 5px; margin: 2px; text-shadow: 1px 1px 1px #000; font-family:'Arial Black'; background-color:#4e4c4c;">Ask an Alumni...</h1>
	<p id="loadBar" style="display:none;">
		<strong>Sending Email to Alumni. Hold on just a sec&#8230;</strong>
		<img src="img/loading.gif" alt="Loading..." title="Sending Email" />
	</p>
	<p id="emailSuccess" style="display:none;">
		<strong style="color:green;">Success! Your Email has been sent.</strong>
	</p>
<div id="contactFormArea">
		<form action="scripts/contact.php" method="post" id="cForm">
			<fieldset>
				<label for="posName">Name:</label>
				<input class="text" type="text" size="25" name="posName" id="posName" />
				<label for="posEmail">Email:</label>
				<input class="text" type="text" size="25" name="posEmail" id="posEmail" />
				<label for="posRegard">Regarding:</label>
				<input class="text" type="text" size="25" name="posRegard" id="posRegard" />
				<label for="posText">Message:</label>
				<textarea cols="50" rows="5" name="posText" id="posText"></textarea>
				<label for="selfCC">
					<input type="checkbox" name="selfCC" id="selfCC" value="send" /> Send CC to self
				</label>
				<label>
					<input class="submit" type="submit" name="sendContactEmail" id="sendContactEmail" value=" Send Email " />
				</label>
			</fieldset>
		</form>
	</div>
	</div>
        <div id="hideme">    
    <a href="http://apycom.com/">Apycom jQuery Menus</a>
    </div>  
</div>
<script> 
$("#tip1 a[title]").tooltip();
</script>
</body>
</html>
