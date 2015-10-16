<?php 
	$docTitle = "Document Report";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
  	<div class="span12">
  		
  		<div class="page-header" style="border-bottom:none;">
  			<h1>Document Title v0.5</h1>
  			<ul class="nav nav-tabs" style="margin-bottom:0px;">
  				<li><a href="document.php">View</a></li>
  				<li><a href="#">Edit</a></li>
  				<li class="active"><a href="report.php">Report</a></li>
  			</ul>
  		</div>
			
			<form>
  			<fieldset>
		  		<div class="row">
		  			<div class="span4">
		  				<p class="lead">Select the specific files and options you wish for the report and click download.</p>
		  				<p>
		  					<strong>Files in document:</strong> 12<br />
								<strong>Total comments:</strong> 345
							</p>
		  			</div>
		  			<div class="span4">
  						<legend>Select files</legend>
  						<div class="checkbox">
							  <label><input type="checkbox" value="" checked> All files</label>
							</div>
  						<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 1: Introduction</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 2: Residential</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 3: Mixed Use</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 4: Special</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 5: Overlays</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 6: Use</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 7: General Standards</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 8: Subdivisions</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 9: Resource Protection</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 10: Administration</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 11: Building Code</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Section 12: Definitions</label>
							</div>
		  			</div>
		  			<div class="span4">
		  				<legend>Choose options</legend>
		  				<div class="radio">
							  <label><input type="radio" name="format" value="" checked> Document with comments</label>
							</div>
			  			<div class="radio">
							  <label><input type="radio" name="format" value=""> Document only</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="format" value=""> Comments only</label>
							</div>
		  			</div>
		  			<div class="span8 offset4">
		  				<div class="form-actions">
		  					<button class="btn btn-primary">Download</button>
		  					<button class="btn btn-default">Cancel</button>
		  				</div>
		  			</div>
		  		</div>
				</fieldset>
  		</form>
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>