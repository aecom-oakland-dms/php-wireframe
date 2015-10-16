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
  			include_once('inc/block_newsletter.php'); 
  		?>
  		
  	</div>
  	<div class="span9">
			
			<div class="page-header">
  			<h1>Gallery Title</h1>
  		</div>
			<ul class="thumbnails">
        <li class="span4">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/360/270" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/260/120" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/160/120" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/260/120/cats" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/160/120/food" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/260/120/people" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/160/120/city" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/260/120/fashion" alt="">
          </a>
        </li>
        <li class="span2">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/160/120/abstract" alt="">
          </a>
        </li>
        <li class="span3">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/260/120/nightlife" alt="">
          </a>
        </li>
         <li class="span2">
          <a href="photo.php" class="thumbnail">
            <img src="http://lorempixel.com/g/160/120/nature" alt="">
          </a>
        </li>
      </ul>
  		<?php include_once('inc/pagination.php'); ?>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>