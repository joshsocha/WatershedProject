<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/developer/survey') ?>" id="list"><?php echo lang('survey_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Survey.Developer.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/developer/survey/create') ?>" id="create_new"><?php echo lang('survey_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>