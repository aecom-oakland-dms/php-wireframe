<form action="feedback.php?ref=success" method="POST" style="margin-bottom:9px;">
	<fieldset>
		<legend><span class="hidden-phone"><i class="icon icon-align-left"></i> Step 3:</span> Write feedback</legend>
		<div class="control-group" style="margin-top:0px;">
			<label class="control-label">Title</label>
	  	<input type="text">
		</div>
		<div class="control-group">
			<label class="control-label">Category</label>
	  	<select>
	  		<option value="_none">- None -</option>
	  		<option value="3">Compatibility</option>
	  		<option value="5">Design</option>
	  		<option value="6">Historical</option>
	  		<option value="7">Mobility</option>
	  		<option value="12">Parks</option>
	  		<option value="8">Safety</option>
	  		<option value="9">Uses</option>
	  		<option value="10">Wildlife</option>
	  	</select>
		</div>
		<div class="control-group">
			<label class="control-label">Description</label>
	  	<textarea rows="3" style="width:90%;"></textarea>
		</div>
		<button type="submit" class="btn btn-primary btn-large">Add to MapIt <i class="icon "></i></button>
	</fieldset>
</form>