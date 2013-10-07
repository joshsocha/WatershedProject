<?php $this->load->helper('form'); ?>
<h1 class="muted">Report</h1>
<hr />

<h2>
	Report 
	<small>A Watershed Health Observation</small>
</h2>
<?php echo form_open('report/submit', array('class' => 'form-horizontal')); ?>
	<input type="hidden" value="<?php echo $observationId; ?>" id="observationId">
	<div class="control-group">
		<label class="control-label" for="inputDate">Date</label>
		<div class="controls">
			<input type="text" id="inputDate" name="inputDate" placeholder="Date">
		</div>
    </div>
	
    <div class="control-group">
		<label class="control-label" for="inputLocation">Location</label>
		 <div class="controls">
			<input type="text" id="inputLocation" name="inputLocation" placeholder="Location">
		</div>
    </div>
	
	<div class="control-group">
		<label class="control-label" for="inputDescription">Description</label> 
		<div class="controls">
			<textarea rows="9" style="width: 500px;" placeholder="Description..." id="inputDescription" name="inputDescription"></textarea>
		</div>
    </div>
	
	<div class="control-group">
		<label class="control-label" for="inputPhotos">Photos(Placeholder)</label>
		<div class="controls">
			<input type="text" id="inputPhotos" placeholder="Photos" name="inputPhotos">
		</div>
    </div>
	
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox" id="inputAnonymous" name="inputAnonymous"> I would like to be anonymous
			</label>
		</div>
    </div>
	
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Submit</button>
		</div>
    </div>
	
</form>