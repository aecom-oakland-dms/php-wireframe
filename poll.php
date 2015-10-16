<?php 
	$docTitle = "Poll";
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
			<form action="poll-results.php">
				<label class="radio">
				  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
				  1946
				</label>
				<label class="radio">
				  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				  1970
				</label>
				<label class="radio">
				  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				  1992
				</label>
				<br />
				<button class="btn">Vote</button>
			</form>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>