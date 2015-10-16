<?php 
	$docTitle = "Archived Documents";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
		<div class="span3">
  		
  		<?php include_once('inc/block_recentcomments.php'); ?>
  		<?php include_once('inc/block_newsletter.php'); ?>

  	</div>
  	<div class="span9">
  		
  		<div class="page-header">
  			<h1>Archived Documents</h1>
  		</div>
  		<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Date posted</th>
						<th>Title</th>
						<th>Version</th>
						<th>Comments</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Jun 4, 2014</td>
						<td><a href="document.php">Lorem ipsum dolor sit amet</a></td>
						<td>0.9</td>
						<td>9</td>
						<td>Open</td>
					</tr>
					<tr>
						<td>Jun 3, 2014</td>
						<td><a href="document.php">Consectetuer adipiscing elit</a></td>
						<td>1.5</td>
						<td>3</td>
						<td>Open</td>
					</tr>
					<tr>
						<td>May 25, 2014</td>
						<td><a href="document.php">Sed diam nonummy nibh euismod tincidunt ut</a></td>
						<td>0.8</td>
						<td>45</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>May 11, 2014</td>
						<td><a href="document.php">Laoreet dolore magna aliquam erat volutpat</a></td>
						<td>1.4</td>
						<td>23</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Apr 28, 2014</td>
						<td><a href="document.php">Ut wisi enim ad minim veniam</a></td>
						<td>1.3</td>
						<td>19</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Apr 10, 2014</td>
						<td><a href="document.php">Quis nostrud exerci tation</a></td>
						<td>1.1</td>
						<td>55</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Feb 14, 2014</td>
						<td><a href="document.php">Ullamcorper suscipit lobortis nisl utt</a></td>
						<td>0.2</td>
						<td>111</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Feb 13, 2014</td>
						<td><a href="document.php">Aliquip ex ea commodo consequat</a></td>
						<td>0.5</td>
						<td>156</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Dec 27, 2013</td>
						<td><a href="document.php">Iriure dolor in hendrerit in vulputate velit esse molestie consequat</a></td>
						<td>0.4</td>
						<td>97</td>
						<td>Closed</td>
					</tr>
					<tr>
						<td>Nov 14, 2013</td>
						<td><a href="document.php">Vel illum dolore eu feugiat nulla</a></td>
						<td>0.4</td>
						<td>64</td>
						<td>Closed</td>
					</tr>
				</tbody>
			</table>
			<?php include_once('inc/pagination.php'); ?>
		
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>