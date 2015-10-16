<?php 
	$docTitle = "Event Title";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
  	<div class="span3">
  		
  		<?php include_once('inc/block_upcomingevents.php'); ?>
  		<?php include_once('inc/block_newsletter.php'); ?>

  	</div>
  	<div class="span9">

  		<div class="page-header">
  			<h1>Event Title</h1>
  		</div>
			<div class="row">
  			<div class="span6">
  				<p><img src="http://lorempixel.com/g/680/240" class="img img-polaroid"></p>
  				<p class="lead">
  					<strong>Date:</strong> Friday, October 11th 2013<br>
  					<strong>Time:</strong> 11am
  				</p>
  				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					<ul>
						<li>Consectetuer adipiscing elit</li>
						<li>Lorem ipsum dolor</li>
						<li>Sed diam nonummy nibh euismod</li>
						<li>Velit esse molestie consequat</li>
					</ul>
					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
  			</div>
  			<div class="span3">
  				<p><a href="http://maps.google.com" target="_blank"><img src="http://placehold.it/360x360&text=google+map" class="img-polaroid"></a></p>
  				<address>
  					<strong>Location Name</strong><br>
  					123 Street, Room 45<br>
  					Los Angeles, CA 90014
  				</address>
  			</div>
  		</div>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>