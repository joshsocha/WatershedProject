<div>
	<h1 class="page-header">
		Observation
		<?php $this->load->view('observation/partials/search'); ?>
	</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>

	<table class="table table-striped table-bordered">
		<thead>

		<!-- TODO: Lang file. -->
		<th>Observation Date</th>
		<th>Waterbody</th>
		<th>Watershed</th>
		<th>State and Municipality</th>
		<th>Comments</th>
		<th>Created</th>
		<th>Modified</th>
        <th>User ID</th>
        <th>Approved</th>
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
					<td>
						<?php if($field == 'observation_observation_date') echo '<a href="'.site_url().'admin/content/observation/view/'.$record['id'].'">' . convert_display($field, $value) . '</a>';
							  else echo convert_display($field, $value); ?>
					</td>
				<?php endif; ?>

			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	<p>
	<?php
		$canCreate = $this->auth->has_permission("Observation.Content.Create");
		$canView   = $this->auth->has_permission("Observation.Content.View");
		if($canCreate) {
			echo '<a href="' . SITE_AREA . '/content/observation/create">' . lang('observation_new_button') . '</a>';
		}
		if($canCreate && $canView) echo '<span class="muted">&nbsp;|&nbsp;</span>';
		if($canView) {
			echo '<a href="' . SITE_AREA . '/content/observation/">' . lang('observation_manage') . '</a>';
		}
	?>
	</p>

	<br/>
	<?php echo theme_view('parts/pagination'); ?>
<?php else:
	echo '<h3>' . lang('observation_no_reports') . '</h3>';
	if($this->auth->has_permission('Observation.Reports.Create')) {
		echo '<p>' . bbcode(lang('observation_ask_create')) . '</p>';
	}
endif; ?>

<?php
// Function to display different value formats nicely
function convert_display($field, $value, $nullDate='Unknown') {
	// Date fields
	if(strpos($field, 'date') !== false || $field == 'modified_on' || $field == 'created_on') {
		// TODO: Localization!
		if($value == "0000-00-00" || $value == "0000-00-00 00:00:00")
			return $field == 'modified_on'? 'Never' : $nullDate;
		else
			return strftime("%B %e, %Y at %l:%M%P", strtotime($value));
	}
	else return $value;
}
?>