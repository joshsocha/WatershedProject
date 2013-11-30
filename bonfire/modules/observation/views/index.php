<div>
	<h1 class="page-header">Observation</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>

	<table class="table table-striped table-bordered">
		<thead>


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
					<td><?php echo convert_display($field, $value); ?></td>
				<?php endif; ?>

			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

	<?php if($this->auth->has_permission("Observation.Reports.Create")): ?>
		<p><?php echo bbcode(lang('observation_new_button')); ?></p>
	<?php endif; ?>

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
function convert_display($field, $value) {
	// Date fields
	if(strpos($field, 'date') !== false || $field == 'modified_on' || $field == 'created_on') {
		// TODO: Localization!
		if($value == "0000-00-00" || $value == "0000-00-00 00:00:00")
			return "Never";
		else
			return strftime("%B %e, %Y at %l:%M%P", strtotime($value));
	}
	else return $value;
}
//// TODO: Move this into an autoloaded Bonfire helper (CI helper)
//// TODO: Use PHP's builtin bbcode_create, bbcode_addelement, and bbcode_parse instead!
//function bbcode($s) {
//	// Complex replacements, such as parameterized codes
//	$patterns = array(
//		'/\[url=([^\s]*)\](.*)\[\/url\]/i', // [url=someurl]link text[/url]
//	);
//	$replacements = array(
//		function($matches) {
//			return '<a href="' . str_replace('%2F', '/', urlencode($matches[1])) . '">' . $matches[2] . '</a>';
//		}
//	);
//	foreach($patterns as $i => $p) {
//		$s = preg_replace_callback($p, $replacements[$i], $s, -1);
//	}
//
//	// Simpler searches, such as [b]
//	$s = str_replace('[b]', '<b>', $s);
//	$s = str_replace('[/b]', '</b>', $s);
//	return $s;
//}
?>