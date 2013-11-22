<?php echo form_open("/observation/search", array("method"=>"post", "class"=>"pull-right")); ?>
<!-- <form method="post" action="/observation/search" class="pull-right"> -->
	<div class="input-append">
		<input type="text" class="span-2" name="query" placeholder="Search..." />
		<button type="submit" class="btn" style="margin-left:-5px;">Search</button>
	</div>
</form>