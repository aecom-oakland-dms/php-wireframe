<?php 
	$docTitle = "My Account";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>

	<div class="row">
  	<div class="span3">
  		
  		<?php include_once('inc/block_submenu.php'); ?>
  		<?php include_once('inc/block_newsletter.php'); ?>
  		
  	</div>
  	<div class="span9">
  		
  		<div class="page-header">
  			<h1>User Account</h1>
  		</div>
  		<img src="http://lorempixel.com/g/140/140/people" class="img-polaroid pull-right">
  		<h3>History</h3>
			<dl> 
			  <dt>Member for</dt>
			  <dd>4 months 2 weeks</dd>
			</dl>
  		
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>