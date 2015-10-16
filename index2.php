<?php 
	$docTitle = "Welcome";
	$activeNav = "home";
	include_once('templates/header.php');
?>

	<div class="row">
		<div class="span8">

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="http://lorempixel.com/g/800/500/city/7">
				      <div class="carousel-caption">
				        <h4>The Zoning Code Evaluation Report has been released</h4>
				        <?php include('inc/postdate.php'); ?>
				        <p>The Zoning Code Evaluation Report is filled with recommendations for the new zoning code which have the potential to positively improve the lives of every resident and business owner in Los Angeles. <a href="#">Read More</a></p>
				      </div>
				    </div>
						<div class="item">
				      <img src="http://lorempixel.com/g/800/500/city/9">
				      <div class="carousel-caption">
				        <h4>A New Zoning Code for a 21st Century Los Angeles</h4>
				        <p>To create livable communities, encourage sustainable development, and foster economic vitality, we need a modern and user-friendly Code—we need to re:code LA. <a href="#">Read More</a></p>
				      </div>
				    </div>
				    <div class="item">
				      <img src="http://lorempixel.com/g/800/500/city/10">
				      <div class="carousel-caption">
				        <h4>The Zoning Code Evaluation Report has been released</h4>
				        <?php include('inc/postdate.php'); ?>
				        <p>The Zoning Code Evaluation Report is filled with recommendations for the new zoning code which have the potential to positively improve the lives of every resident and business owner in Los Angeles. <a href="#">Read More</a></p>
				      </div>
				    </div>
				  </div>
				
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <i class="icon-chevron-left" style="font-size:0.5em;position:relative;top:-4px;"></i>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="icon-chevron-right" style="font-size:0.5em;position:relative;top:-4px;"></span>
				  </a>
				</div>
			
			<div class="row">
				<div class="span4">
					<div class="media">
						<h4 class="media-heading"><a href="article.php">A City to Call Home</a></h4>
						<?php include('inc/postdate.php'); ?>
						<div class="media-body">
							<p>Share your experiences of life in Los Angeles as it relates to topics covered in the Zoning Code Evaluation Report. Explore this week’s theme: Housing Affordability &amp; Diversity.</p>
						</div>
					</div>
					<div class="media">
						<h4 class="media-heading"><a href="article.php">How to Use MarkUp</a></h4>
				  	<?php include('inc/postdate.php'); ?>
						<div class="media-body">
							<p>The MarkUp section lets you browse, download, and comment on draft documents at key phases in the project. This is a great opportunity to directly be a part of the re:code LA process.</p>
						</div>
					</div>
					<div class="media">
						<h4 class="media-heading"><a href="article.php">How to Use MarkUp</a></h4>
				  	<?php include('inc/postdate.php'); ?>
						<div class="media-body">
							<p>The contest seeking to award a MapIt user during the month of February has come to a close. We received about 20 submissions in February with topics ranging from mixed-use buildings to car-free neighborhoods.</p>
						</div>
					</div>
					<div class="media">
						<h4 class="media-heading"><a href="article.php">How to MapIt</a></h4>
				 	 	<?php include('inc/postdate.php'); ?>
						<div class="media-body">
							<p>Help guide the development of your neighborhood with MapIt. MapIt is a tool available by the re:code LA team that lets you add feedback, including text and images, to a specific point on a map of Los Angeles.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="media">
						<h4 class="media-heading"><a href="article.php">The 'Zoning Code Evaluation Report' Has Been Released!</a></h4>
				  	<a class="pull-left" href="#">
							<img src="http://lorempixel.com/g/600/400/city/3" class="img img-polaroid media-object">
						</a>
				  	<?php include('inc/postdate.php'); ?>
					</div>
					<div class="media">
						<h4 class="media-heading"><a href="article.php">A City of Distinct Neighborhoods</a></h4>
						<a class="pull-left" href="#">
							<img src="http://lorempixel.com/g/600/400/city/4" class="img img-polaroid media-object">
						</a>
				 	 	<?php include('inc/postdate.php'); ?>
					</div>
				</div>
			</div>

  	</div>
		<div class="span4">
			<?php 
				include_once('inc/block_upcomingevents.php');
				include_once('inc/block_poll.php');
				include_once('inc/block_newsletter.php');
				include_once('inc/block_userlogin.php');
			?>
		</div>
	</div>
		
<?php
	include_once('inc/block_featuredphoto.php'); 
	include_once('templates/footer.php'); 
?>