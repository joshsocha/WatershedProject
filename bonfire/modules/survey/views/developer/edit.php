
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($survey) ) {
    $survey = (array)$survey;
}
$id = isset($survey['id']) ? $survey['id'] : '';
?>
<div class="admin-box">
    <h3>Survey</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('survey_name') ? 'error' : ''; ?>">
            <?php echo form_label('Survey Name'. lang('bf_form_label_required'), 'survey_name', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="survey_name" type="text" name="survey_name" maxlength="255" value="<?php echo set_value('survey_name', isset($survey['survey_name']) ? $survey['survey_name'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('survey_name'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('survey_question') ? 'error' : ''; ?>">
            <?php echo form_label('Question'. lang('bf_form_label_required'), 'survey_question', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="survey_question" type="text" name="survey_question" maxlength="255" value="<?php echo set_value('survey_question', isset($survey['survey_question']) ? $survey['survey_question'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('survey_question'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('survey_active') ? 'error' : ''; ?>">
            <?php echo form_label('Active'. lang('bf_form_label_required'), 'survey_active', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="survey_active" type="text" name="survey_active" maxlength="1" value="<?php echo set_value('survey_active', isset($survey['survey_active']) ? $survey['survey_active'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('survey_active'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Survey" />
            or <?php echo anchor(SITE_AREA .'/developer/survey', lang('survey_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Survey.Developer.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('survey_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('survey_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
