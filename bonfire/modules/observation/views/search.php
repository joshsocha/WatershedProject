<div>
	<h1 class="page-header">Observation Search</h1>
</div>

<?php $this->load->view('observation/partials/search'); ?>
<h3><?php
if(isset($query) && !empty($query))
	echo 'Search results for "'.$query.'"';
else
	echo 'Search Observations';
?>
</h3>

<?php
if(!isset($query) || empty($query)) { echo '<p>Please enter a search term.</p>'; die(); }
if(!isset($records) || count($records) == 0) { echo '<p>No results.</p>'; die(); }
?>
<table class="table table-striped table-bordered">
<thead>
	<th>Observation Date</th>
	<th>Waterbody</th>
	<th>Watershed</th>
	<th>State and Municipality</th>
	<th>Comments</th>
	<th>Created</th>
	<th>Modified</th>
</thead>
<tbody>
<?php foreach ($records as $record) : ?>
	<?php $record = (array)$record;?>
	<tr>
	<?php foreach($record as $field => $value) : ?>
		
		<?php 
		$toRemove = array(
			'id', 'observation_location_long', 'observation_location_lat',
			'observation_trash', 'observation_water_speed', 'observation_water_movement',
			'observation_fish_presence', 'observation_rep_amph_present', 'observation_fish_types',
			'observation_left_bank', 'observation_right_bank', 'observation_pipes',
			'observation_pipe_secretion', 'observation_tree_shade',
			'observation_anonymous', 'deleted'
		);
		if (!in_array($field,$toRemove)): ?>
			<td><?php echo convert_display($field, $value); ?></td>
		<?php endif; ?>
		
	<?php endforeach; ?>

	</tr>
<?php endforeach; ?>
</table>

<?php function convert_display($field, $value, $nullDate='Unknown') {
	// Date fields
	if(strpos($field, 'date') !== false || $field == 'modified_on' || $field == 'created_on') {
		// TODO: Localization!
		if($value == "0000-00-00" || $value == "0000-00-00 00:00:00")
			return $field == 'modified_on'? 'Never' : $nullDate;
		else
			return strftime("%B %e, %Y at %l:%M%P", strtotime($value));
	}
	else return $value;
} ?>