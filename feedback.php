<?php 
	$docTitle = "Provide Feedback";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
  	<div class="span12">
  		
  		<div class="page-header">
  			<h1>MapIt</h1>
  		</div>
  		<?php if (isset($_REQUEST["ref"])) { ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<br />
			  	<p><i class="fa fa-check fa-2x"></i> <span style="position:relative;top:-4px;">Your feedback has been added.</span></p>
			 	</div>
			<?php } ?>
  		<p class="lead">MapIt organizes your observations of how the Zoning Code has impacted neighborhoods, for better or worse. <a href="add-feedback.php">Submit</a> your own feedback. Select a point to see comments.</p>
  		<div class="row">
  			<div class="span12" id="feedbackMap" style="position:relative;z-index:1;">
  				<div id="feedbackPins" class="visible-desktop" style="position:absolute;float:left;top:0;left:0;width:1200px;height:510px;">
						<i class="icon-compass icon-4x muted" style="position:absolute;top:1%;left:1%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:10%;left:35%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:20%;left:77%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:30%;left:45%;"></i>
						<i id="myPin" class="icon-map-marker icon-2x" style="position:absolute;top:40%;left:25%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:50%;left:55%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:60%;left:70%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:70%;left:75%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:80%;left:25%;"></i>
						<i class="icon-map-marker icon-2x" style="position:absolute;top:90%;left:15%;"></i>
					</div>
					<img src="http://placehold.it/1200x510&text=google map">
  			</div>
  			<div class="span4" id="feedbackText" style="position:relative;z-index:10;display:none;">
  				<div class="well well-small" style="height: 475px;position:relative;">
  					<i class="icon-caret-left icon-4x pull-left hidden-phone" id="feedbackArrow1" style="position:absolute;left:-28px;top:45%;"></i>
  					<i class="icon-caret-left icon-4x pull-left hidden-phone" id="feedbackArrow2" style="position:absolute;right:-40px;top:45%;display:none;"></i>
	  				<h2>My feedback</h2>
	  				<p><?php include('inc/fivestar.php'); ?></p>
	  				<p><strong>Posted in:</strong> <a href="#">Transportation</a></p>
	  				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
	  				<ul class="thumbnails">
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/1" alt="">
			          </a>
			        </li>
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/2" alt="">
			          </a>
			        </li>
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/3" alt="">
			          </a>
			        </li>
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/4" alt="">
			          </a>
			        </li>
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/5" alt="">
			          </a>
			        </li>
			        <li class="span1">
			          <a href="#" class="thumbnail">
			            <img src="http://lorempixel.com/g/160/120/transport/6" alt="">
			          </a>
			        </li>
			      </ul>
			      <p><a href="#" class="btn btn-primary" id="feedbackBtn">Join discussion</a></p>
			    </div>
  			</div>
  			<div class="span4" id="feedbackComments" style="position:relative;z-index:10;height:495px;overflow:scroll;display:none;">
  				<?php include('inc/block_comments.php'); ?>
  			</div>
  		</div>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>