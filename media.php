<?php 
	$docTitle = "Gallery";
	$secURL = "updates";
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
  		
			<div class="page-header">
  			<h1>Gallery</h1>
  		</div>
  		<?php include('inc/block_filter.php'); ?>
  		<ul class="thumbnails">
        <li class="span3">
        	<div class="thumbnail">
        		<i class="icon-play-sign icon-4x" style="color:#fff;position:relative;float:left;top:55px;left:40%;line-height:0px;height:0px;"></i>
        		<img src="http://lorempixel.com/g/360/200" alt="">
        		<a href="video.php">Video title</a>
        		<p>Video caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/cats" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/people" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/city" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/fashion" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/nature" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li><br /><li class="span3">
        	<div class="thumbnail">
        		<i class="icon-play-sign icon-4x" style="color:#fff;position:relative;float:left;top:55px;left:40%;line-height:0px;height:0px;"></i>
        		<img src="http://lorempixel.com/g/360/200/nightlife" alt="">
        		<a href="video.php">Video title</a>
        		<p>Video caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<img src="http://lorempixel.com/g/360/200/abstract" alt="">
        		<a href="gallery.php">Gallery title</a>
        		<p>Image gallery caption can go here.</p>
        	</div>
        </li>
        <li class="span3">
        	<div class="thumbnail">
        		<i class="icon-play-sign icon-4x" style="color:#fff;position:relative;float:left;top:55px;left:40%;line-height:0px;height:0px;"></i>
        		<img src="http://lorempixel.com/g/360/200/technics" alt="">
        		<a href="video.php">Video title</a>
        		<p>Video caption can go here.</p>
        	</div>
        </li>
      </ul>
  		<?php include('inc/pagination.php'); ?>
  		
  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>