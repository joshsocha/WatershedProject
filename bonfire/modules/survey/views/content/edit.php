<script>
    $(document).ready(function () {
        var answerCounter = 0;
        $("#btnAddSurveyAnswer").click(function () {

            if ($("#txtAddAnswer").val().length != 0) {
                // Get the main Div in which all the other divs will be added
                var mainContainer = document.getElementById('dynamicAnswerContainer');
                // Create a new div for holding text and button input elements
                var newDiv = document.createElement('div');
                // Create a new text input
                var newText = document.createElement('input');
                newText.type = "text";
                newText.readOnly = true;
                newText.value = $('#txtAddAnswer').val();
                newText.name = 'lblAddAnswer' + answerCounter.toString();


                // Create a new button input
                var newDelButton = document.createElement('input');
                newDelButton.type = "button";
                newDelButton.value = "Delete";

                // Append new text input to the newDiv
                newDiv.appendChild(newText);


                // Append new button input to the newDiv
                newDiv.appendChild(newDelButton);
                // Append newDiv input to the mainContainer div
                mainContainer.appendChild(newDiv);

                answerCounter++;

                // Add a handler to button for deleting the newDiv from the mainContainer
                newDelButton.onclick = function () {
                    mainContainer.removeChild(newDiv);
                }

                //clear new answer box for next answer and update hidden counter
                $('#txtAddAnswer').val("");
                $('#numAnswers').val(answerCounter);
            }

        });


    });

    function addExistingAnswer(answerText,answerNum) {


            // Get the main Div in which all the other divs will be added
            var mainContainer = document.getElementById('dynamicAnswerContainer');
            // Create a new div for holding text and button input elements
            var newDiv = document.createElement('div');
            // Create a new text input
            var newText = document.createElement('input');
            newText.type = "text";
            newText.readOnly = true;
            newText.value = answerText;
            newText.name = 'lblAddAnswer' + answerNum.toString();


            // Create a new button input
            var newDelButton = document.createElement('input');
            newDelButton.type = "button";
            newDelButton.value = "Delete";

            // Append new text input to the newDiv
            newDiv.appendChild(newText);


            // Append new button input to the newDiv
            newDiv.appendChild(newDelButton);
            // Append newDiv input to the mainContainer div
            mainContainer.appendChild(newDiv);

            // Add a handler to button for deleting the newDiv from the mainContainer
            newDelButton.onclick = function () {
                mainContainer.removeChild(newDiv);
            }
    }
</script>

<?php if (validation_errors()) : ?>
    <div class="alert alert-block alert-error fade in ">
        <a class="close" data-dismiss="alert">&times;</a>
        <h4 class="alert-heading">Please fix the following errors :</h4>
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if (isset($survey)) {
    $survey = (array)$survey;
}

if (isset($survey_answers)) {
    $survey_answers = (array)$survey_answers;

}
$id = isset($survey['id']) ? $survey['id'] : '';
?>

<div class="admin-box">
    <h3>Survey</h3>

    <?php echo form_open($this->uri->uri_string()); ?>
    <fieldset>


        <div class="row">

            <!-- add/edit bf_survey Table Info -->

            <div class="span3">
                <div class="control-group &lt;?php echo form_error('survey_name') ? 'error' : ''; ?&gt;">
                    <?php echo form_label('Survey Name' . lang('bf_form_label_required'), 'survey_name', array('class' => "control-label")); ?>
                    <input id="survey_name" name="survey_name" type="text"
                           value="<?php echo set_value('survey_name', isset($survey['survey_name']) ? $survey['survey_name'] : ''); ?>">
                    <span class="help-inline"><?php echo form_error('$survey'); ?></span>
                </div>

                <div class="control-group &lt;?php echo form_error('survey_question') ? 'error' : ''; ?&gt;">
                    <?php echo form_label('Survey Question' . lang('bf_form_label_required'), 'survey_question', array('class' => "control-label")); ?>
                    <input id="survey_question" name="survey_question" type="text"
                           value="<?php echo set_value('survey_question', isset($survey['survey_question']) ? $survey['survey_question'] : ''); ?>">
                    <span class="help-inline"><?php echo form_error('$survey'); ?></span>
                </div>

                <div class="control-group &lt;?php echo form_error('survey_name') ? 'error' : ''; ?&gt;">
                    <label class="checkbox" for="survey_active"> Active
                        <input type="checkbox" id="survey_active" name="survey_active"
                               value="1" <?php echo (isset($survey->survey_active) && $survey->survey_active == 1) ? 'checked="checked"' : set_checkbox('survey_active', 1); ?>>
                        <span class="help-inline"><?php echo form_error('$survey'); ?></span>
                    </label>
                </div>
            </div>

            <!-- add/edit bf_survey_answers Table Info -->
            <div id="dynamicAnswerContainer" class="span8">
                <?php echo form_label('Enter a possible survey answer'); ?>
                <input type="text" id="txtAddAnswer" name="txtAddAnswer" value="">
                <span class="help-inline"><?php echo form_error('numAnswers'); ?></span>
                <a id="btnAddSurveyAnswer" href="#" class="cancel btn-mini">Add Survey Answer</a>
                <?php foreach ($survey_answers as $survey_answer) : ?>
                    <script type="text/javascript">
                        var numAnswer = $('#numAnswers').val();
                        addExistingAnswer("<?php echo($survey_answer['survey_answer_text'])?>","<?php echo($survey_answer['survey_answer_number'])?>")
                    </script>

                <?php endforeach; ?>
                <input id="numAnswers" name="numAnswers" type="hidden" value="0">
            </div>
        </div>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Survey"/>
            or <?php echo anchor(SITE_AREA . '/developer/survey', lang('survey_cancel'), 'class="btn btn-warning"'); ?>

        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
