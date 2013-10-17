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
				
				<?php if ($field != 'id') : ?>
					<td><?php echo ($field == 'deleted') ? (($value > 0) ? lang('observation_true') : lang('observation_false')) : $value; ?></td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>