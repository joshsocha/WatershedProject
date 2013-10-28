<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/settings/help') ?>" id="list"><?php echo lang('help_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Help.Settings.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/settings/help/create') ?>" id="create_new"><?php echo lang('help_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>