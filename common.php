<?php

	function head($title, $pageIndex){
		?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		
		<head>
		
			<title><?=$title?> :: MCG</title>
			<link href="sst.css" type="text/css" rel="stylesheet" />
			
			<link href="img/favicon.png" type="image/png" rel="shortcut icon" />
			
			
			<!-- jQuery -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="slider/js/jquery.min.js"><\/script>')</script>
			
			<script src="resizer.js"></script>

			<?php 
			
			//home page js functions
			if($pageIndex == -100){
			?>
				
				<!-- -->
				<script src="home.js"></script>
				
				<!-- Anything Slider -->
				<link rel="stylesheet" href="slider/css/anythingslider.css">
				<script src="slider/js/jquery.anythingslider.js"></script>

				<!-- AnythingSlider optional extensions -->
				<!-- <script src="slider/js/jquery.anythingslider.fx.js"></script> -->
				<!-- <script src="slider/js/jquery.anythingslider.video.js"></script> -->

				<!-- Add stylesheets here -->
				<link rel="stylesheet" href="http://proloser.github.com/AnythingSlider/css/theme-metallic.css">

				<!-- Older IE stylesheet, to reposition navigation arrows, added AFTER the theme stylesheet above -->
				<!--[if lte IE 7]>
				<link rel="stylesheet" href="http://proloser.github.com/AnythingSlider/css/anythingslider-ie.css" type="text/css" media="screen" />
				<![endif]-->
				
				<script src="slider-options.js"></script>
				
				<!-- end of Anything Slider code -->
				
			<?php
			}
			
			//team page js functions
			if($pageIndex == 2){
			?>
			
				<script src="mousewheel.js"></script>
				<script src="team.js"></script>
			
			<?php
			}
			
			//about page js functions
			if($pageIndex == 3){
			?>
			
				<script src="about.js"></script>
			
			<?php
			}

			//services page js functions
			if($pageIndex == 0){
			?>
			
				<script src="services.js"></script>
			
			<?php
			}
			?>
			
			
			<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-29174152-1']);
			  _gaq.push(['_setDomainName', 'montlakeconsulting.com']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
			
		</head>
		
		<body>
			
			<div id="hat"><!-- top bar that doesn't move -->
				<div> <!-- 960 bumper -->
					<div> <!-- 940 space -->
							<?php
								topnav($pageIndex);
							?>
							
							
							<!--<div id="logo">-->
							<a href="index.php" id="logo">
								<img src="img/logo_text.png" alt"Moltlake Consulting Group" />
							</a>
						<!--	</div>-->
							
							<!--<img src="mcg_logo.png" alt="Montlake Consulting Group logo" />-->
					</div> <!-- 940 space -->
				</div> <!-- hat bumper -->
			</div> <!-- hat -->
			
			<div id="bumper">
			<div id="wrapper">
			<div id="invisibilitycloak"></div>
			<div id="page">
			
			

		<?php 
	}
	
	function topnav($pageIndex){
		
		//home page has page index of -100. 
		//If index is less than 100, need to apply class to give more padding b/c no menu item will be selected
		if($pageIndex < 0){
			$ulClass = ' class="none_selected"';
		} else {
			$ulClass = '';
		}
		
		?>
		
		<ul<?= $ulClass ?>>
		
		<?php
		$counter = 0;
		
		
		$pages = array("services.php" => "Services", "projects.php" => "Projects", "team.php" => "Our Team", "aboutus.php" => "About", "contact.php" => "Contact");
		
		foreach( $pages as $uri => $name){
			if($counter == $pageIndex){
				$class = ' class = "selected"';
			} else {
				$class = '';
			}
			
			$counter++;
			
			?>
				<li<?= $class ?>>
					<a href="<?= $uri ?>"><?= $name ?></a>
				</li>
			<?php
		}
		?>
		</ul>
		<?php
	}

	function footer(){
		?>					
	
		</div><!--page-->
		
		<div id="footer">
			
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="join.php">Join MCG</a>
				</li>
				<li class="last_item">
					<a target="_blank" href="https://sites.google.com/site/mcgmembers">Member Login</a>
				</li>
			</ul>
			
		</div> <!-- footer -->
		</div> <!-- wrapper -->
		</div> <!-- bumper -->
		</body>
		</html>
		<?php
	}
?>




