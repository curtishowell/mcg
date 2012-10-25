<?php
	include("common.php");
	
	head('Welcome', -100);
	
?>
	<div id="content">
		
		<!-- carousel slider -->
		
		<ul id="slider">
		    
			<?php
			/*
			
			<li>
				<a href="join.php" class="info" style="background-image: url('img/homepage/join.jpg')">
					<div class="words">
						<h3>Now Accepting Applications</h3>
						<p>Learn more about joining our team and apply for a consulting position for the 2012-2013 school year.</p><br />
					</div>
				</a>
			</li>
			
			*/
			?>
			
			<li >
				<a href="team.php" class="info" style="background-image: url('img/homepage/crayons.jpg')">
					<div class="words">
						<h3>Top Talent</h3>
						<p>MCG brings together the best students from a variety of majors and disciplines, including Business, Computer Science, and Engineering. Visit our <strong><em>Member Roster</em></strong> for more info on our team.</p>
					</div>
				</a>
			</li>
			
			<li >
				<a href="aboutus.php#alumni" class="info" style="background-image: url('img/homepage/ladder.jpg')">
					<div class="words">
						<h3>After MCG</h3>
						<p>See where our <strong><em>Alumni</em></strong> have gone on to work after their MCG experiences.</p><br />
					</div>
				</a>			
			</li>
			
			<li>
				<a href="projects.php" class="info" style="background-image: url('img/homepage/phones.jpg')">
					<div class="words">
						<h3>Launch Ready</h3>
						<p>MCG successfully researched and crafted a market entry strategy for a client in the competitive telecom space. Check out some of our other past <strong><em>Projects</em></strong>.</p>
					</div>
				</a>			
			</li>

		</ul>
		
		
		
		<hr />
		
		<div class="story">
			<h2>Who we are</h2>
			<img src="img/promos/paccarbw.jpg" alt="Paccar Hall" />
			<p class="promo">
				Montlake Consulting Group is a student organization at the University of Washington providing consulting services to nonprofits, startups and Fortune 500 companies. 
			</p>
			<p>
				<a href="aboutus.php">Learn more about us</a>
			</p>
		</div>
		
		<div class="story">
			<h2>Work with us</h2>
			<img src="img/promos/handshakebw.jpg" alt="Handshake" />
			<p class="promo">
				With top students, unique perspectives and fresh insights, we help organizations tackle their most pressing problems.
			</p>
			<p>
				<a href="services.php">Explore our services</a>
			</p>
		</div>
		
		<div class="story last_item">
			<h2>Join our team</h2>
			<img src="img/promos/munchkinsbw.jpg" alt="4 Young Munchkins" />
			<p class="promo">
				Looking to gain real-world consulting experience? We are looking for smart, motivated people like you.
			</p>
			<p>
				<a href="join.php">Apply for a position</a>
			</p>
		</div>
		
	</div> <!-- content -->
		
					
<?php
	footer();
?>
