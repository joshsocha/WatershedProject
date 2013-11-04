<h1>Help</h1>
<div class="hero-unit">
    <h3>
        <?php foreach ($records as $record) : ?>

            <?php
            $record = (array)$record;
            if (!empty($record)) {
                if ($record['help_type'] == 'head') {
                    echo($record['help_text']);
                }
            }
            ?>
        <?php endforeach; ?>
    </h3>
    [Site Tour Coming Soon]
</div>

<div class="row">
    <div class="span12">
        <h2>FAQs</h2>
    </div>
</div>
<?php foreach ($records as $record) : ?>
    <div class="row">
        <div class="span4">
            <h4>

                <?php
                $record = (array)$record;
                if (!empty($record)) {
                    if ($record['help_type'] == 'FAQ') {
                        echo($record['help_title']);
                    }
                }
                ?>
            </h4>
        </div>

        <div class="span8 large">

            <?php
            if (!empty($record)) {
                if ($record['help_type'] == 'FAQ') {
                    echo($record['help_text']);
                }
            }
            ?>
        </div>
    </div>
    <br>
<?php endforeach; ?>
