<?php 
	$docTitle = "Documents";
	$secURL = "feedback";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
		<div class="span3">
  		
  		<?php 
  			include_once('inc/block_submenu.php');
  			include_once('inc/block_recentcomments.php');
  			include_once('inc/block_newsletter.php'); 
  		?>

  	</div>
  	<div class="span9">
  		
  		<div class="page-header">
  			<h1>MarkUp</h1>
  		</div>
  		<p class="lead">Intro text that introduces the process that the Code Studio and the Department of City Planning are undertaking and listing how the visitor can aid in that process.</p>
			<div class="row">
		    <div class="span5">
		      <div class="well well-small">
		        <h2>Zoning Code Assessment</h2>
		        <h4 class="muted">Version 0.5</h4>
		        <img src="http://lorempixel.com/g/600/300/city/2" alt="" class="img">
						<?php include('inc/postdate.php'); ?>
						<p class="lead">The latest draft is now available for public feedback. Please </p>
						<p><a class="btn btn-primary btn-large" href="document.php">Review and comment</a></p>
		      </div>
		    </div>
		    <div class="span4">
		    	<div class="well well-small">
		        <h3><i class="icon-file-text-alt"></i> Group Documents</h3>
						<p class="lead">Private documents that you have access to.</p>
						<p><a class="btn btn-primary" href="private.php">View documents</a></p>
		      </div>
		      <div class="well well-small">
		        <h3><i class="icon-file-text-alt"></i> Previous Drafts</h3>
						<p class="lead">Scan the previous documents to see how we got where we are.</p>
						<p><a class="btn" href="archive.php">View archives</a></p>
		      </div>
		      <div class="well well-small">
		        <h4><i class="icon-comments-alt"></i> Most Popular Conversations</h4>
						<p class="lead">Find out what other people are saying.</p>
						<p><a class="btn" href="popular.php">View comments</a></p>
		      </div>
		    </li>
			</ul>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>