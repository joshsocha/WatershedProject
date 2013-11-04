
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($help) ) {
    $help = (array)$help;
}
$id = isset($help['id']) ? $help['id'] : '';
?>
<div class="admin-box">
    <h3>Help</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('help_title') ? 'error' : ''; ?>">
            <?php echo form_label('Title'. lang('bf_form_label_required'), 'help_title', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="help_title" type="text" name="help_title" maxlength="1000" value="<?php echo set_value('help_title', isset($help['help_title']) ? $help['help_title'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('help_title'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('help_text') ? 'error' : ''; ?>">
            <?php echo form_label('Text'. lang('bf_form_label_required'), 'help_text', array('class' => "control-label") ); ?>
            <div class='controls'>
            <?php echo form_textarea( array( 'name' => 'help_text', 'id' => 'help_text', 'rows' => '5', 'cols' => '80', 'value' => set_value('help_text', isset($help['help_text']) ? $help['help_text'] : '') ) )?>
            <span class="help-inline"><?php echo form_error('help_text'); ?></span>
        </div>

        </div>
        <div class="control-group <?php echo form_error('help_type') ? 'error' : ''; ?>">
            <?php echo form_label('Type'. lang('bf_form_label_required'), 'help_type', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="help_type" type="text" name="help_type" maxlength="25" value="<?php echo set_value('help_type', isset($help['help_type']) ? $help['help_type'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('help_type'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Help" />
            or <?php echo anchor(SITE_AREA .'/settings/help', lang('help_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Help.Settings.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('help_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('help_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
