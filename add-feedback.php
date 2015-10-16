<?php 
	$docTitle = "Create Feedback";
	include_once('templates/header.php'); 
?>

	<div class="row">
  	<div class="span12">
  		
  		<div class="page-header">
  			<h1>Create Feedback</h1>
  		</div>
  		<div class="row visible-desktop">
  			<div class="span4">
  				<div class="well" style="padding:7px;">
  					<?php include('inc/form_location.php'); ?>
  				</div>
  			</div>
  			<div class="span4">
  				<div class="well" style="padding:10px;">
  					<?php include('inc/form_photo.php'); ?>
  				</div>
  			</div>
  			<div class="span4">
  				<div class="well" style="padding:10px;">
  					<?php include('inc/form_description.php'); ?>
  				</div>
  			</div>
  		</div>
  		<div class="hidden-desktop">
				<ul class="nav nav-tabs" id="myTab">
	        <li id="step1" class="active"><a href="#tab1" data-toggle="tab">Step 1</a></li>
	        <li id="step2" class=""><a href="#tab2" data-toggle="tab">Step 2</a></li>
	        <li id="step3" class=""><a href="#tab3" data-toggle="tab">Step 3</a></li>
	      </ul>
	      <div class="tab-content">
	        <div class="tab-pane active" id="tab1">
	          <?php include('inc/form_location.php'); ?>
	        </div>
	        <div class="tab-pane" id="tab2">
	          <?php include('inc/form_photo.php'); ?>
	        </div>
	        <div class="tab-pane" id="tab3">
          	<?php include('inc/form_description.php'); ?>
	        </div>
	      </div>
	    </div>
      
  	</div>
  </div>
  
  <div id="geoLocation" class="modal hide fade">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3>Alert</h3>
	  </div>
	  <div class="modal-body">
	    <p>The website "http://recode.la" would like to use your current location.</p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Don't Allow</a>
	    <a href="#" class="btn btn-primary" data-dismiss="modal">Allow</a>
	  </div>
	</div>

<?php include_once('templates/footer.php'); ?>