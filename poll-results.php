<?php 
	$docTitle = "Poll Results";
	$secURL = "feedback";
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
  			<h1>When was the current version of the zoning code written?</h1>
  		</div>
			<p>1946 <em class="pull-right">26% (5 votes)</em></p>
			<div class="progress progress-info progress-striped">
			  <div class="bar" style="width: 26%"></div>
			</div>
			<p>1970 <em class="pull-right">63% (12 votes)</em></p>
			<div class="progress progress-info progress-striped">
			  <div class="bar" style="width: 63%"></div>
			</div>
			<p>1992 <em class="pull-right">11% (2 votes)</em></p>
			<div class="progress progress-info progress-striped">
			  <div class="bar" style="width: 11%"></div>
			</div>
			<p><em class="pull-right">Total votes: 19</em></p>
			<p><a href="poll.php" class="btn">Cancel your vote</a></p>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>