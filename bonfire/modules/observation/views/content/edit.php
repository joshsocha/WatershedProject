
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
        <div class="accordion" id="accordion_edit">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_edit" href="#collapseObservationEssentials">
                        <?php echo lang('observation_essentials'); ?>
                    </a>
                </div>
                <div id="collapseObservationEssentials" class="accordion-body collapse in">
                    <div class="accordion-inner">

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

                    </div>
                </div>
            </div>

            <div class="accordian-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_edit" href="#collapseStreamCharacteristics">
                        <?php echo lang('stream_characteristics'); ?>
                    </a>
                </div>
                <div id="collapseStreamCharacteristics" class="accordion-body collapse in">
                    <div class="accordion-inner">

                        <div class="control-group <?php echo form_error('observation_water_color') ? 'error' : ''; ?>">
                            <?php echo form_label('What color is the water? (Check all that apply)', 'color_clear', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="color_clear"> Clear
                                    <input type="checkbox" id="color_clear" name="color_clear" value="1" <?php echo (isset($colors->color_clear) && $colors->color_clear == 1) ? 'checked="checked"' : set_checkbox('color_clear', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_clear'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_oily"> Oily
                                    <input type="checkbox" id="color_oily" name="color_oily" value="1" <?php echo (isset($colors->color_oily) && $colors->color_oily == 1) ? 'checked="checked"' : set_checkbox('color_oily', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_oily'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_black"> Black
                                    <input type="checkbox" id="color_black" name="color_black" value="1" <?php echo (isset($colors->color_black) && $colors->color_black == 1) ? 'checked="checked"' : set_checkbox('color_black', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_oily'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_foamy"> Foamy
                                    <input type="checkbox" id="color_foamy" name="color_foamy" value="1" <?php echo (isset($colors->color_foamy) && $colors->color_foamy == 1) ? 'checked="checked"' : set_checkbox('color_foamy', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_foamy'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_green"> Green
                                    <input type="checkbox" id="color_green" name="color_green" value="1" <?php echo (isset($colors->color_green) && $colors->color_green == 1) ? 'checked="checked"' : set_checkbox('color_green', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_green'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_muddy"> Muddy
                                    <input type="checkbox" id="color_muddy" name="color_muddy" value="1" <?php echo (isset($colors->color_muddy) && $colors->color_muddy == 1) ? 'checked="checked"' : set_checkbox('color_muddy', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_muddy'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_brown"> Brown
                                    <input type="checkbox" id="color_brown" name="color_brown" value="1" <?php echo (isset($colors->color_brown) && $colors->color_brown == 1) ? 'checked="checked"' : set_checkbox('color_brown', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_brown'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="color_other"> Other
                                    <input type="checkbox" id="color_other" name="color_other" value="1" <?php echo (isset($colors->color_other) && $colors->color_other == 1) ? 'checked="checked"' : set_checkbox('color_other', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('color_other'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_water_smell') ? 'error' : ''; ?>">
                            <?php echo form_label('What does the water smell like? (Check all that apply)', 'observation_water_smell', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="smell_no_odor"> No odor
                                    <input type="checkbox" id="smell_no_odor" name="smell_no_odor" value="1" <?php echo (isset($smells->smell_no_odor) && $smells->smell_no_odor == 1) ? 'checked="checked"' : set_checkbox('smell_no_odor', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_no_odor'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_rotten_egg"> Rotten egg
                                    <input type="checkbox" id="smell_rotten_egg" name="smell_rotten_egg" value="1" <?php echo (isset($smells->smell_rotten_egg) && $smells->smell_rotten_egg == 1) ? 'checked="checked"' : set_checkbox('smell_rotten_egg', 1); ?>>
                                    <span class ="help-inline"><?php echo form_error('smell_rotten_egg'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_gasoline_oil"> Gasoline or oil
                                    <input type="checkbox" id="smell_gasoline_oil" name="smell_gasoline_oil" value="1" <?php echo (isset($smells->smell_gasoline_oil) && $smells->smell_gasoline_oil == 1) ? 'checked="checked"' : set_checkbox('smell_gasoline_oil', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_gasoline_oil'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_chemical"> Chemical
                                    <input type="checkbox" id="smell_chemical" name="smell_chemical" value="1" <?php echo (isset($smells->smell_chemical) && $smells->smell_chemical == 1) ? 'checked="checked"' : set_checkbox('smell_chemical', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_chemical'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_chlorine"> Chlorine
                                    <input type="checkbox" id="smell_chlorine" name="smell_chlorine" value="1" <?php echo (isset($smells->smell_chlorine) && $smells->smell_chlorine == 1) ? 'checked="checked"' : set_checkbox('smell_chlorine', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_chlorine'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_sewage"> Sewage
                                    <input type="checkbox" id="smell_sewage" name="smell_sewage" value="1" <?php echo (isset($smells->smell_sewage) && $smells->smell_sewage == 1) ? 'checked="checked"' : set_checkbox('smell_sewage', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_sewage'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_rotting"> Rotting
                                    <input type="checkbox" id="smell_rotting" name="smell_rotting" value="1" <?php echo (isset($smells->smell_rotting) && $smells->smell_rotting == 1) ? 'checked="checked"' : set_checkbox('smell_rotting', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_rotting'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="smell_fishy"> Fishy
                                    <input type="checkbox" id="smell_fishy" name="smell_fishy" value="1" <?php echo (isset($smells->smell_fishy) && $smells->smell_fishy == 1) ? 'checked="checked"' : set_checkbox('smell_fishy', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('smell_fishy'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_water_speed') ? 'error' : ''; ?>">
                            <?php echo form_label('How fast is the water moving?'. lang('bf_form_label_required'), 'observation_water_speed', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="very_fast" name="observation_water_speed" type="radio" class="" value="very_fast" <?php echo (isset($observation['observation_water_speed']) && $observation['observation_water_speed'] == 'very_fast') ? 'checked="checked"' : set_radio('observation_water_speed', 'very_fast', true); ?> />
                                    <label for="very_fast">Very fast</label>
                                    <input id="fast" name="observation_water_speed" type="radio" class="" value="fast" <?php echo (isset($observation['observation_water_speed']) && $observation['observation_water_speed'] == 'fast') ? 'checked="checked"' : set_radio('observation_water_speed', 'fast'); ?> />
                                    <label for="fast">Fast</label>
                                    <input id="slow" name="observation_water_speed" type="radio" class="" value="slow" <?php echo (isset($observation['observation_water_speed']) && $observation['observation_water_speed'] == 'slow') ? 'checked="checked"' : set_radio('observation_water_speed', 'slow'); ?> />
                                    <label for="slow">Slow</label>
                                    <input id="very_slow" name="observation_water_speed" type="radio" class="" value="very_slow" <?php echo (isset($observation['observation_water_speed']) && $observation['observation_water_speed'] == 'very_slow') ? 'checked="checked"' : set_radio('observation_water_speed', 'very_slow'); ?> />
                                    <label for="very_slow">Very slow</label>
                                    <span class="help-inline"><?php echo form_error('observation_water_speed'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_water_movement') ? 'error' : ''; ?>">
                            <?php echo form_label('Which condition best describes the water movement in the Streamwalk area?'. lang('bf_form_label_required'), 'observation_water_movement', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="mostly_fast_throughout" name="observation_water_movement" type="radio" class="" value="mostly_fast_throughout" <?php echo (isset($observation['observation_water_movement']) && $observation['observation_water_movement'] == 'mostly_fast_throughout') ? 'checked="checked"' : set_radio('observation_water_movement', 'mostly_fast_throughout', TRUE); ?> />
                                    <label for="mostly_fast_throughout">Mostly fast throughout</label>
                                    <input id="changes_from_fast_to_slow" name="observation_water_movement" type="radio" class="" value="changes_from_fast_to_slow" <?php echo (isset($observation['observation_water_movement']) && $observation['observation_water_movement'] == 'changes_from_fast_to_slow') ? 'checked="checked"' : set_radio('observation_water_movement', 'changes_from_fast_to_slow'); ?> />
                                    <label for="changes_from_fast_to_slow">Changes from fast to slow</label>
                                    <input id="mostly_slow_throughout" name="observation_water_movement" type="radio" class="" value="mostly_slow_throughout" <?php echo (isset($observation['observation_water_movement']) && $observation['observation_water_movement'] == 'mostly_slow_throughout') ? 'checked="checked"' : set_radio('observation_water_movement', 'mostly_slow_throughout'); ?> />
                                    <label for="mostly_slow_throughout">Mostly slow throughout</label>
                                    <span class="help-inline"><?php echo form_error('observation_water_movement'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_stream_composition') ? 'error' : ''; ?>">
                            <?php echo form_label('What is the composition of the stream bottom? (Check all that apply)', 'observation_water_smell', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="composition_sand"> Sand
                                    <input type="checkbox" id="composition_sand" name="composition_sand" value="1" <?php echo (isset($composition->composition_sand) && $composition->composition_sand == 1) ? 'checked="checked"' : set_checkbox('composition_sand', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_sand'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="composition_gravel"> Gravel
                                    <input type="checkbox" id="composition_gravel" name="composition_gravel" value="1" <?php echo (isset($composition->composition_gravel) && $composition->composition_gravel == 1) ? 'checked="checked"' : set_checkbox('composition_gravel', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_gravel'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="composition_boulders"> Boulders
                                    <input type="checkbox" id="composition_boulders" name="composition_boulders" value="1" <?php echo (isset($composition->composition_boulders) && $composition->composition_boulders == 1) ? 'checked="checked"' : set_checkbox('composition_boulders', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_boulders'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="composition_silt"> Silt
                                    <input type="checkbox" id="composition_silt" name="composition_silt" value="1" <?php echo (isset($composition->composition_silt) && $composition->composition_silt == 1) ? 'checked="checked"' : set_checkbox('composition_silt', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_silt'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="composition_other"> Other
                                    <input type="checkbox" id="composition_other" name="composition_other" value="1" <?php echo (isset($composition->composition_other) && $composition->composition_other == 1) ? 'checked="checked"' : set_checkbox('composition_other', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_other'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="composition_man_made_cement"> Man made concrete
                                    <input type="checkbox" id="composition_man_made_cement" name="composition_man_made_cement" value="1" <?php echo (isset($composition->composition_man_made_cement) && $composition->composition_man_made_cement == 1) ? 'checked="checked"' : set_checkbox('composition_man_made_cement', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('composition_man_made_cement'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_stream_materials') ? 'error' : ''; ?>">
                            <?php echo form_label('What materials form most of the stream bottom(THIS NEEDS TO BE CHANGED)', 'observation_water_smell', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="material_sand"> Sand
                                    <input type="checkbox" id="material_sand" name="material_sand" value="1" <?php echo (isset($materials->material_sand) && $materials->material_sand == 1) ? 'checked="checked"' : set_checkbox('material_sand', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_sand'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="material_gravel"> Gravel
                                    <input type="checkbox" id="material_gravel" name="material_gravel" value="1" <?php echo (isset($materials->material_gravel) && $materials->material_gravel == 1) ? 'checked="checked"' : set_checkbox('material_gravel', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_gravel'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="material_boulders"> Boulders
                                    <input type="checkbox" id="material_boulders" name="material_boulders" value="1" <?php echo (isset($materials->material_boulders) && $materials->material_boulders == 1) ? 'checked="checked"' : set_checkbox('material_boulders', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_boulders'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="material_bedrock"> Bedrock
                                    <input type="checkbox" id="material_bedrock" name="material_bedrock" value="1" <?php echo (isset($materials->material_bedrock) && $materials->material_bedrock == 1) ? 'checked="checked"' : set_checkbox('material_bedrock', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_bedrock'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="material_silt"> silt
                                    <input type="checkbox" id="material_silt" name="material_silt" value="1" <?php echo (isset($materials->material_silt) && $materials->material_silt == 1) ? 'checked="checked"' : set_checkbox('material_silt', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_silt'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="material_other"> Other
                                    <input type="checkbox" id="material_other" name="material_other" value="1" <?php echo (isset($materials->material_other) && $materials->material_other == 1) ? 'checked="checked"' : set_checkbox('material_other', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('material_other'); ?></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordian-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_edit" href="#collapseStreamBiology">
                        <?php echo lang('stream_biology'); ?>
                    </a>
                </div>
                <div id="collapseStreamBiology" class="accordion-body collapse in">
                    <div class="accordion-inner">

                        <div class="control-group <?php echo form_error('observation_algae') ? 'error' : ''; ?>">
                            <?php echo form_label('Are algae present?(Algae: variety of aquatic photosynthetic organisms, Check all that you see)', 'observation_algae', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="algae_not_present"> Not present
                                    <input type="checkbox" id="algae_not_present" name="algae_not_present" value="1" <?php echo (isset($algae->algae_not_present) && $algae->algae_not_present == 1) ? 'checked="checked"' : set_checkbox('algae_not_present', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_not_present'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_present_in_spots"> Present in spots
                                    <input type="checkbox" id="algae_present_in_spots" name="algae_present_in_spots" value="1" <?php echo (isset($algae->algae_present_in_spots) && $algae->algae_present_in_spots == 1) ? 'checked="checked"' : set_checkbox('algae_present_in_spots', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_present_in_spots'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_attached_to_rocks"> Attached to rocks
                                    <input type="checkbox" id="algae_attached_to_rocks" name="algae_attached_to_rocks" value="1" <?php echo (isset($algae->algae_attached_to_rocks) && $algae->algae_attached_to_rocks == 1) ? 'checked="checked"' : set_checkbox('algae_attached_to_rocks', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_attached_to_rocks'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_everywhere"> Everywhere
                                    <input type="checkbox" id="algae_everywhere" name="algae_everywhere" value="1" <?php echo (isset($algae->algae_everywhere) && $algae->algae_everywhere == 1) ? 'checked="checked"' : set_checkbox('algae_everywhere', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_everywhere'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_floating"> Floating
                                    <input type="checkbox" id="algae_floating" name="algae_floating" value="1" <?php echo (isset($algae->algae_floating) && $algae->algae_floating == 1) ? 'checked="checked"' : set_checkbox('algae_floating', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_floating'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_matted_on_the_streambed"> Matted on the streambed
                                    <input type="checkbox" id="algae_matted_on_the_streambed" name="algae_matted_on_the_streambed" value="1" <?php echo (isset($algae->algae_matted_on_the_streambed) && $algae->algae_matted_on_the_streambed == 1) ? 'checked="checked"' : set_checkbox('algae_matted_on_the_streambed', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_matted_on_the_streambed'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_algae_color') ? 'error' : ''; ?>">
                            <?php echo form_label('If present, what color are the algae (Check all that apply)', 'observation_algae_color', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="algae_light_green"> Light green
                                    <input type="checkbox" id="algae_light_green" name="algae_light_green" value="1" <?php echo (isset($algae_color->algae_light_green) && $algae_color->algae_light_green == 1) ? 'checked="checked"' : set_checkbox('algae_light_green', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_light_green'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_dark_green"> Dark green
                                    <input type="checkbox" id="algae_dark_green" name="algae_dark_green" value="1" <?php echo (isset($algae_color->algae_dark_green) && $algae_color->algae_dark_green == 1) ? 'checked="checked"' : set_checkbox('algae_dark_green', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_dark_green'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_brown"> Brown
                                    <input type="checkbox" id="algae_brown" name="algae_brown" value="1" <?php echo (isset($algae_color->algae_brown) && $algae_color->algae_brown == 1) ? 'checked="checked"' : set_checkbox('algae_brown', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_brown'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_red"> Red
                                    <input type="checkbox" id="algae_red" name="algae_red" value="1" <?php echo (isset($algae_color->algae_red) && $algae_color->algae_red == 1) ? 'checked="checked"' : set_checkbox('algae_red', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_red'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="algae_orange"> Orange
                                    <input type="checkbox" id="algae_orange" name="algae_orange" value="1" <?php echo (isset($algae_color->algae_orange) && $algae_color->algae_orange == 1) ? 'checked="checked"' : set_checkbox('algae_orange', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('algae_orange'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_fish_presence') ? 'error' : ''; ?>">
                            <?php echo form_label('Do you see any fish in the stream?'. lang('bf_form_label_required'), 'observation_fish_presence', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="absent" name="observation_fish_presence" type="radio" class="" value="absent" <?php echo (isset($observation['observation_fish_presence']) && $observation['observation_fish_presence'] == 'absent') ? 'checked="checked"' : set_radio('observation_fish_presence', 'absent', TRUE); ?> />
                                    <label for="absent">Absent</label>
                                    <input id="moderately_abundant" name="observation_fish_presence" type="radio" class="" value="moderately_abundant" <?php echo (isset($observation['observation_fish_presence']) && $observation['observation_fish_presence'] == 'moderately_abundant') ? 'checked="checked"' : set_radio('observation_fish_presence', 'moderately_abundant'); ?> />
                                    <label for="moderately_abundant">Moderately abundant</label>
                                    <input id="abundant" name="observation_fish_presence" type="radio" class="" value="abundant" <?php echo (isset($observation['observation_fish_presence']) && $observation['observation_fish_presence'] == 'abundant') ? 'checked="checked"' : set_radio('observation_fish_presence', 'abundant'); ?> />
                                    <label for="abundant">Abundant</label>
                                    <span class="help-inline"><?php echo form_error('observation_fish_presence'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_fish_types') ? 'error' : ''; ?>">
                            <?php echo form_label('How many types of fish are in the stream'. lang('bf_form_label_required'), 'observation_fish_types', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="1" name="observation_fish_types" type="radio" class="" value="1" <?php echo (isset($observation['observation_fish_types']) && $observation['observation_fish_types'] == '1') ? 'checked="checked"' : set_radio('observation_fish_types', '1', TRUE); ?> />
                                    <label for="1">1</label>
                                    <input id="2-4" name="observation_fish_types" type="radio" class="" value="2-4" <?php echo (isset($observation['observation_fish_types']) && $observation['observation_fish_types'] == '2-4') ? 'checked="checked"' : set_radio('observation_fish_types', '2-4'); ?> />
                                    <label for="2-4">2-4</label>
                                    <input id="4plus" name="observation_fish_types" type="radio" class="" value="4plus" <?php echo (isset($observation['observation_fish_types']) && $observation['observation_fish_types'] == '4plus') ? 'checked="checked"' : set_radio('observation_fish_types', '4plus'); ?> />
                                    <label for="4plus">4+</label>
                                    <span class="help-inline"><?php echo form_error('observation_fish_types'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_rep_amph_present') ? 'error' : ''; ?>">
                            <?php echo form_label('Did you see any amphibians or reptiles?'. lang('bf_form_label_required'), 'observation_rep_amph_present', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="yes_rep" name="observation_rep_amph_present" type="radio" class="" value="yes" <?php echo (isset($observation['observation_rep_amph_present']) && $observation['observation_rep_amph_present'] == 'yes') ? 'checked="checked"' : set_radio('observation_rep_amph_present', 'yes', TRUE); ?> />
                                    <label for="yes_rep">Yes</label>
                                    <input id="no_rep" name="observation_rep_amph_present" type="radio" class="" value="no" <?php echo (isset($observation['observation_rep_amph_present']) && $observation['observation_rep_amph_present'] == 'no') ? 'checked="checked"' : set_radio('observation_rep_amph_present', 'no'); ?> />
                                    <label for="no_rep">No</label>
                                    <span class="help-inline"><?php echo form_error('observation_rep_amph_present'); ?></span>
                                </label>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="accordian-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_edit" href="#collapseStreamSurroundings">
                        <?php echo lang('stream_surroundings'); ?>
                    </a>
                </div>
                <div id="collapseStreamSurroundings" class="accordion-body collapse in">
                    <div class="accordion-inner">

                        <div class="control-group <?php echo form_error('observation_tree_shade') ? 'error' : ''; ?>">
                            <?php echo form_label('As you consider the stream as a whole, how much of its surface area is shaded by trees?'. lang('bf_form_label_required'), 'observation_tree_shade', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="completely_shaded" name="observation_tree_shade" type="radio" class="" value="completely_shaded" <?php echo (isset($observation['observation_tree_shade']) && $observation['observation_tree_shade'] == 'completely_shaded') ? 'checked="checked"' : set_radio('observation_tree_shade', 'completely_shaded', TRUE); ?> />
                                    <label for="completely_shaded">Completely shaded</label>
                                    <input id="more_than_half_shaded" name="observation_tree_shade" type="radio" class="" value="more_than_half_shaded" <?php echo (isset($observation['observation_tree_shade']) && $observation['observation_tree_shade'] == 'more_than_half_shaded') ? 'checked="checked"' : set_radio('observation_tree_shade', 'more_than_half_shaded'); ?> />
                                    <label for="more_than_half_shaded">More than half shaded</label>
                                    <input id="less_than_half_shaded" name="observation_tree_shade" type="radio" class="" value="less_than_half_shaded" <?php echo (isset($observation['observation_tree_shade']) && $observation['observation_tree_shade'] == 'less_than_half_shaded') ? 'checked="checked"' : set_radio('observation_tree_shade', 'less_than_half_shaded'); ?> />
                                    <label for="less_than_half_shaded">Less than half shaded</label>
                                    <input id="no_shade_or_almost_none" name="observation_tree_shade" type="radio" class="" value="no_shade_or_almost_none" <?php echo (isset($observation['observation_tree_shade']) && $observation['observation_tree_shade'] == 'no_shade_or_almost_none') ? 'checked="checked"' : set_radio('observation_tree_shade', 'no_shade_or_almost_none'); ?> />
                                    <label for="no_shade_or_almost_none">No shade, or almost none</label>
                                    <span class="help-inline"><?php echo form_error('observation_tree_shade'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_left_bank') ? 'error' : ''; ?>">
                            <?php echo form_label('Facing Upstream, how much of the stream bank is covered by plants, rocks and logs? <br><br> Left Bank:'. lang('bf_form_label_required'), 'observation_left_bank', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="completely_covered_left" name="observation_left_bank" type="radio" class="" value="completely_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'completely_covered') ? 'checked="checked"' : set_radio('observation_left_bank', 'completely_covered', TRUE); ?> />
                                    <label for="completely_covered_left">Completely covered</label>
                                    <input id="more_than_half_covered_left" name="observation_left_bank" type="radio" class="" value="more_than_half_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'more_than_half_covered') ? 'checked="checked"' : set_radio('observation_left_bank', 'more_than_half_covered'); ?> />
                                    <label for="more_than_half_covered_left">More than half covered</label>
                                    <input id="less_than_half_covered_left" name="observation_left_bank" type="radio" class="" value="less_than_half_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'less_than_half_covered') ? 'checked="checked"' : set_radio('observation_left_bank', 'less_than_half_covered'); ?> />
                                    <label for="less_than_half_covered_left">Less than half covered</label>
                                    <input id="not_covered_left" name="observation_left_bank" type="radio" class="" value="not_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'not_covered') ? 'checked="checked"' : set_radio('observation_left_bank', 'not_covered'); ?> />
                                    <label for="not_covered_left">Not covered</label>
                                    <span class="help-inline"><?php echo form_error('observation_left_bank'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_right_bank') ? 'error' : ''; ?>">
                            <?php echo form_label('Facing Upstream, how much of the stream bank is covered by plants, rocks and logs? <br><br> Right Bank:'. lang('bf_form_label_required'), 'observation_right_bank', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="completely_covered_right" name="observation_right_bank" type="radio" class="" value="completely_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'completely_covered') ? 'checked="checked"' : set_radio('observation_right_bank', 'completely_covered', TRUE); ?> />
                                    <label for="completely_covered_right">Completely covered</label>
                                    <input id="more_than_half_covered_right" name="observation_right_bank" type="radio" class="" value="more_than_half_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'more_than_half_covered') ? 'checked="checked"' : set_radio('observation_right_bank', 'more_than_half_covered'); ?> />
                                    <label for="more_than_half_covered_right">More than half covered</label>
                                    <input id="less_than_half_covered_right" name="observation_right_bank" type="radio" class="" value="less_than_half_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'less_than_half_covered') ? 'checked="checked"' : set_radio('observation_right_bank', 'less_than_half_covered'); ?> />
                                    <label for="less_than_half_covered_right">Less than half covered</label>
                                    <input id="not_covered_right" name="observation_right_bank" type="radio" class="" value="not_covered" <?php echo (isset($observation['observation_left_bank']) && $observation['observation_left_bank'] == 'not_covered') ? 'checked="checked"' : set_radio('observation_right_bank', 'not_covered'); ?> />
                                    <label for="not_covered_right">Not covered</label>
                                    <span class="help-inline"><?php echo form_error('observation_right_bank'); ?></span>
                                </label>
                            </div>
                        </div>
        
                        <div class="control-group <?php echo form_error('observation_land_use') ? 'error' : ''; ?>">
                            <?php echo form_label('How is the land along the stream being used? Look at the areas on both sides of the stream and immediately upstream from you sampling site (check all uses observed)', 'observation_land_use', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="land_farming"> Farming/crops
                                    <input type="checkbox" id="land_farming" name="land_farming" value="1" <?php echo (isset($land->land_farming) && $land->land_farming == 1) ? 'checked="checked"' : set_checkbox('land_farming', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_farming'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_forest"> Forest
                                    <input type="checkbox" id="land_forest" name="land_forest" value="1" <?php echo (isset($land->land_forest) && $land->land_forest == 1) ? 'checked="checked"' : set_checkbox('land_forest', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_forest'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_residential">Residential neighborhood
                                    <input type="checkbox" id="land_residential" name="land_residential" value="1" <?php echo (isset($land->land_residential) && $land->land_residential == 1) ? 'checked="checked"' : set_checkbox('land_residential', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_residential'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_poultry_swine"> Poultry/swine
                                    <input type="checkbox" id="land_poultry_swine" name="land_poultry_swine" value="1" <?php echo (isset($land->land_poultry_swine) && $land->land_poultry_swine == 1) ? 'checked="checked"' : set_checkbox('land_poultry_swine', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_poultry_swine'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_stores"> Stores/malls
                                    <input type="checkbox" id="land_stores" name="land_stores" value="1" <?php echo (isset($land->land_stores) && $land->land_stores == 1) ? 'checked="checked"' : set_checkbox('land_stores', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_stores'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_mining"> Mining
                                    <input type="checkbox" id="land_mining" name="land_mining" value="1" <?php echo (isset($land->land_mining) && $land->land_mining == 1) ? 'checked="checked"' : set_checkbox('land_mining', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_mining'); ?></span>
                                </label>

                                <label class="checkbox" for="land_construction"> Construction
                                    <input type="checkbox" id="land_construction" name="land_construction" value="1" <?php echo (isset($land->land_construction) && $land->land_construction == 1) ? 'checked="checked"' : set_checkbox('land_construction', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_construction'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_factories"> Factories
                                    <input type="checkbox" id="land_factories" name="land_factories" value="1" <?php echo (isset($land->land_factories) && $land->land_factories == 1) ? 'checked="checked"' : set_checkbox('land_factories', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_factories'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="land_logging"> Logging
                                    <input type="checkbox" id="land_logging" name="land_logging" value="1" <?php echo (isset($land->land_logging) && $land->land_logging == 1) ? 'checked="checked"' : set_checkbox('land_logging', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('land_logging'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_stream_use') ? 'error' : ''; ?>">
                            <?php echo form_label('What are likely uses of the stream?', 'observation_stream_use', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="stream_drinking"> Drinking water supply
                                    <input type="checkbox" id="stream_drinking" name="stream_drinking" value="1" <?php echo (isset($stream->stream_drinking) && $stream->stream_drinking == 1) ? 'checked="checked"' : set_checkbox('stream_drinking', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_drinking'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_recreation"> Recreation
                                    <input type="checkbox" id="stream_recreation" name="stream_recreation" value="1" <?php echo (isset($stream->stream_recreation) && $stream->stream_recreation == 1) ? 'checked="checked"' : set_checkbox('stream_recreation', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_recreation'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_swimming">Swimming
                                    <input type="checkbox" id="stream_swimming" name="stream_swimming" value="1" <?php echo (isset($stream->stream_swimming) && $stream->stream_swimming == 1) ? 'checked="checked"' : set_checkbox('land_forest', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_swimming'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_fishing"> Fishing
                                    <input type="checkbox" id="stream_fishing" name="stream_fishing" value="1" <?php echo (isset($stream->stream_fishing) && $stream->stream_fishing == 1) ? 'checked="checked"' : set_checkbox('stream_fishing', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_fishing'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_industrial"> Industrial water supply
                                    <input type="checkbox" id="stream_industrial" name="stream_industrial" value="1" <?php echo (isset($stream->stream_industrial) && $stream->stream_industrial == 1) ? 'checked="checked"' : set_checkbox('stream_industrial', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_industrial'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_agriculture"> Agriculture
                                    <input type="checkbox" id="stream_agriculture" name="stream_agriculture" value="1" <?php echo (isset($stream->stream_agriculture) && $stream->stream_agriculture == 1) ? 'checked="checked"' : set_checkbox('stream_agriculture', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_agriculture'); ?></span>
                                </label>

                                <label class="checkbox" for="stream_irrigation"> Irrigation
                                    <input type="checkbox" id="stream_irrigation" name="stream_irrigation" value="1" <?php echo (isset($stream->stream_irrigation) && $stream->stream_irrigation == 1) ? 'checked="checked"' : set_checkbox('stream_irrigation', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_irrigation'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="stream_livestock"> Livestock watering
                                    <input type="checkbox" id="stream_livestock" name="stream_livestock" value="1" <?php echo (isset($stream->stream_livestock) && $stream->stream_livestock == 1) ? 'checked="checked"' : set_checkbox('stream_livestock', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('stream_livestock'); ?></span>
                                </label>        
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordian-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_edit" href="#collapseStreamConcerns">
                        <?php echo lang('stream_concerns'); ?>
                    </a>
                </div>
                <div id="collapseStreamConcerns" class="accordion-body collapse in">
                    <div class="accordion-inner">

                        <div class="control-group <?php echo form_error('observation_pipes') ? 'error' : ''; ?>">
                            <?php echo form_label('Are there any pipes emptying directly into or near the stream?'. lang('bf_form_label_required'), 'observation_pipes', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="yes_pipes" name="observation_pipes" type="radio" class="" value="yes" <?php echo (isset($observation['observation_pipes']) && $observation['observation_pipes'] == 'yes') ? 'checked="checked"' : set_radio('observation_pipes', 'yes', TRUE); ?> />
                                    <label for="yes_pipes">Yes</label>
                                    <input id="no_pipes" name="observation_pipes" type="radio" class="" value="no" <?php echo (isset($observation['observation_pipes']) && $observation['observation_pipes'] == 'no') ? 'checked="checked"' : set_radio('observation_pipes', 'no'); ?> />
                                    <label for="no_pipes">No</label>
                                    <span class="help-inline"><?php echo form_error('observation_pipes'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_pipe_secretion') ? 'error' : ''; ?>">
                            <?php echo form_label('if yes to previous question, is there anything coming out of it?'. lang('bf_form_label_required'), 'observation_pipe_secretion', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="yes_sec" name="observation_pipe_secretion" type="radio" class="" value="yes" <?php echo (isset($observation['observation_pipe_secretion']) && $observation['observation_pipe_secretion'] == 'yes') ? 'checked="checked"' : set_radio('observation_pipe_secretion', 'yes', TRUE); ?> />
                                    <label for="yes_sec">Yes</label>
                                    <input id="no_sec" name="observation_pipe_secretion" type="radio" class="" value="no" <?php echo (isset($observation['observation_pipe_secretion']) && $observation['observation_pipe_secretion'] == 'no') ? 'checked="checked"' : set_radio('observation_pipe_secretion', 'no'); ?> />
                                    <label for="no_sec">No</label>
                                    <span class="help-inline"><?php echo form_error('observation_pipe_secretion'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_trash') ? 'error' : ''; ?>">
                            <?php echo form_label('Is there any trash in or immediately adjacent to the stream?'. lang('bf_form_label_required'), 'observation_trash', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="radio">
                                    <input id="trash_absent" name="observation_trash" type="radio" class="" value="absent" <?php echo (isset($observation['observation_trash']) && $observation['observation_trash'] == 'absent') ? 'checked="checked"' : set_radio('observation_trash', 'absent', TRUE); ?> />
                                    <label for="trash_absent">Absent</label>
                                    <input id="trash_moderately_abundant" name="observation_trash" type="radio" class="" value="moderately_abundant" <?php echo (isset($observation['observation_trash']) && $observation['observation_trash'] == 'moderately_abundant') ? 'checked="checked"' : set_radio('observation_trash', 'moderately_abundant'); ?> />
                                    <label for="trash_moderately_abundant">Moderately abundant</label>
                                    <span class="help-inline"><?php echo form_error('observation_trash'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_barriers') ? 'error' : ''; ?>">
                            <?php echo form_label('Are there barriers in the stream?', 'observation_barriers', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <label class="checkbox" for="barriers_dams"> Dams
                                    <input type="checkbox" id="barriers_dams" name="barriers_dams" value="1" <?php echo (isset($barriers->barriers_dams) && $barriers->barriers_dams == 1) ? 'checked="checked"' : set_checkbox('barriers_dams', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('barriers_dams'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="barriers_bridges"> Bridges
                                    <input type="checkbox" id="barriers_bridges" name="barriers_bridges" value="1" <?php echo (isset($barriers->barriers_bridges) && $barriers->barriers_bridges == 1) ? 'checked="checked"' : set_checkbox('barriers_bridges', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('barriers_bridges'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="barriers_woody_debris">Woody debris
                                    <input type="checkbox" id="barriers_woody_debris" name="barriers_woody_debris" value="1" <?php echo (isset($barriers->barriers_woody_debris) && $barriers->barriers_woody_debris == 1) ? 'checked="checked"' : set_checkbox('barriers_woody_debris', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('barriers_woody_debris'); ?></span>
                                </label>
                                
                                <label class="checkbox" for="barriers_waterfalls"> Waterfalls
                                    <input type="checkbox" id="barriers_waterfalls" name="barriers_waterfalls" value="1" <?php echo (isset($barriers->barriers_waterfalls) && $barriers->barriers_waterfalls == 1) ? 'checked="checked"' : set_checkbox('barriers_waterfalls', 1); ?>>
                                    <span class="help-inline"><?php echo form_error('barriers_waterfalls'); ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group <?php echo form_error('observation_anonymous') ? 'error' : ''; ?>">
                            <?php echo form_label('Remain anonymous?', 'observation_anonymous', array('class' => "control-label") ); ?>
                            <div class='controls'>
                                <input type="checkbox" id="observation_anonymous" name="observation_anonymous" value="1" <?php echo (isset($observation['observation_anonymous']) && $observation['observation_anonymous'] == 1) ? 'checked="checked"' : set_checkbox('observation_anonymous', 1); ?>>
                                <span class="help-inline"><?php echo form_error('observation_anonymous'); ?></span>         
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
