<?php 
	$docTitle = "Contact";
	include_once('templates/header.php'); 
	include_once('inc/breadcrumb.php');
?>
	
	<div class="row">
		<div class="span3">
  		
  		<?php include_once('inc/block_submenu.php'); ?>
  		<?php include_once('inc/block_newsletter.php'); ?>
  		
  	</div>
  	<div class="span9">
			
			<div class="page-header">
				<h1>User account</h1>
			</div>
	    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Create new account</a></li>
        <li class=""><a href="#tab2" data-toggle="tab">Log in</a></li>
        <li class=""><a href="#tab3" data-toggle="tab">Request new password</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <form>
						<div class="control-group">
					    <label class="control-label">Username *</label>
					    <div class="controls">
					      <input type="text" class="input-xlarge">
								<span class="help-block">Spaces are allowed; punctuation is not allowed except for periods, hyphens, apostrophes, and underscores.</span>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">E-mail address *</label>
					    <div class="controls">
					      <input type="text" class="input-xlarge">
								<span class="help-block">A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.</span>
					    </div>
					  </div>
						<button type="submit" class="btn">Create new account</button>
			    </form>
        </div>
        <div class="tab-pane" id="tab2">
          <form>
          	<div class="control-group">
					    <label class="control-label">Username *</label>
					    <div class="controls">
					      <input type="text" class="input-xlarge">
								<span class="help-block">Enter your username.</span>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">E-mail address *</label>
					    <div class="controls">
					      <input type="text" class="input-xlarge">
								<span class="help-block">Enter the password that accompanies your username.</span>
					    </div>
					  </div>
						<button type="submit" class="btn">Log in</button>
			    </form>
        </div>
        <div class="tab-pane" id="tab3">
          <form>
						<div class="control-group">
					    <label class="control-label">Request new password *</label>
					    <div class="controls">
					      <input type="text" class="input-xlarge">
					    </div>
					  </div>
					  <button type="submit" class="btn">Request new password</button>
			    </form>
        </div>
      </div>

  	</div>
  </div>

<?php include_once('templates/footer.php'); ?>