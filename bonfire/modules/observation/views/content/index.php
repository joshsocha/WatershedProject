<div class="admin-box">
	<h3>Observation</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Observation.Content.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
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
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Observation.Content.Delete')) : ?>
				<tr>
					<td colspan="21">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('observation_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Observation.Content.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->id ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Observation.Content.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/content/observation/edit/'. $record->id, '<i class="icon-pencil">&nbsp;</i>' .  $record->observation_observation_date) ?></td>
				<?php else: ?>
				<td><?php echo $record->observation_observation_date ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->observation_waterbody?></td>
				<td><?php echo $record->observation_watershed?></td>
				<td><?php echo $record->observation_sate_muni?></td>
				<td><?php echo $record->observation_location_long?></td>
				<td><?php echo $record->observation_location_lat?></td>
				<td><?php echo $record->observation_water_speed?></td>
				<td><?php echo $record->observation_water_movement?></td>
				<td><?php echo $record->observation_fish_presence?></td>
				<td><?php echo $record->observation_rep_amph_present?></td>
				<td><?php echo $record->observation_fish_types?></td>
				<td><?php echo $record->observation_tree_shade?></td>
				<td><?php echo $record->observation_left_bank?></td>
				<td><?php echo $record->observation_right_bank?></td>
				<td><?php echo $record->observation_pipes?></td>
				<td><?php echo $record->observation_pipe_secretion?></td>
				<td><?php echo $record->observation_trash?></td>
				<td><?php echo $record->observation_comments?></td>
				<td><?php echo $record->created_on?></td>
				<td><?php echo $record->modified_on?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="21">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>