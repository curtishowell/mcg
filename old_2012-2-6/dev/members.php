<?php
	$lines = file("members.txt");
	$members = array(); //array where member data will be stored
	$counter = 0;
	for($i = 0; $i < count($lines); $i += 7){
		$elements = array();
		
		//requires 1 blank line between members
		for($j = 0; $j < 6; $j ++){
			$elements[] = trim( $lines[ $i + $j ] );
		}
		//add firstnamelastname to last index (6) of array for css id use
		$elements[] = strtolower( $elements[ 1 ] . $elements[ 0 ] );
		
		//put a member's data into the members array
		$members[] = $elements;
	}
	
	
	//list of names and majors
	function nameslist(){
		global $members;
		?>
		<table>
		<?php
		foreach($members as $member){

			?>			
			<tr id="<?= $member[6] ?>">
				<td>
					<span><?= $member[1] . " " . $member[0] ?></span>
				</td>
				<td>
					<span><?= $member[2] ?></span>
				</td>
			</tr>
			<?php
		}
	}
	
	//bios w/pictures
	function bios(){
		global $members;
		
		foreach($members as $index => $member){
			$classname = "bios memberBioHidden";
			
			$imageurl = "images/biopics/" . $member[6] . ".jpg";
			?>
			
			<div id="<?= $member[6] ?>bio" class="<?= $classname?>">
				<h2 class="name"><?= $member[1] . " " . $member[0]?></h2>
				<?php if(file_exists($imageurl)){
					?>
					<img src="<?= $imageurl ?>" alt="<?= $member[1] . $member[0] ?>" />
					<?php
				}
				?>
				
				<p><strong>MCG Position</strong><br /><?= $member[2] ?></p>
				<p><strong>Year</strong><br /><?= $member[3] ?></p>
				<p><strong>Major</strong><br /><?= $member[4] ?></p>
				
				<?php
				//if a bio is present, show it
				if($member[5]){
				?>
				<p><strong>Bio</strong><br /><?= $member[5] ?></p>
				<?php } ?>
			</div>
			
			<?php
		
		}
		
	}
?>
			

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultants - Montlake Consulting Group</title>
<link type="text/css" href="menu.css" rel="stylesheet" />
<link rel="shortcut icon" href="favicon.ico" >
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/showhide.js"></script>
<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 

<script type="text/javascript">
$(document).ready(function() {		
	$('#attentiontext2 tr').click(function(){
		//names list
		var newelement = $('#' + this.id);
		$('.memberListSelected').removeClass('memberListSelected');
		newelement.addClass('memberListSelected');		
		
		//featured bio
		$('.memberBioSelected').removeClass('memberBioSelected').addClass('memberBioHidden');
		var newBio = '#' + this.id + 'bio';
		$(newBio).removeClass('memberBioHidden').addClass('memberBioSelected');
	});
	

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
p {
	color: white;
}

.bios {
	padding: none;
}

.bios img {
	float: right;
	margin: 5px;
}

.memberBioSelected{
	display: block;
}

.memberBioHidden {
	display: none;
}

.memberListSelected span{
	background-color: black;
	padding: 2px;
}

.name {
	width: 100%;
	text-align: center;
}

#intro p{
	text-align: center;
	font-size: 16pt;
}

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
	background:transparent url(images/tooltip/white_arrow.png);
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

#MCGLogo img {
	border:none;
}


#attentiontext {
	top:20%;
	left:5%;
	width:400px;
	margin-top: 0px;
	position:absolute;
	z-index:2;
	background-image:url('images/gr-bg-1.png');
	padding: 15px;
	height: 626px;
	overflow: auto;
	color: white;
	font-size: 14pt;
}

#attentiontext h2{
	font-size: 24pt;
	text-align: center;
	text-shadow: 1px 1px 1px #000;
}

#attentiontext img {
	width: 128px;
}

#attentiontext2 {
	top:20%;
	right:5%;
	width:450px;
	height: 626px;
	margin-top: 0px;
	position:absolute;
	z-index:2;
	background-image:url('images/gr-bg-1.png');
	padding: 15px;
	color: white;
}

#attentiontext2 table{
	margin-left: auto;
	margin-right: auto;
}
#attentiontext2 table td{
	padding-right: 10px;
}

#attentiontext2 tr:hover{
	cursor: pointer;
	text-decoration: underline;
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
	dl { width: 600px; }
	dl,dd { margin: 0; }
	dt { font-size: 28px; padding: 5px; margin: 2px; text-shadow: 1px 1px 1px #000; font-family:"Arial Black";  }
	dt a { color: #FFF; text-decoration:none;}
	dd a { color: #000; }
	ul { list-style: none; padding: 5px; }
	


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
<div id="page-background"><img src="images/Site_Elements/blackBGcopy.jpg" width="100%" height="100%" alt="bghoundstooth"></div>
<div id="centercontent"><img width="1200px" src="images/Stock_Photos/puzzle.jpg" alt="puzzle" />
    <div id="tip1">
		<a class="tiplink" title="This is something that has a tool tip now!!! wooooo!"></a>
	 </div>
	<div id="menu">
        <ul class="menu">
            <li><a href="index.html" class="parent"><span>Home</span></a></li>
			<li><a href="about_us.html" class="parent"><span>About Us</span></a>
            </li>
            <li><a href="services.html" class="parent"><span>Services</span></a>
                <ul>
                    <li><a href="services.html#financial" ><span>Financial</span></a>
                    </li>
                    <li><a href="services.html#sales" ><span>Marketing</span></a>
                    </li>
                    <li><a href="services.html#strategy"><span>Operations</span></a></li>
                    <li><a href="services.html#strategy"><span>Strategy</span></a></li>
                    <li><a href="services.html#financial"><span>Accounting</span></a></li>
                    <li><a href="services.html#specialty"><span>Information Systems</span></a></li>
                    <li><a href="services.html#specialty"><span>Human Resources</span></a></li>
                </ul>
            </li>
            <li><a href="past_projects.html"><span>Past Projects</span></a></li>
            <li><a href="members.html"><span>Member Roster</span></a></li>
            <li><a href="news.html"><span>News</span></a></li>
            <li><a href="contact.html"><span>Contact Us</span></a></li>
            <li><a href="join.html"><span>Join Us</span></a></li>
            <li class="last"><a href="member_pages/index.html" class="parent"><span>Member Resources</span></a>
                <ul>
                <li><a href="member_pages/askalumni/index.php"><span>Ask an Alumni</span></a></li>
                <li><a href="member_pages/past_projects.html"><span>Past Project Files</span></a></li>
                <li><a href="member_pages/projmaterials_frameworks.html"><span>Strategic Frameworks</span></a></li>
                <li><a href="member_pages/recruiter_info.html"><span>Recruiter Information</span></a></li>
                <li><a href="member_pages/resume_upload.html"><span>Resume Upload</span></a></li>
                <li><a href="member_pages/marketing_resources.html"><span>Marketing Materials</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    <div id="MCGLogo"><a href="index.html"><img src="images/MCG_Logos/members_08.jpg" width="395" height="137" alt="MCG" /></a></div>
	<div id="attentionwrapper">
		<div id="attentiontext">
		
			<?php
				bios();
			?>
			<div id="intro" class="bios memberBioSelected">
				<h2>
					Welcome to the MCG current member roster
				</h2>
				<p>
					Click on the names to the right to learn more about the team
				</p>
			</div>
			
		</div>
		
		
				
		
		<div id="attentiontext2">
			<?php namesList(); ?>
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
