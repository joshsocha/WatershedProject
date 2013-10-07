
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
        <div class="control-group <?php echo form_error('observation_description') ? 'error' : ''; ?>">
            <?php echo form_label('Description'. lang('bf_form_label_required'), 'observation_description', array('class' => "control-label") ); ?>
            <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'observation_description', 'id' => 'observation_description', 'rows' => '5', 'cols' => '80', 'value' => set_value('observation_description', isset($observation['observation_description']) ? $observation['observation_description'] : '') ) )?>
            <span class="help-inline"><?php echo form_error('observation_description'); ?></span>
        </div>

        </div>
        <div class="control-group <?php echo form_error('observation_obs_date') ? 'error' : ''; ?>">
            <?php echo form_label('Observation Date'. lang('bf_form_label_required'), 'observation_obs_date', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_obs_date" type="text" name="observation_obs_date"  value="<?php echo set_value('observation_obs_date', isset($observation['observation_obs_date']) ? $observation['observation_obs_date'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_obs_date'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_obs_location') ? 'error' : ''; ?>">
            <?php echo form_label('Location of Observation'. lang('bf_form_label_required'), 'observation_obs_location', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="observation_obs_location" type="text" name="observation_obs_location" maxlength="150" value="<?php echo set_value('observation_obs_location', isset($observation['observation_obs_location']) ? $observation['observation_obs_location'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('observation_obs_location'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('observation_anonymous') ? 'error' : ''; ?>">
            <?php echo form_label('Remain Anonymous', 'observation_anonymous', array('class' => "control-label") ); ?>
            <div class='controls'>
            <label class="checkbox" for="observation_anonymous">
            <input type="checkbox" id="observation_anonymous" name="observation_anonymous" value="1" <?php echo (isset($observation['observation_anonymous']) && $observation['observation_anonymous'] == 1) ? 'checked="checked"' : set_checkbox('observation_anonymous', 1); ?>>
            <span class="help-inline"><?php echo form_error('observation_anonymous'); ?></span>
            </label>

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
