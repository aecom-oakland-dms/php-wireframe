<?php 
	$docTitle = "Polls";
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
  			<h1>Polls</h1>
  		</div>
  		<p  class="lead">Be an active participant with the work the City of Los Angeles is doing.</p>
			<ul>
				<li><a href="poll.php">When was the current version of the zoning code written?</a> - 19 votes - open</li>
				<li><a href="poll.php">Lorem ipsum dolor sit amet consectetuer elit?</a> - 42 votes - open</li>
				<li><a href="poll.php">Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat?</a> - 93 votes - closed</li>
				<li><a href="poll.php">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper?</a> - 67 votes - closed</li>
				<li><a href="poll.php">Suscipit lobortis nisl ut aliquip ex ea commodo consequat?</a> - 21 votes - closed</li>
				<li><a href="poll.php">Duis autem vel eum iriure dolor in hendrerit in?</a> - 39 votes - closed</li>
				<li><a href="poll.php">Vulputate velit esse molestie consequat?</a> - 25 votes - closed</li>
				<li><a href="poll.php">Vel illum dolore eu feugiat nulla facilisis at vero eros?</a> - 111 votes - closed</li>
				<li><a href="poll.php">Et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril?</a> - 56 votes - closed</li>
				<li><a href="poll.php">Delenit augue duis dolore te feugait nulla facilisi?</a> - 12 votes - closed</li>
			</ul>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>