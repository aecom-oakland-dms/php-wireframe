<?php 
	$docTitle = "Review Documents";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
  	<div class="span12">
  		
  		<div class="page-header" style="border-bottom:none;">
  			<h1>Document Title v0.5</h1>
  			<ul class="nav nav-tabs" style="margin-bottom:0px;">
  				<li class="active"><a href="document.php">View</a></li>
  				<li><a href="#">Edit</a></li>
  				<li><a href="report.php">Report</a></li>
  			</ul>
  		</div>

  		<div class="row">
  			<div class="span6">
  				<form class="form-inline">
						<label><strong>Jump to section</strong>&nbsp;</label>
						<select class="input-xlarge">
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
  				<div style="position:relative;">
						<div style="position:absolute;top:0;left:0;right:0;z-index:100;padding:0 10px;">
			  			<div class="btn-toolbar pull-left">
								<div class="btn-group">
								  <button class="btn"><i class="icon-zoom-in" title="Zoom In"></i></button>
								  <button class="btn"><i class="icon-zoom-out" title="Zoom Out"></i></button>
								</div>
								<div class="btn-group">
								  <button class="btn"><i class="icon-caret-up" title="Page Up"></i></button>
								  <button class="btn">1 of 64</button>
								  <button class="btn"><i class="icon-caret-down" title="Page Down"></i></button>
								</div>
							</div>
							<div class="pull-right" style="padding-top:10px;">
								<form class="form-search">
								  <div class="input-append">
								    <input type="text" class="span2 search-query">
								    <button type="submit" class="btn">Search</button>
								  </div>
								</form>
							</div>
			  		</div>
						<div id="annotationPins" class="visible-desktop" style="position:absolute;float:left;top:0;left:0;width:800px;height:800px;">
							<div class="pin" style="position:absolute;top:10%;left:10%;">
								<span style="position:absolute;right:7px;top:4px;color:#fff;">14</span>
								<i class="icon-comment icon-2x" ></i>
								<div class="pin-box" style="position:relative;top:-30px;right:-30px;z-index:100;display:none;">
									<ul class="thumbnails">
									  <li class="span3">
									    <div class="thumbnail" style="background-color:#fff;">
									      <img data-src="holder.js/300x100" alt="">
									      <h4>Comment title</h4>
									      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									      <a href="document.php#comments" class="btn btn-block">Join conversation</a>
									    </div>
									  </li>
									</ul>
								</div>
							</div>
							<div class="pin" style="position:absolute;top:30%;left:45%;">
								<span style="position:absolute;right:10px;top:4px;color:#fff;">8</span>
								<i class="icon-comment icon-2x"></i>
								<div class="pin-box" style="position:relative;top:-30px;right:-30px;z-index:100;display:none;">
									<ul class="thumbnails">
									  <li class="span3">
									    <div class="thumbnail" style="background-color:#fff;">
									      <img data-src="holder.js/300x100" alt="">
									      <h4>Comment title</h4>
									      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									      <a href="document.php#comments" class="btn btn-block">Join conversation</a>
									    </div>
									  </li>
									</ul>
								</div>
							</div>
							<div class="pin" style="position:absolute;top:40%;left:25%;">
								<span style="position:absolute;right:7px;top:4px;color:#fff;">45</span>
								<i class="icon-comment icon-2x"></i>
								<div class="pin-box" style="position:relative;top:-30px;right:-30px;z-index:100;display:none;">
									<ul class="thumbnails">
									  <li class="span3">
									    <div class="thumbnail" style="background-color:#fff;">
									      <img data-src="holder.js/300x100" alt="">
									      <h4>Comment title</h4>
									      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									      <a href="document.php#comments" class="btn btn-block">Join conversation</a>
									    </div>
									  </li>
									</ul>
								</div>
							</div>
							<div class="pin" style="position:absolute;top:50%;left:55%;">
								<span style="position:absolute;right:10px;top:4px;color:#fff;">7</span>
								<i class="icon-comment icon-2x"></i>
								<div class="pin-box" style="position:relative;top:-30px;right:-30px;z-index:100;display:none;">
									<ul class="thumbnails">
									  <li class="span3">
									    <div class="thumbnail" style="background-color:#fff;">
									      <img data-src="holder.js/300x100" alt="">
									      <h4>Comment title</h4>
									      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									      <a href="document.php#comments" class="btn btn-block">Join conversation</a>
									    </div>
									  </li>
									</ul>
								</div>
							</div>
							<div class="pin" style="position:absolute;top:80%;left:15%;">
								<span style="position:absolute;right:10px;top:4px;color:#fff;">3</span>
								<i class="icon-comment icon-2x"></i>
								<div class="pin-box" style="position:relative;top:-30px;right:-30px;z-index:100;display:none;">
									<ul class="thumbnails">
									  <li class="span3">
									    <div class="thumbnail" style="background-color:#fff;">
									      <img data-src="holder.js/300x100" alt="">
									      <h4>Comment title</h4>
									      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
									      <a href="document.php#comments" class="btn btn-block">Join conversation</a>
									    </div>
									  </li>
									</ul>
								</div>
							</div>
						</div>
						<img src="http://placehold.it/800x1000&text=document viewer">
					</div>
  			</div>
  			<div class="span6">
  				<p class="lead">Please add any comments by September 20th, 2013.</p>
  				<div style="overflow:scroll;height:710px;">
  					<?php include_once('inc/block_comments.php'); ?>
  				</div>
  			</div>
  		</div>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>