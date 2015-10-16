<?php 
	$docTitle = "Welcome";
	$activeNav = "home";
	include_once('templates/header.php');
?>

		<header class="hero-unit">
			<h1>The Zoning Code Evaluation Report has been released</h1>
			<p>The Zoning Code Evaluation Report is filled with recommendations for the new zoning code which have the potential to positively improve the lives of every resident and business owner in Los Angeles.</p>
			<p><a class="btn-large btn-primary" href="#">View the report</a></p>
		</header>
		
		<ul class="thumbnails">
			 <li class="span4">
	      <div class="thumbnail">
	        <h2>About the project</h2>
	        <p><img src="http://lorempixel.com/g/600/285/city/5" alt="" class="img"></p>
					<p class="lead">The City of Los Angeles is providing a modern, web-based version of the new code that is interactive, elegant, personalized, and optimized for mobile devices.</p>
					<p><a class="btn btn-primary" href="basicpage.php">Engage and learn more</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail">
	        <h2>Latest update</h2>
	        <p><img src="http://lorempixel.com/g/600/285/city/2" alt="" class="img"></p>
					<?php include_once('inc/postdate.php'); ?>
					<h4>Roadmap Check: Council, CPC Subcommittee, Ready to Go</h4>
					<p class="lead">At the City Council meeting, staff presented a quarterly report on the status of the overall project.</p>
					<p><a class="btn btn-primary" href="article.php">Read more</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail">
	      	<h2>Project files</h2>
	      	<p class="lead">Keep up to date as new project documents are made available and provide your feedback.</p>
	      	<p><a class="btn btn-primary" href="project-files.php">View all</a></p>
	      </div>
	    </li>
	    <li class="span4">
	      <div class="thumbnail" style="margin-bottom:6px;">
	        <h2>Sign Up for Updates</h2>
	        <form class="form">
						<div class="control-group">
						  <label class="control-label">Email Address</label>
						  <div class="controls">
						  	<input type="text" class="input-xlarge">
						  </div>
						</div>
						<div class="control-group">
						  <div class="controls">
						  	<button type="submit" class="btn btn-primary btn-large">Submit</button>
						  </div>
						</div>
			    </form>
	      </div>
	    </li>
	  </ul>
		
<?php
	include_once('templates/footer.php'); 
?>