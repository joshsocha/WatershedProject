
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($observation) ) {
    $observation = (array)$observation;
}
$id = isset($observation['id']) ? $observation['id'] : '';
?>
<div class="admin-box">
    <h3>Observation</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('observation_observation_date') ? 'error' : ''; ?>">
            <?php echo form_label('Observation Date'. lang('bf_form_label_required'), 'observation_observation_date', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_observation_date" type="text" name="observation_observation_date"  value="<?php echo set_value('observation_observation_date', isset($observation['observation_observation_date']) ? $observation['observation_observation_date'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_observation_date'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_waterbody') ? 'error' : ''; ?>">
            <?php echo form_label('Waterbody'. lang('bf_form_label_required'), 'observation_waterbody', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_waterbody" type="text" name="observation_waterbody" maxlength="50" value="<?php echo set_value('observation_waterbody', isset($observation['observation_waterbody']) ? $observation['observation_waterbody'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_waterbody'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_watershed') ? 'error' : ''; ?>">
            <?php echo form_label('Watershed'. lang('bf_form_label_required'), 'observation_watershed', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_watershed" type="text" name="observation_watershed" maxlength="50" value="<?php echo set_value('observation_watershed', isset($observation['observation_watershed']) ? $observation['observation_watershed'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_watershed'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_sate_muni') ? 'error' : ''; ?>">
            <?php echo form_label('Sate and Municipality'. lang('bf_form_label_required'), 'observation_sate_muni', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_sate_muni" type="text" name="observation_sate_muni" maxlength="50" value="<?php echo set_value('observation_sate_muni', isset($observation['observation_sate_muni']) ? $observation['observation_sate_muni'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_sate_muni'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_location_long') ? 'error' : ''; ?>">
            <?php echo form_label('Longitude'. lang('bf_form_label_required'), 'observation_location_long', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_location_long" type="text" name="observation_location_long" maxlength="50" value="<?php echo set_value('observation_location_long', isset($observation['observation_location_long']) ? $observation['observation_location_long'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_location_long'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_location_lat') ? 'error' : ''; ?>">
            <?php echo form_label('Latitude'. lang('bf_form_label_required'), 'observation_location_lat', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_location_lat" type="text" name="observation_location_lat" maxlength="50" value="<?php echo set_value('observation_location_lat', isset($observation['observation_location_lat']) ? $observation['observation_location_lat'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_location_lat'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_water_speed') ? 'error' : ''; ?>">
            <?php echo form_label('Water Speed'. lang('bf_form_label_required'), 'observation_water_speed', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
			<input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="very fast" <?php echo set_radio('observation_water_speed', 'very fast'); ?> />
            <label for="observation_water_speed">Very fast</label>
            <input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="fast" <?php echo set_radio('observation_water_speed', 'fast'); ?> />
            <label for="observation_water_speed">Fast</label>
			<input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="slow" <?php echo set_radio('observation_water_speed', 'slow'); ?> />
            <label for="observation_water_speed">Slow</label>
			<input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="very slow" <?php echo set_radio('observation_water_speed', 'very slow'); ?> />
            <label for="observation_water_speed">Very slow</label>
            <span class="help-inline"><?php echo form_error('observation_water_speed'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_water_movement') ? 'error' : ''; ?>">
         <?php echo form_label('Which condition best describes the water movement in the Streamwalk area?'. lang('bf_form_label_required'), 'observation_water_movement', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_water_movement" name="observation_water_movement" type="radio" class="" value="mostly fast throughout" <?php echo set_radio('observation_water_movement', 'mostly fast throughout', TRUE); ?> />
            <label for="observation_water_movement">Mostly fast throughout</label>
            <input id="observation_water_movement" name="observation_water_movement" type="radio" class="" value="changes from fast to slow" <?php echo set_radio('observation_water_movement', 'changes from fast to slow'); ?> />
            <label for="observation_water_movement">Changes from fast to slow</label>
			<input id="observation_water_movement" name="observation_water_movement" type="radio" class="" value="Mostly slow throughout" <?php echo set_radio('observation_water_movement', 'Mostly slow throughout'); ?> />
            <label for="observation_water_movement">Mostly slow throughout</label></span>
            </label>
        </div>



        </div>
       <div class="control-group <?php echo form_error('observation_fish_presence') ? 'error' : ''; ?>">
            <?php echo form_label('Do you see any fish in the stream?'. lang('bf_form_label_required'), 'observation_fish_presence', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_fish_presence" name="observation_fish_presence" type="radio" class="" value="absent" <?php echo set_radio('observation_fish_presence', 'absent', TRUE); ?> />
            <label for="observation_fish_presence">Absent</label>
            <input id="observation_fish_presence" name="observation_fish_presence" type="radio" class="" value="moderately abundant" <?php echo set_radio('observation_fish_presence', 'moderately abundant'); ?> />
            <label for="observation_fish_presence">Moderately abundant</label>
			<input id="observation_fish_presence" name="observation_fish_presence" type="radio" class="" value="abundant" <?php echo set_radio('observation_fish_presence', 'abundant'); ?> />
            <label for="observation_fish_presence">Abundant</label>
            <span class="help-inline"><?php echo form_error('observation_fish_presence'); ?></span>
            </label>
        </div>


        </div>
		<div class="control-group <?php echo form_error('observation_fish_types') ? 'error' : ''; ?>">
            <?php echo form_label('How many types of fish are in the stream'. lang('bf_form_label_required'), 'observation_fish_types', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_fish_types" name="observation_fish_types" type="radio" class="" value="1" <?php echo set_radio('observation_fish_types', '1', TRUE); ?> />
            <label for="observation_fish_types">1</label>
            <input id="observation_fish_types" name="observation_fish_types" type="radio" class="" value="2-4" <?php echo set_radio('observation_fish_types', '2-4'); ?> />
            <label for="observation_fish_types">2-4</label>
			<input id="observation_fish_types" name="observation_fish_types" type="radio" class="" value="4+" <?php echo set_radio('observation_fish_types', '4+'); ?> />
            <label for="observation_fish_types">4+</label>
            <span class="help-inline"><?php echo form_error('observation_fish_types'); ?></span>
            </label>
        </div>
		
		
		<div class="control-group <?php echo form_error('observation_rep_amph_present') ? 'error' : ''; ?>">
            <?php echo form_label('Did you see any amphibians or reptiles?'. lang('bf_form_label_required'), 'observation_rep_amph_present', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_rep_amph_present" name="observation_rep_amph_present" type="radio" class="" value="yes" <?php echo set_radio('observation_rep_amph_present', 'yes', TRUE); ?> />
            <label for="observation_rep_amph_present">Yes</label>
            <input id="observation_rep_amph_present" name="observation_rep_amph_present" type="radio" class="" value="no" <?php echo set_radio('observation_rep_amph_present', 'no'); ?> />
            <label for="observation_rep_amph_present">No</label>
            <span class="help-inline"><?php echo form_error('observation_rep_amph_present'); ?></span>
            </label>
        </div>



        </div>



        </div>
         <div class="control-group <?php echo form_error('observation_tree_shade') ? 'error' : ''; ?>">
            <?php echo form_label('As you consider the stream as a whole, how much of its surface area is shaded by trees?'. lang('bf_form_label_required'), 'observation_tree_shade', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="completely shaded" <?php echo set_radio('observation_tree_shade', 'completely shaded', TRUE); ?> />
            <label for="observation_tree_shade">Completely shaded</label>
            <input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="more than half shaded" <?php echo set_radio('observation_tree_shade', 'more than half shaded'); ?> />
            <label for="observation_tree_shade">More than half shaded</label>
			<input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="less than half shaded" <?php echo set_radio('observation_tree_shade', 'less than half shaded'); ?> />
            <label for="observation_tree_shade">Less than half shaded</label>
			<input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="no shade, or almost none" <?php echo set_radio('observation_tree_shade', 'no shade, or almost none'); ?> />
            <label for="observation_tree_shade">No shade, or almost none</label>
            <span class="help-inline"><?php echo form_error('observation_tree_shade'); ?></span>
            </label>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_left_bank') ? 'error' : ''; ?>">
            <?php echo form_label('Facing Upstream, how mush of the stream bank is covered by plants, rocks and logs? <br><br> Left Bank:'. lang('bf_form_label_required'), 'observation_left_bank', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="completely covered" <?php echo set_radio('observation_left_bank', 'completely covered', TRUE); ?> />
            <label for="observation_left_bank">Completely covered</label>
            <input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="more than half covered" <?php echo set_radio('observation_left_bank', 'more than half covered'); ?> />
            <label for="observation_left_bank">More than half covered</label>
			<input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="less than half covered" <?php echo set_radio('observation_left_bank', 'less than half covered'); ?> />
            <label for="observation_left_bank">Less than half covered</label>
			<input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="no plants, rocks and logs" <?php echo set_radio('observation_left_bank', 'no plants, rocks and logs'); ?> />
            <label for="observation_left_bank">No plants, rocks and logs</label>
            <span class="help-inline"><?php echo form_error('observation_left_bank'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_right_bank') ? 'error' : ''; ?>">
            <?php echo form_label('Facing Upstream, how mush of the stream bank is covered by plants, rocks and logs? <br><br> Right Bank:'. lang('bf_form_label_required'), 'observation_right_bank', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="completely covered" <?php echo set_radio('observation_right_bank', 'completely covered', TRUE); ?> />
            <label for="observation_right_bank">Completely covered</label>
            <input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="more than half covered" <?php echo set_radio('observation_right_bank', 'more than half covered'); ?> />
            <label for="observation_right_bank">More than half covered</label>
			<input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="less than half covered" <?php echo set_radio('observation_right_bank', 'less than half covered'); ?> />
            <label for="observation_right_bank">Less than half covered</label>
			<input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="no plants, rocks and logs" <?php echo set_radio('observation_right_bank', 'no plants, rocks and logs'); ?> />
            <label for="observation_right_bank">More than half covered</label>
            <span class="help-inline"><?php echo form_error('observation_right_bank'); ?></span>
            </label>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_pipes') ? 'error' : ''; ?>">
            <?php echo form_label('Are there any pipes emptying directly into or near the stream?'. lang('bf_form_label_required'), 'observation_pipes', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_pipes" name="observation_pipes" type="radio" class="" value="yes" <?php echo set_radio('observation_pipes', 'yes', TRUE); ?> />
            <label for="observation_pipes">Yes</label>
            <input id="observation_pipes" name="observation_pipes" type="radio" class="" value="no" <?php echo set_radio('observation_pipes', 'no'); ?> />
            <label for="observation_pipes">No</label>
            <span class="help-inline"><?php echo form_error('observation_pipes'); ?></span>
            </label>
        </div>



        </div>
       <div class="control-group <?php echo form_error('observation_pipe_secretion') ? 'error' : ''; ?>">
            <?php echo form_label('if yes to previous question, is there anything coming out of it?'. lang('bf_form_label_required'), 'observation_pipe_secretion', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_pipe_secretion" name="observation_pipe_secretion" type="radio" class="" value="yes" <?php echo set_radio('observation_pipe_secretion', 'yes', TRUE); ?> />
            <label for="observation_pipe_secretion">Yes</label>
            <input id="observation_pipe_secretion" name="observation_pipe_secretion" type="radio" class="" value="no" <?php echo set_radio('observation_pipe_secretion', 'no'); ?> />
            <label for="observation_pipe_secretion">No</label>
            <span class="help-inline"><?php echo form_error('observation_pipe_secretion'); ?></span>
            </label>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_trash') ? 'error' : ''; ?>">
            <?php echo form_label('Is there any trash in or immediately adjacent to the stream?'. lang('bf_form_label_required'), 'observation_trash', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_trash" name="observation_trash" type="radio" class="" value="absent" <?php echo set_radio('observation_trash', 'absent', TRUE); ?> />
            <label for="observation_trash">Absent</label>
            <input id="observation_trash" name="observation_trash" type="radio" class="" value="moderately abundant" <?php echo set_radio('observation_trash', 'moderately abundant'); ?> />
            <label for="observation_trash">moderately abundant</label>
			<input id="observation_trash" name="observation_trash" type="radio" class="" value="moderately abundant" <?php echo set_radio('observation_trash', 'moderately abundant'); ?> />
            <label for="observation_trash">moderately abundant</label>
            <span class="help-inline"><?php echo form_error('observation_trash'); ?></span>
            </label>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_comments') ? 'error' : ''; ?>">
            <?php echo form_label('Comments', 'observation_comments', array('class' => "control-label") ); ?>
            <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'observation_comments', 'id' => 'observation_comments', 'rows' => '5', 'cols' => '80', 'value' => set_value('observation_comments', isset($observation['observation_comments']) ? $observation['observation_comments'] : '') ) )?>
            <span class="help-inline"><?php echo form_error('observation_comments'); ?></span>
        </div>

        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Observation" />
            or <?php echo anchor(SITE_AREA .'/content/observation', lang('observation_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Observation.Content.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('observation_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('observation_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
