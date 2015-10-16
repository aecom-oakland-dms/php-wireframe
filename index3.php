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
			<li class="span12">
				<div class="thumbnail">
					<div class="row">
						<div class="span4">
							<img src="http://lorempixel.com/g/600/400/city" alt="" class="img">
						</div>
						<div class="span7">
							<h2>The Zoning Code Evaluation Report has been released</h2>
							<?php include('inc/postdate.php'); ?>
							<p class="lead">The Zoning Code Evaluation Report is filled with recommendations for the new zoning code which have the potential to positively improve the lives of every resident and business owner in Los Angeles. <a href="document.php">Read more</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="span12">
				<div class="thumbnail">
					<div class="row">
						<div class="span7" style="padding-left:20px;">
							<h2>21 Advisors for a 21st Century Los Angeles</h2>
							<?php include('inc/postdate.php'); ?>
							<p class="lead">On November 27, 2013, we announced the names of the individuals selected by Michael J. LoGrande, Director of Planning for the re:code LA Zoning Advisory Committee (ZAC). <a href="article.php">Read more</a></p>
						</div>
						<div class="span4 pull-right">
							<img src="http://lorempixel.com/g/600/400/abstract" alt="" class="img">
						</div>
					</div>
				</div>
			</li>
		</ul>

<?php
	include_once('templates/footer.php'); 
?>