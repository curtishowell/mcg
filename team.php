<?php
	include("common.php");
	
	head('Team', 2);
	
?>
	<div id="content">	
		
		<?php
		$teamXML = new DOMDocument();
		$status = $teamXML->load( 'team.xml' );
		$people = $teamXML->getElementsByTagName( "person" );
		
		$features = array();		
		
		$numPeople = $people->length;
		
		for($i = 1; $i <= $numPeople; $i++){
			
			// calculate class names
			if($i % 3 == 0) {
				$cssclass = "member_grid member_grid_third";
			} else {
				$cssclass = "member_grid";
			}
			
			$person = $people->item($i-1);
			
			// extract all data from xml (change if we can't use everything later)
			$fName = trim($person->getElementsByTagName( "firstname" )->item(0)->nodeValue);
			$lName = trim($person->getElementsByTagName( "lastname" )->item(0)->nodeValue);
			$class = trim($person->getElementsByTagName( "class" )->item(0)->nodeValue);
			$m1 = trim($person->getElementsByTagName( "major1" )->item(0)->nodeValue);
			$c1 = trim($person->getElementsByTagName( "concentration1" )->item(0)->nodeValue);
			$m2 = trim($person->getElementsByTagName( "major2" )->item(0)->nodeValue);
			$c2 = trim($person->getElementsByTagName( "concentration2" )->item(0)->nodeValue);
			$bio = trim($person->getElementsByTagName( "bio" )->item(0)->nodeValue);
			$position = trim($person->getElementsByTagName( "position" )->item(0)->nodeValue);
			$projects = trim($person->getElementsByTagName( "projects" )->item(0)->nodeValue);
			$linkedIn = trim($person->getElementsByTagName( "linkedin" )->item(0)->nodeValue);
			$imageThumb = trim($person->getElementsByTagName( "imagethumb" )->item(0)->nodeValue);
			//$imageFull = trim($person->getElementsByTagName( "imagefull" )->item(0)->nodeValue); using file structure to differentiate between thumbs and fulls- should change imageThumb to image
			
			//calculated fields
			$fullName = $fName . " " . $lName;
			
			$thumbURL = "img/team/thumbnails/" . $imageThumb;
			if( !$imageThumb || !is_file( $thumbURL ) ) {
				$thumbURL = "img/team/thumbnails/generic.png"; //should probably be some generic image of the correct dimensions
			}
			
			$heroURL = "img/team/full/" . $imageThumb;
			if( !$imageThumb || !is_file( $heroURL ) ) {
				$heroURL = "img/team/full/generic.png"; //should probably be some generic image of the correct dimensions
			}
			
			
			$cssID = $fName . $i;
			
			
			//Thumbnails
			?>
			<div class="<?= $cssclass ?>" id="<?= $cssID ?>">
				<img src="<?= $thumbURL ?>" alt="Curtis Howell" />
				<p><?= $fullName ?><br />
				<span class="title"><?= $position ?></span>
				</p>
			</div>
			<?php
			
			
			
			//features
			
			$divBuilder = '<div class="white_party ' . $cssID . '"><div class="inner_party"><div class="xParty"><img class="white_closer" src="img/closeX.png" alt="X" /></div><div class="left_party"><img src="' . $heroURL . '" alt="' . $fullName . ' bio image" />';
			
			//there is a linkedin username
			if($linkedIn){
				$divBuilder .= '<p><a href="' . $linkedIn . '"><img class="social_buttons" src="img/social_buttons/linkedin.png" /></a></p>';
			}
			
			$divBuilder .= '</div><div class="right_party"><p class="member_name">' . $fullName . '</p>';
			
			if($position){
				$divBuilder .= '<p><span>MCG Position</span> <br />' . $position . '</p>';
			}
			
			if($projects){
				$divBuilder .= '<p><span>MCG Engagements</span> <br />' . $projects . '</p>';
			}
			
			if($class){
				$divBuilder .= '<p><span>Class</span><br />' . $class . '</p>';
			}
			
			if($m1){
				$divBuilder .= '<p><span>Major</span><br />' . $m1;
				if($c1) {
					$divBuilder .= ' <em>' . $c1 . '</em>';
				}
				
				if($m2) {
					$divBuilder .= '<br />' . $m2;
					if($c2) {
						$divBuilder .= ' <em>' . $c2 . '</em>';
					}
				}
				$divBuilder .= '</p>';
			}
			
			$divBuilder .= '</div>';
			
			$divBuilder .= '<p class="essay">' . $bio . '</p></div></div>';
			
			$features[] = $divBuilder;

		} //end for loop 
		
		?>
		
	</div> <!-- content -->
	
	<!--
	<div class="white_party">
		
		<div class="inner_party">
		
			<div class="xParty">
				<img class="white_closer" src="img/closeX.png" alt="X" />
			</div>
			
			<div class="left_party">
				<img src="img/plus1.jpg" alt"Curtis Howell bio image" />
				<p>
					<a href="http://linkedin.com/curtisjhowell"><img class="social_buttons" src="img/social_buttons/linkedin.png" /></a>
					<a href="http://twitter.com/curtishowell"><img class="social_buttons" src="img/social_buttons/twitter.png" /></a>	
				</p>
			</div>
			
			<div class="right_party">
				<p class="member_name">Curtis Howell</p>
			
				<p>
					<span>MCG Position</span> <br />
					Consultant
				</p>
			
				<p>
					<span>MCG Engagements</span> <br />
					Northgate Bus stop
				</p>

				<p>	
					<span>Class</span><br />
					Senior
				</p>

				<p>	
					<span>Major</span><br />
					Business Administration <em>Entrepreneurship</em>, Informatics
				</p>
			</div>
			
			<p class="essay">
				Curtis is working on degrees in Informatics and Business Administration with a focus in Entrepreneurship. He keeps busy with a number of volunteer activities including serving as Treasurer and Executive Council board member of his fraternity Alpha Delta Phi, as Vice President of the entrepreneurship club of the business school and as a student representative on the Student Technology Fee Committee for the University of Washington. He owns a web and systems development consultancy, advising clients and implementing database-driven solutions across a broad range of industries. In his spare time, Curtis enjoys tennis, golf, skiing and competing in triathlons.
			</p>
		
		</div>
	</div>
	
	-->
	
	<?php
	
	foreach($features as $feature){
		echo $feature;
	}
		
	footer();
?>