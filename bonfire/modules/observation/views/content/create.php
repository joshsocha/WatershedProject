
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
            <input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="option1" <?php echo set_radio('observation_water_speed', 'option1', TRUE); ?> />
            <label for="observation_water_speed">Radio option 1</label>
            <input id="observation_water_speed" name="observation_water_speed" type="radio" class="" value="option2" <?php echo set_radio('observation_water_speed', 'option2'); ?> />
            <label for="observation_water_speed">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_water_speed'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_water_movement') ? 'error' : ''; ?>">
            <?php echo form_label('Water Movement'. lang('bf_form_label_required'), 'observation_water_movement', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_water_movement" name="observation_water_movement" type="radio" class="" value="option1" <?php echo set_radio('observation_water_movement', 'option1', TRUE); ?> />
            <label for="observation_water_movement">Radio option 1</label>
            <input id="observation_water_movement" name="observation_water_movement" type="radio" class="" value="option2" <?php echo set_radio('observation_water_movement', 'option2'); ?> />
            <label for="observation_water_movement">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_water_movement'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_fish_presence') ? 'error' : ''; ?>">
            <?php echo form_label('Fish Presence'. lang('bf_form_label_required'), 'observation_fish_presence', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_fish_presence" name="observation_fish_presence" type="radio" class="" value="option1" <?php echo set_radio('observation_fish_presence', 'option1', TRUE); ?> />
            <label for="observation_fish_presence">Radio option 1</label>
            <input id="observation_fish_presence" name="observation_fish_presence" type="radio" class="" value="option2" <?php echo set_radio('observation_fish_presence', 'option2'); ?> />
            <label for="observation_fish_presence">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_fish_presence'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_rep_amph_present') ? 'error' : ''; ?>">
            <?php echo form_label('Reptiles or Fish Present'. lang('bf_form_label_required'), 'observation_rep_amph_present', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_rep_amph_present" name="observation_rep_amph_present" type="radio" class="" value="option1" <?php echo set_radio('observation_rep_amph_present', 'option1', TRUE); ?> />
            <label for="observation_rep_amph_present">Radio option 1</label>
            <input id="observation_rep_amph_present" name="observation_rep_amph_present" type="radio" class="" value="option2" <?php echo set_radio('observation_rep_amph_present', 'option2'); ?> />
            <label for="observation_rep_amph_present">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_rep_amph_present'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_fish_types') ? 'error' : ''; ?>">
            <?php echo form_label('Fish Types'. lang('bf_form_label_required'), 'observation_fish_types', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_fish_types" name="observation_fish_types" type="radio" class="" value="option1" <?php echo set_radio('observation_fish_types', 'option1', TRUE); ?> />
            <label for="observation_fish_types">Radio option 1</label>
            <input id="observation_fish_types" name="observation_fish_types" type="radio" class="" value="option2" <?php echo set_radio('observation_fish_types', 'option2'); ?> />
            <label for="observation_fish_types">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_fish_types'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_tree_shade') ? 'error' : ''; ?>">
            <?php echo form_label('Tree Shade'. lang('bf_form_label_required'), 'observation_tree_shade', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="option1" <?php echo set_radio('observation_tree_shade', 'option1', TRUE); ?> />
            <label for="observation_tree_shade">Radio option 1</label>
            <input id="observation_tree_shade" name="observation_tree_shade" type="radio" class="" value="option2" <?php echo set_radio('observation_tree_shade', 'option2'); ?> />
            <label for="observation_tree_shade">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_tree_shade'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_left_bank') ? 'error' : ''; ?>">
            <?php echo form_label('Left Bank'. lang('bf_form_label_required'), 'observation_left_bank', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="option1" <?php echo set_radio('observation_left_bank', 'option1', TRUE); ?> />
            <label for="observation_left_bank">Radio option 1</label>
            <input id="observation_left_bank" name="observation_left_bank" type="radio" class="" value="option2" <?php echo set_radio('observation_left_bank', 'option2'); ?> />
            <label for="observation_left_bank">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_left_bank'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_right_bank') ? 'error' : ''; ?>">
            <?php echo form_label('Right Bank'. lang('bf_form_label_required'), 'observation_right_bank', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="option1" <?php echo set_radio('observation_right_bank', 'option1', TRUE); ?> />
            <label for="observation_right_bank">Radio option 1</label>
            <input id="observation_right_bank" name="observation_right_bank" type="radio" class="" value="option2" <?php echo set_radio('observation_right_bank', 'option2'); ?> />
            <label for="observation_right_bank">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_right_bank'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_pipes') ? 'error' : ''; ?>">
            <?php echo form_label('Pipes Present'. lang('bf_form_label_required'), 'observation_pipes', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_pipes" name="observation_pipes" type="radio" class="" value="option1" <?php echo set_radio('observation_pipes', 'option1', TRUE); ?> />
            <label for="observation_pipes">Radio option 1</label>
            <input id="observation_pipes" name="observation_pipes" type="radio" class="" value="option2" <?php echo set_radio('observation_pipes', 'option2'); ?> />
            <label for="observation_pipes">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_pipes'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_pipe_secretion') ? 'error' : ''; ?>">
            <?php echo form_label('Pipe Secretion'. lang('bf_form_label_required'), 'observation_pipe_secretion', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_pipe_secretion" name="observation_pipe_secretion" type="radio" class="" value="option1" <?php echo set_radio('observation_pipe_secretion', 'option1', TRUE); ?> />
            <label for="observation_pipe_secretion">Radio option 1</label>
            <input id="observation_pipe_secretion" name="observation_pipe_secretion" type="radio" class="" value="option2" <?php echo set_radio('observation_pipe_secretion', 'option2'); ?> />
            <label for="observation_pipe_secretion">Radio option 2</label>
            <span class="help-inline"><?php echo form_error('observation_pipe_secretion'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('observation_trash') ? 'error' : ''; ?>">
            <?php echo form_label('Trash'. lang('bf_form_label_required'), 'observation_trash', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="observation_trash" name="observation_trash" type="radio" class="" value="option1" <?php echo set_radio('observation_trash', 'option1', TRUE); ?> />
            <label for="observation_trash">Radio option 1</label>
            <input id="observation_trash" name="observation_trash" type="radio" class="" value="option2" <?php echo set_radio('observation_trash', 'option2'); ?> />
            <label for="observation_trash">Radio option 2</label>
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
            <input type="submit" name="save" class="btn btn-primary" value="Create Observation" />
            or <?php echo anchor(SITE_AREA .'/content/observation', lang('observation_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
