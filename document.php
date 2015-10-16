<?php 
	$docTitle = "Review Documents";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
  	<div class="span12">
  		
  		<div class="page-header" style="border-bottom:none;">
  			<h1>Zoning Code Evaluation Report <small>v0.5</small></h1>
  			<ul class="nav nav-tabs" style="margin-bottom:0px;">
  				<li class="active"><a href="document2.php">View</a></li>
  				<li><a href="#">Edit</a></li>
  				<li><a href="#">Report</a></li>
  			</ul>
  		</div>

  		<div class="row">
  			<div class="span9">
  				
  				<div class="row">
  					<div class="span3">
  						<form class="form-inline">
								<label><strong>Jump to section</strong>&nbsp;</label>
								<select class="span3">
							  	<option>Section 1: Introduction</option>
							  	<option>Section 2: Residential</option>
									<option>Section 3: Mixed Use</option>
									<option>Section 4: Special</option>
									<option>Section 5: Overlays</option>
									<option>Section 6: Use</option>
									<option>Section 7: General Standards</option>
									<option>Section 8: Subdivisions</option>
									<option>Section 9: Resource Protection</option>
									<option>Section 10: Administration</option>
									<option>Section 11: Building Code</option>
									<option>Section 12: Definitions</option>
							  </select>
							</form>
  					</div>
  					<div class="span3">
  						<label>&nbsp;</label>
  						<div class="btn-toolbar" style="margin-top:0px;">
								<div class="btn-group">
								  <button class="btn"><i class="icon-zoom-in" title="Zoom In"></i></button>
								  <button class="btn"><i class="icon-zoom-out" title="Zoom Out"></i></button>
								</div>
								<div class="btn-group">
								  <button class="btn"><i class="icon-caret-up" title="Page Up"></i></button>
								  <button class="btn docPages">1 of 64</button>
								  <button class="btn"><i class="icon-caret-down" title="Page Down"></i></button>
								</div>
								<div class="btn-group">
								  <button class="btn docDownload"><i class="icon-download-alt" title="Zoom In"></i></button>
								</div>
							</div>
  					</div>
  					<div class="span3">
							<label>&nbsp;</label>
							<form class="form-search">
							  <div class="input-append">
							    <input type="text" class="span2 search-query">
							    <button type="submit" class="btn">Search</button>
							  </div>
							</form>
  					</div>
  				</div>

  				<div id="docCommentViewer">
						<div id="docOverlay" class="visible-desktop">
							<div style="position:absolute;top:10%;left:10%;">
								<a href="#myModal" role="button" data-toggle="modal"><span style="position:absolute;right:7px;top:4px;color:#fff;">14</span></a>
								<i class="icon-comment icon-2x" ></i>
							</div>
							<div style="position:absolute;top:30%;left:45%;">
								<a href="#myModal" role="button" data-toggle="modal"><span style="position:absolute;right:10px;top:4px;color:#fff;">8</span></a>
								<i class="icon-comment icon-2x"></i>
							</div>
							<div style="position:absolute;top:40%;left:25%;">
								<a href="#myModal" role="button" data-toggle="modal"><span style="position:absolute;right:7px;top:4px;color:#fff;">45</span></a>
								<i class="icon-comment icon-2x"></i>
							</div>
							<div style="position:absolute;top:50%;left:95%;">
								<a href="#myModal" role="button" data-toggle="modal"><span style="position:absolute;right:10px;top:4px;color:#fff;">7</span></a>
								<i class="icon-comment icon-2x"></i>
							</div>
							<div style="position:absolute;top:80%;left:15%;">
								<a href="#myModal" role="button" data-toggle="modal"><span style="position:absolute;right:10px;top:4px;color:#fff;">3</span></a>
								<i class="icon-comment icon-2x"></i>
							</div>
						</div>
						<img src="img/doccomment.jpg" style="outline:1px solid #ccc;" />
					</div>

  			</div>
  			<div class="span3">
  				<p class="lead">Please add any comments by September 20th, 2013.</p>
  				<div id="docComments" style="position:relative;">
  					<?php include_once('inc/block_comments.php'); ?>
  				</div>
  			</div>
  		</div>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>