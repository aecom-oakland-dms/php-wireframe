<?php 
	$docTitle = "Gallery";
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
  			<h1>Photo Title</h1>
  		</div>
			<div class="row">
				<div class="span6">
					<p><img src="http://lorempixel.com/g/1200/800" alt="" class="img img-polaroid"></p>
				</div>
				<div class="span3">
					<p><?php include_once('inc/fivestar.php'); ?></p>
					<p><strong>Posted in:</strong> <a href="gallery.php">Gallery title</a></p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				</div>
			</div>  
  		<?php include_once('inc/block_comments.php'); ?>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>