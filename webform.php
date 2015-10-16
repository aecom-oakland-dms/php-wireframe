<?php 
	$docTitle = "Webform";
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
			
			<div class="page-header">
	    	<h1>Contact the Team</h1>
	   	</div>
	    <p class="lead">Do you have questions about the project? Let us know.</p>
	    <form class="form">
	    	<div class="control-group">
				  <label class="control-label">First Name</label>
				  <div class="controls">
				  	<input type="text" class="input-xlarge">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Last Name</label>
				  <div class="controls">
				  	<input type="text" class="input-xlarge">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Email Address</label>
				  <div class="controls">
				  	<input type="text" class="input-xlarge">
				  </div>
				</div>
		  	<div class="control-group">
				  <label class="control-label">Comments</label>
				  <div class="controls">
				  	<textarea class="span6" rows="4"></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
				  	<button type="submit" class="btn btn-primary btn-large">Submit</button>
				  </div>
				</div>
	    </form>
	    
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>