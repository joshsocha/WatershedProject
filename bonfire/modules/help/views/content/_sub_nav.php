<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/help') ?>" id="list"><?php echo lang('help_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Help.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/help/create') ?>" id="create_new"><?php echo lang('help_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>