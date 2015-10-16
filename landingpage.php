<?php 
	$docTitle = "Landing Page";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>

	<div class="row">
  	<div class="span3">
  		<?php 
  			include_once('inc/block_submenu.php');
				include_once('inc/block_poll.php'); 
  			include_once('inc/block_newsletter.php');
  		?>
  	</div>
  	<div class="span9">
  		<?php include_once('inc/block_slideshow.php'); ?>
			<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			<ul>
				<li>Consectetuer adipiscing elit</li>
				<li>Lorem ipsum dolor</li>
				<li>Sed diam nonummy nibh euismod</li>
				<li>Velit esse molestie consequat</li>
			</ul>
			<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>