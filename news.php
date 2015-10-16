<?php 
	$docTitle = "News";
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
  		
  		<div class="pull-right">
  			<div class="clearfix" style="line-height:10px;">&nbsp;</div>
  			<div class="btn-group pull-right">
				  <button class="btn"><i class="icon-rss"></i> RSS Feed</button>
				</div>
  		</div>
  		<div class="page-header">
  			<h1>Recent News</h1>
  		</div>
  		<ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Project Status</a></li>
        <li class=""><a href="#tab2" data-toggle="tab">Zoning 101</a></li>
        <li class=""><a href="#tab3" data-toggle="tab">FrameWork</a></li>
      </ul>
  		<div class="tab-content">
        <div class="tab-pane active" id="tab1">
         	<?php include('inc/block_articles.php'); ?>
        </div>
        <div class="tab-pane" id="tab2">
        	<?php include('inc/block_articles.php'); ?>
        </div>
        <div class="tab-pane" id="tab3">
        	<?php include('inc/block_articles.php'); ?>
        </div>
			</div>
			<?php include_once('inc/pagination.php'); ?>
			
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>