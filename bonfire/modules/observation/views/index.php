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
		<th>Sate and Municipality</th>
		<th>Longitude</th>
		<th>Latitude</th>
		<th>Water Speed</th>
		<th>Water Movement</th>
		<th>Fish Presence</th>
		<th>Reptiles or Fish Present</th>
		<th>Fish Types</th>
		<th>Tree Shade</th>
		<th>Left Bank</th>
		<th>Right Bank</th>
		<th>Pipes Present</th>
		<th>Pipe Secretion</th>
		<th>Trash</th>
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
				$toRemove = array('id');
				if (in_array($field,$toRemove)): ?>
					<td><?php echo ($field == 'deleted') ? (($value > 0) ? lang('observation_true') : lang('observation_false')) : $value; ?></td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php else:
	echo '<h3>' . lang('observation_no_reports') . '</h3>';
	if($this->auth->has_permission('Observation.Reports.Create')) {
		echo '<p>' . bbcode(lang('observation_ask_create')) . '</p>';
	}
endif; ?>

<?php
// TODO: Move this into an autoloaded Bonfire helper (CI helper)
// TODO: Use PHP's builtin bbcode_create, bbcode_addelement, and bbcode_parse instead!
function bbcode($s) {
	// Complex replacements, such as parameterized codes
	$patterns = array(
		'/\[url=([^\s]*)\](.*)\[\/url\]/i', // [url=someurl]link text[/url]
	);
	$replacements = array(
		function($matches) {
			return '<a href="' . str_replace('%2F', '/', urlencode($matches[1])) . '">' . $matches[2] . '</a>';
		}
	);
	foreach($patterns as $i => $p) {
		$s = preg_replace_callback($p, $replacements[$i], $s, -1);
	}

	// Simpler searches, such as [b]
	$s = str_replace('[b]', '<b>', $s);
	$s = str_replace('[/b]', '</b>', $s);
	return $s;
}
?>