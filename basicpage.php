<?php 
	$docTitle = "Basic Page";
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
  			<h1>Basic Page</h1>
  		</div>
			<p class="lead"><img src="http://lorempixel.com/g/300/200" class="img-polaroid pull-right" style="margin: 0 0 0 10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	    <blockquote>
	    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
	    	<small>Someone famous in <cite title="Book Title">Book Title</cite></small>
	    </blockquote>
	    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			<ul>
				<li>Consectetuer adipiscing elit</li>
				<li>Lorem ipsum dolor</li>
				<li>Sed diam nonummy nibh euismod</li>
				<li>Velit esse molestie consequat</li>
			</ul>
			<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			<?php include_once('inc/fileattachments.php'); ?>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>