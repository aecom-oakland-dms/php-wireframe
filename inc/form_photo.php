<form style="margin-bottom:23px;">
  <fieldset>
		<legend><span class="hidden-phone"><i class="icon icon-camera"></i> Step 2:</span> Add photos</legend>
		<style>
			@media (max-width:480px) {
				.input-prepend {
					margin-left:1px;
				}
				.input-prepend input.span2,
				.input-append input.span2 {
					width: 110px;
				}
			}
		</style>
		<table class="table">
			<thead>
				<tr>
					<th>File information</th>
					<th>Operations</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="pull-left hidden-phone" style="padding-right:2px;"><i class="icon icon-move"></i> </div>
						<div class="pull-left hidden-phone">
							<img src="http://lorempixel.com/g/50/50/city/1" alt="" class="img">
						</div>
						<div class="pull-left">
							<div style="padding-left:2px;"><a href="#">Photo-001.jpg</a> (1.29 MB)</div>
						</div>
					</td>
					<td><a href="#" class="btn">Remove</a></td>
				</tr>
				<tr>
					<td>
						<div class="pull-left hidden-phone" style="padding-right:2px;"><i class="icon icon-move"></i> </div>
						<div class="pull-left hidden-phone">
							<img src="http://lorempixel.com/g/50/50/city/2" alt="" class="img">
						</div>
						<div class="pull-left">
							<div style="padding-left:2px;"><a href="#">Photo-002.jpg</a> (2.42 MB)</div>
						</div>
					</td>
					<td><a href="#" class="btn">Remove</a></td>
				</tr>
			</tbody>
		</table>
		<label class="control-label">Add a new file</label>
		<div class="input-prepend input-append">
		  <button class="btn" type="button">Choose File</button>
		  <input type="text" class="span2" placeholder="No file chosen">
		  <button class="btn" type="button">Upload</button>
		</div>
		<span class="help-block">Files must be less than 5 MB.<br />Allowed file types: png gif jpg jpeg.</span>
		<button type="submit" class="btn btn-success btn-large hidden-desktop" style="margin-top:20px;">Next <i class="icon icon-arrow-right"></i></button>
	</fieldset>
</form>