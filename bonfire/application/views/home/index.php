<div class="container">

    <div class="row">

        <div class="span-8">
            <h1>Welcome to the Watershed Web App.</h1>

            <p>Community based water monitoring</p>
        </div>

        <div class="span-3 survey">
            <div class="surveyHeader">
                Survey
            </div>
            <div class="surveyBody">

                <?php if ($records['display_results']) : ?>
                    <?php echo $records['question']; ?><br/>

                    <?php foreach ($records['results'] as $result) : ?>
                        <?php echo $result?> <br/>

                    <?php endforeach; ?>

                <?php else: ?>
                <?php echo form_open('home/submit_survey/'.$records['survey_id']); ?>
                <form>
                <!--Dont display survey if it doesnt exist-->
                <?php if (!empty($records)) : ?>
                    <?php echo $records['question']; ?><br/>

                    <?php foreach ($records['answers'] as $answer) : ?>
                         <input type="radio"
                               name="answer"
                               value="<?php echo($answer['id'])?>"> <?php echo($answer['survey_answer_text'])?><br/>
                        <span class="help-inline"><?php echo form_error('answer'.$answer['id']); ?></span>

                    <?php endforeach; ?>
                    <input class="btn" type="submit" value="Submit">
                <?php else: ?>
                    <td>No Survey</td>
                <?php endif; ?>
                    <?php endif; ?>
                <br/>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //$('.carousel').carousel()
</script>