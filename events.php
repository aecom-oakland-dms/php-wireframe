<?php 
	$docTitle = "Events";
	$secURL = "updates";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
		<div class="span3">

  		<?php
  			include_once('inc/block_submenu.php');
  			include_once('inc/block_newsletter.php'); 
  		?>
  		
  	</div>
  	<div class="span9">
  		
  		<div class="pull-right">
  			<div class="clearfix" style="line-height:10px;">&nbsp;</div>
  			<div class="btn-group pull-right">
				  <button class="btn"><i class="icon-calendar"></i> Subscribe</button>
				</div>
  		</div>
  		<div class="page-header">
  			<h1>Event Calendar</h1>
  		</div>
			<div class="row">
				<div class="span4">
					<ul class="thumbnails">
				    <li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:20%;left:37%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Friday, October 11th 2013<br>
			  					<strong>Time:</strong> 11am
			  				</p>
			  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				    <li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:40%;left:30%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Tuesday, October 15th 2013<br>
			  					<strong>Time:</strong> 3pm
			  				</p>
			  				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				    <li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:60%;left:57%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Wednesday, October 16th 2013<br>
			  					<strong>Time:</strong> 3:30pm
			  				</p>
			  				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				  </ul>
				</div>
				<div class="span4">
					<ul class="thumbnails">
						<li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:60%;left:57%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Thursday, October 31st 2013<br>
			  					<strong>Time:</strong> 3:30pm
			  				</p>
			  				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				    <li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:20%;left:37%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Monday, November 4th 2013<br>
			  					<strong>Time:</strong> 11am
			  				</p>
			  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				    <li class="span4">
				      <div class="thumbnail">
				        <h2><a href="event.php">Event title</a></h2>
				        <div style="position:relative;">
				        	<i class="icon-map-marker icon-2x" style="position:absolute;top:40%;left:30%;"></i>
				        	<img src="http://placehold.it/1200x510&text=google map">
				        </div>
				       	<p class="lead">
			  					<strong>Date:</strong> Tuesday, November 5th 2013<br>
			  					<strong>Time:</strong> 3pm
			  				</p>
			  				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p><a class="btn" href="event.php">Read more</a></p>
				      </div>
				    </li>
				  </ul>
				</div>
				
			</div>
			<?php include_once('inc/pagination.php'); ?>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>