<?php 
	$docTitle = "Webform";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php'); 
?>
	
	<div class="row">
  	<div class="span3">
  		
  		<?php include_once('inc/block_submenu.php'); ?>
  		<?php include_once('inc/block_poll.php'); ?>
  		<?php include_once('inc/block_newsletter.php'); ?>
  	
  	</div>
  	<div class="span9">
			
			<div class="page-header">
	    	<h1>Survey Title</h1>
	   	</div>
	    <p class="lead">Do you have questions about the project? Let us know.</p>
	    <form>
		    <fieldset>
		    	<legend>Survey Form</legend>
		    	<div class="control-group">
					  <label class="control-label">Full Name</label>
					  <div class="controls">
					  	<input type="text" class="input-xlarge" placeholder="John Doe">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">Email</label>
					  <div class="controls">
					  	<input type="text" class="input-xlarge" placeholder="john.doe@me.com">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">What is your favorite color?</label>
					  <div class="controls">
					  	<label class="radio">
							  <input type="radio" name="optionsRadios" value="option1">
							  Blue
							</label>
							<label class="radio">
							  <input type="radio" name="optionsRadios" value="option2">
							  Red
							</label>
							<label class="radio">
							  <input type="radio" name="optionsRadios" value="option3">
							  Yellow
							</label>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">What is the answer to this question?</label>
					  <div class="controls">
					  	<label class="checkbox">
							  <input type="checkbox" value="">
							  Yes
							</label>
							<label class="checkbox">
							  <input type="checkbox" value="">
							  No
							</label>
							<label class="checkbox">
							  <input type="checkbox" value="">
							  42
							</label>
							<label class="checkbox">
							  <input type="checkbox" value="">
							  Maybe
							</label>
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">Select list</label>
					  <div class="controls">
					  	<select>
							  <option>Option 1</option>
							  <option>Option 2</option>
							  <option>Option 3</option>
							  <option>Option 4</option>
							  <option>Option 5</option>
							</select>
					  </div>
					</div>
			  	<div class="control-group">
					  <label class="control-label">Comments</label>
					  <div class="controls">
					  	<textarea class="span6" rows="4" placeholder="Let us know if you have any questions!"></textarea>
					  </div>
					</div>
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
		    </fieldset>
	    </form>
	    
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>