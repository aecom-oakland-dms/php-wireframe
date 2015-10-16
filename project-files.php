<?php 
	$docTitle = "Project Files";
	$secURL = "about";
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
  			<h1>Project Files</h1>
  		</div>
			<p class="lead"><img src="http://lorempixel.com/g/300/200/city" class="img-polaroid pull-right" style="margin: 0 0 0 10px;">Looking for a one-stop shop for all of our reports, handouts, presentations, etc.?  Here you can download project-related documents and files as they become available. The official City Clerk file for this project is Council File Number 12-0460; any transmittals to the City Council from anyone other than the project team will be made available on that file's webpage.</p>
	    
			<div class="accordion" id="accordion">
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			        1. Project Initiation
			      </a>
			    </div>
			    <div id="collapse1" class="accordion-body collapse">
			      <div class="accordion-inner">
			      	<p><strong>Updated on  10/3/2014</strong></p>
			      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			        <?php include('inc/fileattachments.php'); ?>
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
			        2. Zoning Code Evaluation
			      </a>
			    </div>
			    <div id="collapse2" class="accordion-body collapse">
			      <div class="accordion-inner">
			      	<p><strong>Updated on  12/16/2014</strong></p>
			      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			        <?php include('inc/fileattachments.php'); ?>
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
			        3. Zoning Code Approach
			      </a>
			    </div>
			    <div id="collapse3" class="accordion-body collapse">
			      <div class="accordion-inner">
			      	<p><strong>Updated on  2/20/2015</strong></p>
			      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			        <?php include('inc/fileattachments.php'); ?>
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
			        4. Downtown Approach
			      </a>
			    </div>
			    <div id="collapse4" class="accordion-body collapse">
			      <div class="accordion-inner">
			      	<p><strong>Updated on  2/4/2015</strong></p>
			      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			        <?php include('inc/fileattachments.php'); ?>
			      </div>
			    </div>
			  </div>
			</div>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>