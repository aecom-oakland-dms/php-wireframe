<?php 
	$docTitle = "Video Page";
	include_once('templates/header.php'); 
?>
	
	<?php include_once('inc/breadcrumb.php'); ?>
	
	<div class="row">
		<div class="span3">
  		
  		<?php include('inc/block_submenu.php'); ?>
  		<?php include('inc/block_newsletter.php'); ?>

  	</div>
  	<div class="span9">
  		
  		<div class="page-header">
  			<h1>Video Title</h1>
  		</div>
			<?php include('inc/block_video.php'); ?>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	    <?php include_once('inc/tags.php'); ?>
  		<?php include('inc/block_suggestedvideos.php'); ?>
  		
  	</div>
  	
  </div>

<?php include_once('templates/footer.php'); ?>