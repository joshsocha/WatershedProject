<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/observation') ?>" id="list"><?php echo lang('observation_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Observation.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/observation/create') ?>" id="create_new"><?php echo lang('observation_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>