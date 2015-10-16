<?php 
	$docTitle = "Article";
	$secURL = "updates";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>

	<div class="row">
  	<div class="span3">
  		
  		<?php 
  			include_once('inc/block_submenu.php');
  			include_once('inc/block_archives.php');
  			include_once('inc/block_newsletter.php'); 
  		?>
  		
  	</div>
  	<div class="span9">
  		
  		<div class="page-header">
  			<h1>Article Title</h1>
  		</div>
  		<?php include_once('inc/postdate.php'); ?>
  		<p><img src="http://lorempixel.com/g/680/240" class="img img-polaroid"></p>
			<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	    <blockquote>
	    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
	    	<small>Someone famous in <cite title="Book Title">Book Title</cite></small>
	    </blockquote>
	    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			<?php include_once('inc/tags.php'); ?>
			<?php include_once('inc/block_comments.php'); ?>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>