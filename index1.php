<?php 
	$docTitle = "Welcome";
	$activeNav = "home";
	include_once('templates/header.php');
?>

		<header class="hero-unit">
			<h1>A New Zoning Code for a 21st Century Los Angeles</h1>
			<p>To create livable communities, encourage sustainable development, and foster economic vitality, we need a modern and user-friendly Code—we need to re:code LA.</p>
			<p><a class="btn-large btn-primary" href="#">Engage and learn more.</a></p>
		</header>
		
		<ul class="thumbnails">
	    <li class="span4">
	      <div class="thumbnail">
	        <h2>New version of Zoning Code available</h2>
	        <img src="http://lorempixel.com/g/600/285/city" alt="" class="img">
					<?php include_once('inc/postdate.php'); ?>
					<p class="lead">Join your community in providing feedback on the latest draft of the Zoning Code.</p>
					<p><a class="btn" href="document.php">Read more</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail">
	        <h2>Attend a Listening Session</h2>
					<p class="lead">You are welcome to participate in any of our listening sessions, meetings, workshops, and hearings held throughout the City for your convenience.</p>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="event.php">San Fernando Valley Listening Session (7/9/2013)</a></li>
						<li><a href="event.php">Metro Listening Session (7/10/2013)</a></li>
						<li><a href="event.php">Harbor Area Listening Session (7/11/2013)</a></li>
						<li><a href="event.php">West Los Angeles Listening Session (7/13/2013)</a></li>
					</ul>
					<p><a class="btn" href="events.php">View all</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail">
	      	<h2><a href="#" class="pull-right"><i class="icon-twitter"></i></a> Follow us</h2>
	      	<p class="lead">Did you know that the City of LA has 35 Community Plans?  What does that even mean?  Find out at an upcoming Listening Session <a href="#">#recode</a></p>
	      	<p><em>22 hours ago</em><br/><a href="#">reply</a> | <a href="#">retweet</a> | <a href="#">favorite</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail" style="margin-bottom:6px;">
	        <h2>Newsletter</h2>
	        <form>
						<div class="input-append">
						  <input class="span3" id="appendedInputButtons" type="text" placeholder="Email">
						  <button class="btn" type="button">Send</button>
						</div>
						<span class="help-block">Sign up for regular updates.</span>
					</form>
	      </div>
	    </li>
	  </ul>
	  
<?php
	include_once('inc/block_featuredphoto.php'); 
	include_once('templates/footer.php'); 
?>